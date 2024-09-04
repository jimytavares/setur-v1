<? php
    

        $baseQuery = function($table, $columns) use ($request, $posicao) {
            
            $query = DB::connection('pgsql_siaf')->table($table)->select('codacao')->selectRaw("INITCAP(txtdescricaoacao) as txtdescricaoacao, $columns")->where('numexerciciofinanc', $request->ano)->groupBy('codacao', 'txtdescricaoacao');

            if ($posicao === '=') {
                $query->where('mes', '=', $request->mes);
            } else {
                $query->where('mes', '<=', $request->mes);
            }

            return $query;
        };

        $subquery1 = $baseQuery('vportal_notaempenho_gastosdiretos', "
            SUM(vlrpagamento) AS vlrempenho, 
            COALESCE(null, 0) as vlrliquido,
            COALESCE(null, 0) as vlrpagamento, 
            COALESCE(null, 0) as vlrpagamentorp,
            'vportal_notaempenho_gastosdiretos' as tbvportal,
            'notaEmpenho' as tipo
        ", 'vlrempenho', 'notaEmpenho');

        $subquery2 = $baseQuery('vportal_liquidacaodespesa_gastosdiretos', "
            COALESCE(null, 0) as vlrempenho, 
            SUM(vlrpagamento) AS vlrliquido,
            COALESCE(null, 0) as vlrpagamento, 
            COALESCE(null, 0) as vlrpagamentorp,
            'vportal_liquidacaodespesa_gastosdiretos' as tbvportal,
            'liquidacao' as tipo
        ", 'vlrliquido', 'liquidacao');

        $subquery3 = $baseQuery('vportal_notapagamento_gastosdiretos', "
            COALESCE(null, 0) AS vlrempenho,
            COALESCE(null, 0) AS vlrliquido,
            SUM(vlrpagamento) AS vlrpagamento,
            SUM(vlrpagamentorp) AS vlrpagamentorp,
            'vportal_notapagamento_gastosdiretos' as tbvportal,
            CASE 
                WHEN SUM(vlrpagamento) > 0 THEN 'notaPagamento'
                WHEN SUM(vlrpagamentorp) > 0 THEN 'valorPagar'
            END as tipo
        ", 'vlrpagamento', 'notaPagamento');

        $acao = DB::connection('pgsql_siaf')
            ->table(DB::raw("({$subquery1->toSql()} UNION ALL {$subquery2->toSql()} UNION ALL {$subquery3->toSql()}) AS resultado"))
            ->mergeBindings($subquery1)
            ->mergeBindings($subquery2)
            ->mergeBindings($subquery3)
            ->select(
                'resultado.txtdescricaoacao',
                DB::raw("STRING_AGG(CONCAT(CONCAT(resultado.codacao, '/', resultado.tbvportal), '/', resultado.tipo), ',') as result"), 
                DB::raw('COALESCE(SUM(resultado.vlrempenho), 0) AS vlrempenho'), 
                DB::raw('COALESCE(SUM(resultado.vlrliquido), 0) AS vlrliquido'), 
                DB::raw('COALESCE(SUM(resultado.vlrpagamento), 0) AS vlrpagamento'), 
                DB::raw('COALESCE(SUM(resultado.vlrpagamentorp), 0) AS vlrpagamentorp')
            )
            ->groupBy('resultado.txtdescricaoacao')
            ->orderBy('resultado.txtdescricaoacao', 'ASC')
            ->paginate(10);

        // Construção do Gráfico
        $grupodespesacharts = LiquidacaoGastosDiretos::select('txtdescricaoacao', 'codgrupodespesa', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
        ->where('mes', $posicao, $request->mes)
        ->where('numexerciciofinanc', $request->ano)
        ->groupBy('txtdescricaoacao', 'codgrupodespesa')
        ->orderBy('txtdescricaoacao')
        ->get();

         return view(object) [
            'acao' => $acao  
         ];      