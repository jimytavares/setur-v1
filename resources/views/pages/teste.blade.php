<?php

namespace App\Components\Despesas;

use App\Models\GastosDireto\LiquidacaoGastosDiretos;
use App\Models\GastosDireto\NotaEmpenhoGastosDiretos;
use App\Models\GastosDireto\NotaPagamentoGastosDiretos;
use Illuminate\Support\Facades\DB;

class Despesa
{
   //Faz a query de todos os dados necessarios para montar a row de acordo com as seleÃ§oes da busca
    public function query(object $config)
    {
        if ($config->fase == 'vportal_notapagamento_gastosdiretos') {
            $model = NotaPagamentoGastosDiretos::class;
         } else if ($config->fase == 'vportal_notaempenho_gastosdiretos') {
            $model = NotaEmpenhoGastosDiretos::class;
         } else {
            $model = LiquidacaoGastosDiretos::class;
         }

         if ($config->fase == 'vportal_notapagamento_gastosdiretos') {
            $grupodespesa = $model::select('txtdescricaogrupodespesa', 'txtdescricaoelementodespesa', 'codgrupodespesa', 'codelementodespesa', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
               ->whereRaw($config->where)
               ->groupBy('txtdescricaogrupodespesa', 'txtdescricaoelementodespesa', 'codgrupodespesa', 'codelementodespesa')
               ->orderBy('txtdescricaogrupodespesa')
               ->paginate(10);
            if(property_exists($config,'request')) {
               if($config->request->dynamic == 'true') {
                  $unidadegestora = $model::select('txtdescricaounidade', 'codunidadegestora', 'codgrupodespesa', 'codelementodespesa', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
                     ->whereRaw($config->where)
                     ->groupBy('txtdescricaounidade', 'codunidadegestora', 'codgrupodespesa', 'codelementodespesa')
                     ->get();

                  $gestao = $model::select('txtdescricaogestao', 'codgestao', 'codgrupodespesa', 'codelementodespesa', 'codunidadegestora', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
                     ->whereRaw($config->where)
                     ->groupBy('txtdescricaogestao', 'codgestao', 'codgrupodespesa', 'codelementodespesa', 'codunidadegestora')
                     ->get();
                  return (object) [
                     'grupodespesa' => $grupodespesa,
                     'unidadegestora' => $unidadegestora,
                     'gestao' => $gestao,
                  ];
               }
            }
         } else {
            // Empenho e LiquidaÃ§Ã£o
            $grupodespesa = $model::select('txtdescricaogrupodespesa', 'txtdescricaoelementodespesa', 'codgrupodespesa', 'codelementodespesa', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
               ->whereRaw($config->where)
               ->groupBy('txtdescricaogrupodespesa', 'txtdescricaoelementodespesa', 'codgrupodespesa', 'codelementodespesa')
               ->orderBy('txtdescricaogrupodespesa')
               ->paginate(10);
            if(property_exists($config,'request')) {
               if($config->request->dynamic == 'true') {
                  $unidadegestora = $model::select('txtdescricaounidade', 'codunidadegestora', 'codgrupodespesa', 'codelementodespesa', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
                     ->whereRaw($config->where)
                     ->groupBy('txtdescricaounidade', 'codunidadegestora', 'codgrupodespesa', 'codelementodespesa')
                     ->get();

                  $gestao = $model::select('txtdescricaogestao', 'codgestao', 'codgrupodespesa', 'codelementodespesa', 'codunidadegestora', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
                     ->whereRaw($config->where)
                     ->groupBy('txtdescricaogestao', 'codgestao', 'codgrupodespesa', 'codelementodespesa', 'codunidadegestora')
                     ->get();
                  return (object) [
                     'grupodespesa' => $grupodespesa,
                     'unidadegestora' => $unidadegestora,
                     'gestao' => $gestao,
                  ];
               }
            }
         }
         // Retornar as consultas para a pÃ¡gina
         return (object) [
            'grupodespesa' => $grupodespesa,
         ];
    }
}

-------------------------- js
    
    function buscar() {
    let _token = document.querySelector('input[name="_token"]').value
    const busca_parametro = $('#busca_parametro').val();
    if (busca_parametro != "None") {
        document.querySelector('#load').classList.remove('hidden');
        // ComposiÃ§Ã£o do request com as condiÃ§Ãµes e vÃ¡riaveis que serÃ£o utilizadas no processamento da requisiÃ§Ã£o
        data = { buscar_por: $('#buscar_por').val(),busca_parametro, _token, ...get_consts() };
        $.ajax({
            type: 'POST',
            url: '/buscar',
            data,
            success: function (response) {
                document.querySelector('#table').innerHTML = '';
                try{
                    document.querySelector('#pag').classList.add('hidden'); //remove tab de paginacao
                } catch (err) {}
                document.querySelector('#table').innerHTML = response;
                document.querySelector('#table').setAttribute('data-resetable', "true"); //define busca como resetavel, logo podendo ser utilizado o reset
                document.querySelector('#load').classList.add('hidden'); //remove load
                if(data['reloadJs'] == 'true') {
                    reload_js("/js/jquery.treegrid.min.js");
                }
            },
            error: function (response) {
                document.querySelector('#load').classList.add('hidden');
                $('#table').html('<tr><td class="text-lg p-3 w-full"> Ocorreu um erro ao fazer a pesquisa </td><td></td></tr>');
            }
        });
    }
}

-------------------------- componente -> despesa
    
 <?php

namespace App\Components\Despesas;

use App\Models\GastosDireto\LiquidacaoGastosDiretos;
use App\Models\GastosDireto\NotaEmpenhoGastosDiretos;
use App\Models\GastosDireto\NotaPagamentoGastosDiretos;
use Illuminate\Support\Facades\DB;

class Despesa
{
   //Faz a query de todos os dados necessarios para montar a row de acordo com as seleÃ§oes da busca
    public function query(object $config)
    {
       if ($config->fase == 'vportal_notapagamento_gastosdiretos') {
            $model = NotaPagamentoGastosDiretos::class;
         } else if ($config->fase == 'vportal_notaempenho_gastosdiretos') {
            $model = NotaEmpenhoGastosDiretos::class;
         } else {
            $model = LiquidacaoGastosDiretos::class;
         }

         if ($config->fase == 'vportal_notapagamento_gastosdiretos') {
            $grupodespesa = $model::select('txtdescricaogrupodespesa', 'txtdescricaoelementodespesa', 'codgrupodespesa', 'codelementodespesa', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
               ->whereRaw($config->where)
               ->groupBy('txtdescricaogrupodespesa', 'txtdescricaoelementodespesa', 'codgrupodespesa', 'codelementodespesa')
               ->orderBy('txtdescricaogrupodespesa')
               ->paginate(10);
            if(property_exists($config,'request')) {
               if($config->request->dynamic == 'true') {
                  $unidadegestora = $model::select('txtdescricaounidade', 'codunidadegestora', 'codgrupodespesa', 'codelementodespesa', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
                     ->whereRaw($config->where)
                     ->groupBy('txtdescricaounidade', 'codunidadegestora', 'codgrupodespesa', 'codelementodespesa')
                     ->get();

                  $gestao = $model::select('txtdescricaogestao', 'codgestao', 'codgrupodespesa', 'codelementodespesa', 'codunidadegestora', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
                     ->whereRaw($config->where)
                     ->groupBy('txtdescricaogestao', 'codgestao', 'codgrupodespesa', 'codelementodespesa', 'codunidadegestora')
                     ->get();
                  return (object) [
                     'grupodespesa' => $grupodespesa,
                     'unidadegestora' => $unidadegestora,
                     'gestao' => $gestao,
                  ];
               }
            }
         } else {
            // Empenho e LiquidaÃ§Ã£o
            $grupodespesa = $model::select('txtdescricaogrupodespesa', 'txtdescricaoelementodespesa', 'codgrupodespesa', 'codelementodespesa', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
               ->whereRaw($config->where)
               ->groupBy('txtdescricaogrupodespesa', 'txtdescricaoelementodespesa', 'codgrupodespesa', 'codelementodespesa')
               ->orderBy('txtdescricaogrupodespesa')
               ->paginate(10);
            if(property_exists($config,'request')) {
               if($config->request->dynamic == 'true') {
                  $unidadegestora = $model::select('txtdescricaounidade', 'codunidadegestora', 'codgrupodespesa', 'codelementodespesa', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
                     ->whereRaw($config->where)
                     ->groupBy('txtdescricaounidade', 'codunidadegestora', 'codgrupodespesa', 'codelementodespesa')
                     ->get();

                  $gestao = $model::select('txtdescricaogestao', 'codgestao', 'codgrupodespesa', 'codelementodespesa', 'codunidadegestora', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
                     ->whereRaw($config->where)
                     ->groupBy('txtdescricaogestao', 'codgestao', 'codgrupodespesa', 'codelementodespesa', 'codunidadegestora')
                     ->get();
                  return (object) [
                     'grupodespesa' => $grupodespesa,
                     'unidadegestora' => $unidadegestora,
                     'gestao' => $gestao,
                  ];
               }
            }
         }
         // Retornar as consultas para a pÃ¡gina
         return (object) [
            'grupodespesa' => $grupodespesa,
         ];    
     }
}

-------------------------- componente row -> despesa
-------------------------- componente row -> despesa
    
    <?php

namespace App\Components\Rowdespesa;

use Illuminate\Support\Facades\Crypt;

class Rowdespesa
{
//FunÃ§Ã£o que monta a linha de resultado da busca na tabela
// $config Ã© composto por:
// "dado" => Dados que serÃ£o utilizados para a montagem da linha,
// "request" => Request original,
// 'buscar_por' => Buscar por (utilizado para montar a row de acordo com o padrÃ£o dynamic row),
// 'busca_parametro' => Parametro de busca (utilizado para montar a row de acordo com o padrÃ£o dynamic row),
// 'reset' => Identifica se o request Ã© do tipo RESET, onde Ã© recarregado o estado original da pÃ¡gina
   public function generaterow(object $config)
   {
      //recebe como parametro a query faz a montagem da row, a cada elemento de unidade gestora (pode ser mais de um) e mantem suas subfunÃ§oes
      $result = '';
      if ($config->request->fase == 'vportal_notapagamento_gastosdiretos') {
        foreach ($config->dado->grupodespesa as $key => $despesa){
            if($config->request->dynamic != 'true') { //caso seja diferemte de dynamic (ex busca), entrega somente a primeira row                                                                                                             
                $result .= '<tr data-key="'.($config->request->key ? $config->request->key : $key).'" data-fetch="false" data-codigo='."'".'{"codgrupodespesa": '.$despesa->codgrupodespesa.', "codelementodespesa": '.$despesa->codelementodespesa.''.($config->reset?"":',"'.$config->buscar_por.'": "'.$config->busca_parametro.'"').'}'."'".' class="treegrid-'.($config->request->key ? $config->request->key : $key).'">
                                <td class="px-6 py-4 whitespace-nowrap"> '.$despesa->txtdescricaogrupodespesa.'</td>
                                <td class="px-6 py-4 whitespace-nowrap">'.$despesa->txtdescricaoelementodespesa.'</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                    R$ '.number_format($despesa->vlrpagamento, 2, ',', '.').'
                                </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                    R$ '.number_format($despesa->vlrpagamentorp, 2, ',', '.').'
                                </span>
                                </td>
                            </tr>
                            <tr class="treegrid-parent-'.($config->request->key ? $config->request->key : $key).' bg-gray-100">
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                Unidade Gestora
                                </th>
                                <th class="px-6 py-4"></th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">ExercÃ­cio Corrente
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider text-right"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Restos a Pagar
                                </th>
                            </tr>';
            }
            else { // caso seja da dynamic page, entrega somente o conteudo (sem a primeira row)
                foreach ($config->dado->unidadegestora->where('codgrupodespesa',$despesa->codgrupodespesa)->where('codelementodespesa',$despesa->codelementodespesa) as $unidade) {
                    $result .= '<tr class="treegrid-'.($config->request->key ? $config->request->key : $key).'-'.$unidade->codunidadegestora.' treegrid-parent-'.($config->request->key ? $config->request->key : $key).'">
                                    <td class="px-6 py-4"> '.$unidade->txtdescricaounidade.'
                                    </td>
                                    <td class="px-6 py-4"></td>
                                    <td class="px-6 py-4">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        R$ '.number_format($unidade->vlrpagamento, 2, ',', '.').'
                                    </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        R$ '.number_format($unidade->vlrpagamentorp, 2, ',', '.').'
                                    </span>
                                    </td>
                                </tr>
                                <tr class="treegrid-parent-'.($config->request->key ? $config->request->key : $key).'-'.$unidade->codunidadegestora.' bg-gray-100">
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                    name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                    GestÃ£o
                                    </th>
                                    <th class="px-6 py-4"></th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                    name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">ExercÃ­cio Corrente
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider text-right"
                                    name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Restos a Pagar
                                    </th>
                                </tr>';
                                foreach ($config->dado->gestao->where('codgrupodespesa',$despesa->codgrupodespesa)->where('codelementodespesa',$despesa->codelementodespesa)->where('codunidadegestora', $unidade->codunidadegestora) as $g){
                                    $result .='<tr class="treegrid-'.($config->request->key ? $config->request->key : $key).'-'.$g->codunidadegestora.'-'.$g->codgestao.' treegrid-parent-'.($config->request->key ? $config->request->key : $key).'-'.$g->codunidadegestora.'">
                                                    <td class="py-4">
                                                    <a class="inline-block" href="'.route('gastos-diretos-detalhada',
                                                    ['request' => Crypt::encrypt([
                                                        'codgrupodespesa' => $g->codgrupodespesa,
                                                        'codelementodespesa' => $g->codelementodespesa,
                                                        'codunidadegestora' => $g->codunidadegestora,
                                                        'codgestao' => $g->codgestao,
                                                        'codcredor' => 'codcredor',
                                                        'codacao' => 'codacao',
                                                        'codfonterecurso' => 'codfonterecurso',
                                                        'txtdescricaofuncao' => 'txtdescricaofuncao',
                                                        'codsubfuncao' => 'codsubfuncao',
                                                        'fase' => $config->request->fase,
                                                        'mes' => $config->request->mes,
                                                        'ano' => $config->request->ano,
                                                        'classificacao' => $config->request->classificacao,
                                                        'posicao' => $config->request->posicao,
                                                        'txtdescricaoacao' => 'txtdescricaoacao'
                                                    ])]).'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-lightBlue-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                                            <path
                                                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                                        </svg>
                                                    </a> '.$g->txtdescricaogestao.'
                                                    </td>
                                                    <td class="px-6 py-4"></td>
                                                    <td class="px-6 py-4">
                                                    <span
                                                        class="px-6 px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                        R$ '.number_format($unidade->vlrpagamento, 2, ',', '.').'
                                                    </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                        R$ '.number_format($unidade->vlrpagamentorp, 2, ',', '.').'
                                                    </span>
                                                    </td>
                                                </tr>';
                                }
                }
            }
        }
    } else {
        foreach ($config->dado->grupodespesa as $key => $despesa){
            if($config->request->dynamic != 'true') {
            $result.= '<tr data-key="'.($config->request->key ? $config->request->key : $key).'" data-fetch="false" data-codigo='."'".'{"codgrupodespesa": '.$despesa->codgrupodespesa.', "codelementodespesa": '.$despesa->codelementodespesa.'}'."'".' class="treegrid-'.($config->request->key ? $config->request->key : $key).'">
                            <td class="px-6 py-4 whitespace-nowrap"> '.$despesa->txtdescricaogrupodespesa.'</td>
                            <td class="px-6 py-4 whitespace-nowrap">'.$despesa->txtdescricaoelementodespesa.'</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                R$ '.number_format($despesa->vlrpagamento, 2, ',', '.').'
                            </span>
                            </td>
                            <tr class="treegrid-parent-'.($config->request->key ? $config->request->key : $key).' bg-gray-100">
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                UNIDADE GESTORA
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider text-right"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Valor (R$)
                                </th>
                            </tr>
                        </tr>';
            }
            else { // caso seja da dynamic page, entrega somente o conteudo (sem a primeira row)
                foreach ($config->dado->unidadegestora->where('codgrupodespesa',$despesa->codgrupodespesa)->where('codelementodespesa',$despesa->codelementodespesa) as $unidade) {
                    $result .= '<tr class="treegrid-'.($config->request->key ? $config->request->key : $key).'-'.$unidade->codunidadegestora.' treegrid-parent-'.($config->request->key ? $config->request->key : $key).'">
                                    <td class="px-6 py-4"> '.$unidade->txtdescricaounidade.'
                                    </td>
                                    <td class="px-6 py-4"></td>
                                    <td class="px-6 py-4 text-right">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        R$ '.number_format($unidade->vlrpagamento, 2, ',', '.').'
                                    </span>
                                    </td>
                                    <tr class="treegrid-parent-'.($config->request->key ? $config->request->key : $key).'-'.$unidade->codunidadegestora.' bg-gray-100">
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                        name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                        GESTÃƒO
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                        name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider text-right"
                                        name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Valor (R$)
                                    </th>
                                    </tr>
                                </tr>';
                                foreach ($config->dado->gestao->where('codgrupodespesa',$despesa->codgrupodespesa)->where('codelementodespesa',$despesa->codelementodespesa)->where('codunidadegestora', $unidade->codunidadegestora) as $g){
                                    $result .='<tr class="treegrid-'.($config->request->key ? $config->request->key : $key).'-'.$g->codunidadegestora.'-'.$g->codgestao.' treegrid-parent-'.($config->request->key ? $config->request->key : $key).'-'.$g->codunidadegestora.'">
                                                    <td class="py-4">
                                                    <a class="inline-block" href="'.route('gastos-diretos-detalhada',
                                                    ['request' => Crypt::encrypt([
                                                        'codgrupodespesa' => $g->codgrupodespesa,
                                                        'codelementodespesa' => $g->codelementodespesa,
                                                        'codunidadegestora' => $g->codunidadegestora,
                                                        'codgestao' => $g->codgestao,
                                                        'codcredor' => 'codcredor',
                                                        'codacao' => 'codacao',
                                                        'codfonterecurso' => 'codfonterecurso',
                                                        'txtdescricaofuncao' => 'txtdescricaofuncao',
                                                        'codsubfuncao' => 'codsubfuncao',
                                                        'fase' => $config->request->fase,
                                                        'mes' => $config->request->mes,
                                                        'ano' => $config->request->ano,
                                                        'classificacao' => $config->request->classificacao,
                                                        'posicao' => $config->request->posicao,
                                                        'txtdescricaoacao' => 'txtdescricaoacao'
                                                    ])]).'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-lightBlue-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                                            <path
                                                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                                        </svg>
                                                    </a>'.$g->txtdescricaogestao.'
                                                    </td>
                                                    </td>
                                                    <td class="px-6 py-4">
                                                    </td>
                                                    <td class="px-6 py-4 text-right">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                        R$ '.number_format($g->vlrpagamento, 2, ',', '.').'
                                                    </span>
                                                    </td>
                                                </tr>';
                                }
                }
            }
        }
    }
      return $result;
   }
}

-------------------------- componente -> unidade gestora
    
    <?php

namespace App\Components\Despesas;

use App\Models\GastosDireto\LiquidacaoGastosDiretos;
use App\Models\GastosDireto\NotaEmpenhoGastosDiretos;
use App\Models\GastosDireto\NotaPagamentoGastosDiretos;
use Illuminate\Support\Facades\DB;

class Unidadegestora
{
   //Faz a query de todos os dados necessarios para montar a row de acordo com as seleÃ§oes da busca
    public function query(object $config)
    {
        if ($config->fase == 'vportal_notapagamento_gastosdiretos') {
            $model = NotaPagamentoGastosDiretos::class;
         } else if ($config->fase == 'vportal_notaempenho_gastosdiretos') {
            $model = NotaEmpenhoGastosDiretos::class;
         } else {
            $model = LiquidacaoGastosDiretos::class;
         }

         if ($config->fase == 'vportal_notapagamento_gastosdiretos') {
            $unidadegestora = $model::select('txtdescricaounidade', 'codunidadegestora', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
               ->whereRaw($config->where)
               ->groupBy('txtdescricaounidade', 'codunidadegestora')
               ->orderBy('txtdescricaounidade')
               ->paginate(10);

               if(property_exists($config,'request')) {
                  if($config->request->dynamic == 'true') {
                     $gestao = $model::select('txtdescricaogestao', 'codgestao', 'codunidadegestora', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
                     ->whereRaw($config->where)
                     ->groupBy('txtdescricaogestao', 'codgestao', 'codunidadegestora')
                     ->get();
      
                     $favorecidos = $model::select('codcredor', 'txtnomecredor', 'codunidadegestora', 'codgestao', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
                     ->whereRaw($config->where)
                     ->groupBy('codcredor', 'txtnomecredor', 'codunidadegestora', 'codgestao')
                     ->get();
                     return (object) [
                        'unidadegestora' => $unidadegestora,
                        'gestao' => $gestao,
                        'favorecidos' => $favorecidos,
                     ];
                  }
               }
         } else {
            // Empenho e LiquidaÃ§Ã£o
            $unidadegestora = $model::select('txtdescricaounidade', 'codunidadegestora', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
               ->whereRaw($config->where)
               ->groupBy('txtdescricaounidade', 'codunidadegestora')
               ->orderBy('txtdescricaounidade')
               ->paginate(10);
            if(property_exists($config,'request')) {
               if($config->request->dynamic == 'true') {
                  $gestao = $model::select('txtdescricaogestao', 'codgestao', 'codunidadegestora', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
                  ->whereRaw($config->where)
                  ->groupBy('txtdescricaogestao', 'codgestao', 'codunidadegestora')
                  ->get();

                  $favorecidos = $model::select('codcredor', 'txtnomecredor', 'codunidadegestora', 'codgestao', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
                  ->whereRaw($config->where)
                  ->groupBy('codcredor', 'txtnomecredor', 'codunidadegestora', 'codgestao')
                  ->get();
                  return (object) [
                     'unidadegestora' => $unidadegestora,
                     'gestao' => $gestao,
                     'favorecidos' => $favorecidos,
                  ];
               }
            }
         }
         // Retornar as consultas para a pÃ¡gina
         return (object) [
            'unidadegestora' => $unidadegestora,
         ];
    }
}
    
-------------------------- componente row -> unidade gestora
    
    
<?php

namespace App\Components\Rowdespesa;

use Illuminate\Support\Facades\Crypt;

class Rowunidade
{
//FunÃ§Ã£o que monta a linha de resultado da busca na tabela
// $config Ã© composto por:
// "dado" => Dados que serÃ£o utilizados para a montagem da linha,
// "request" => Request original,
// 'buscar_por' => Buscar por (utilizado para montar a row de acordo com o padrÃ£o dynamic row),
// 'busca_parametro' => Parametro de busca (utilizado para montar a row de acordo com o padrÃ£o dynamic row),
// 'reset' => Identifica se o request Ã© do tipo RESET, onde Ã© recarregado o estado original da pÃ¡gina
   public function generaterow(object $config)
   {
      //recebe como parametro a query faz a montagem da row, a cada elemento de unidade gestora (pode ser mais de um) e mantem suas subfunÃ§oes
      $result = '';
      if ($config->request->fase == 'vportal_notapagamento_gastosdiretos') {
        foreach ($config->dado->unidadegestora as $key => $unidade){
            if($config->request->dynamic != 'true') {
                $result .= '<tr data-key="'.$key.'" data-fetch="false" data-codigo='."'".'{"codunidadegestora": '.$unidade->codunidadegestora.''.($config->reset?"":',"'.$config->buscar_por.'": "'.$config->busca_parametro.'"').'}'."'".' class="treegrid-'.($config->request->key ? $config->request->key : $key).'">
                                <td class="px-6 py-4 whitespace-nowrap"> '.$unidade->txtdescricaounidade.'</td>
                                <td class="px-6 py-4 whitespace-nowrap"></td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800"
                                    name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                                    R$ '.number_format($unidade->vlrpagamento, 2, ',', '.').'
                                </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right">
                                <span
                                    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                                    name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                                    R$ '.number_format($unidade->vlrpagamentorp, 2, ',', '.').'
                                </span>
                                </td>
                            </tr>
                            <tr class="treegrid-parent-'.($config->request->key ? $config->request->key : $key).' bg-gray-100">
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                GestÃ£o
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">ExercÃ­cio Corrente
                                </th>
                                <th class="px-6 py-3 text-right text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Restos a Pagar
                                </th>
                            </tr>';
            }
            else { // caso seja da dynamic page, entrega somente o conteudo (sem a primeira row)
                foreach ($config->dado->gestao->where('codunidadegestora',$unidade->codunidadegestora) as $g) {
                    $result .= '<tr class="treegrid-'.($config->request->key ? $config->request->key : $key).'-'.$g->codgestao.' treegrid-parent-'.($config->request->key ? $config->request->key : $key).'">
                                    <td class="px-6 py-4"> '.$g->txtdescricaogestao.'</td>
                                    <td class="px-6 py-4"></td>
                                    <td class="px-6 py-4">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800"
                                        name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                                        R$ '.number_format($g->vlrpagamento, 2, ',', '.').'
                                    </span>
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                                        name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                                        R$ '.number_format($g->vlrpagamentorp, 2, ',', '.').'
                                    </span>
                                    </td>
                                </tr>
                                <tr class="treegrid-parent-'.($config->request->key ? $config->request->key : $key).'-'.$g->codgestao.' bg-gray-100">
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                    name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                    CNPJ/CPF/IG
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                    name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Favorecido
                                    </th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                    name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">ExercÃ­cio Corrente
                                    </th>
                                    <th class="px-6 py-3 text-right text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                    name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Restos a Pagar
                                    </th>
                                </tr>';
                                foreach ($config->dado->favorecidos->where('codunidadegestora',$unidade->codunidadegestora)->where('codgestao',$g->codgestao) as $favorecido){
                                    $result .= '<tr class="treegrid-'.($config->request->key ? $config->request->key : $key).'-'.$favorecido->codgestao.'-'.$favorecido->codcredor.' treegrid-parent-'.($config->request->key ? $config->request->key : $key).'-'.$favorecido->codgestao.'">
                                                    <td class="py-4">
                                                    <a class="inline-block" href="'.route('gastos-diretos-detalhada',
                                                    ['request' => Crypt::encrypt([
                                                        'codgrupodespesa' => 'codgrupodespesa',
                                                        'codelementodespesa' => 'codelementodespesa',
                                                        'codunidadegestora' => $favorecido->codunidadegestora,
                                                        'codgestao' => $favorecido->codgestao,
                                                        'codcredor' => $favorecido->codcredor,
                                                        'codacao' => 'codacao',
                                                        'codfonterecurso' => 'codfonterecurso',
                                                        'txtdescricaofuncao' => 'txtdescricaofuncao',
                                                        'codsubfuncao' => 'codsubfuncao',
                                                        'fase' => $config->request->fase,
                                                        'mes' => $config->request->mes,
                                                        'ano' => $config->request->ano,
                                                        'classificacao' => $config->request->classificacao,
                                                        'posicao' => $config->request->posicao,
                                                        'txtdescricaoacao' => 'txtdescricaoacao'
                                                    ])]).'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-lightBlue-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                                            <path
                                                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                                        </svg>
                                                    </a>';
                                                    if (strlen($favorecido->codcredor) == 11)
                                                    {
                                                        $result .= "###.". substr($favorecido->codcredor, 3, 3) . "." . substr($favorecido->codcredor, 6, 3) ."-##";
                                                    }
                                                    else
                                                    {
                                                        $result .= $favorecido->codcredor;
                                                    }
                                                    
                                        $result .= '</td>
                                                    </td>
                                                    <td class="px-6 py-4">'.$favorecido->txtnomecredor.'</td>
                                                    <td class="px-6 py-4">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                        R$ '.number_format($favorecido->vlrpagamento, 2, ',', '.').'
                                                    </span>
                                                    </td>
                                                    <td class="px-6 py-4 text-right">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                                                        name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                                                        R$ '.number_format($favorecido->vlrpagamentorp, 2, ',', '.').'
                                                    </span>
                                                    </td>
                                                </tr>';
                                }
                }
            }
        }
    } else {
        foreach ($config->dado->unidadegestora as $key => $unidade){
            if($config->request->dynamic != 'true') {
            $result.= '<tr data-key="'.$key.'" data-fetch="false" data-codigo='."'".'{"codunidadegestora": '.$unidade->codunidadegestora.''.($config->reset?"":',"'.$config->buscar_por.'": "'.$config->busca_parametro.'"').'}'."'".' class="treegrid-'.($config->request->key ? $config->request->key : $key).'">
                            <td class="px-6 py-4 whitespace-nowrap"> '.$unidade->txtdescricaounidade.'</td>
                            <td class="px-6 py-4 whitespace-nowrap"></td>
                            <td class="px-6 py-4 whitespace-nowrap text-right">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                                name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                                R$ '.number_format($unidade->vlrpagamento, 2, ',', '.').'
                            </span>
                            </td>
                            <tr class="treegrid-parent-'.($config->request->key ? $config->request->key : $key).' bg-gray-100">
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                GESTÃƒO
                                </th>
                                <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                </th>
                                <th class="px-6 py-3 text-right text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Valor (R$)
                                </th>
                            </tr>
                        </tr>';
            }
            else { // caso seja da dynamic page, entrega somente o conteudo (sem a primeira row)
                foreach ($config->dado->gestao->where('codunidadegestora',$unidade->codunidadegestora) as $g) {
                    $result .= '<tr class="treegrid-'.($config->request->key ? $config->request->key : $key).'-'.$g->codgestao.' treegrid-parent-'.($config->request->key ? $config->request->key : $key).'">
                                    <td class="px-6 py-4"> '.$g->txtdescricaogestao.'
                                    </td>
                                    <td class="px-6 py-4"></td>
                                    <td class="px-6 py-4 text-right">
                                    <span
                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                                        name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                                        R$ '.number_format($g->vlrpagamento, 2, ',', '.').'
                                    </span>
                                    </td>
                                    <tr class="treegrid-parent-'.($config->request->key ? $config->request->key : $key).'-'.$g->codgestao.' bg-gray-100">
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                        name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">
                                        CNPJ/CPF/IG
                                        </th>
                                        <th class="px-6 py-3 text-left text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                        name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Favorecido
                                        </th>
                                        <th class="px-6 py-3 text-right text-sm font-semibold text-gray-800 uppercase tracking-wider"
                                        name="texto" style="font-size: 0.875rem; line-height: 1.25rem;">Valor (R$)
                                        </th>
                                    </tr>
                                </tr>';
                                foreach ($config->dado->favorecidos->where('codunidadegestora',$unidade->codunidadegestora)->where('codgestao',$g->codgestao) as $favorecido){
                                    $result .= '<tr class="treegrid-'.($config->request->key ? $config->request->key : $key).'-'.$favorecido->codgestao.'-'.$favorecido->codcredor.' treegrid-parent-'.($config->request->key ? $config->request->key : $key).'-'.$favorecido->codgestao.'">
                                                    <td class="py-4">
                                                    <a class="inline-block" href="'.route('gastos-diretos-detalhada',
                                                    ['request' => Crypt::encrypt([
                                                        'codgrupodespesa' => 'codgrupodespesa',
                                                        'codelementodespesa' => 'codelementodespesa',
                                                        'codunidadegestora' => $favorecido->codunidadegestora,
                                                        'codgestao' => $favorecido->codgestao,
                                                        'codcredor' => $favorecido->codcredor,
                                                        'codacao' => 'codacao',
                                                        'codfonterecurso' => 'codfonterecurso',
                                                        'txtdescricaofuncao' => 'txtdescricaofuncao',
                                                        'codsubfuncao' => 'codsubfuncao',
                                                        'fase' => $config->request->fase,
                                                        'mes' => $config->request->mes,
                                                        'ano' => $config->request->ano,
                                                        'classificacao' => $config->request->classificacao,
                                                        'posicao' => $config->request->posicao,
                                                        'txtdescricaoacao' => 'txtdescricaoacao'
                                                    ])]).'">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-lightBlue-500"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path
                                                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                                            <path
                                                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                                                        </svg>
                                                    </a>';
                                                    if (strlen($favorecido->codcredor) == 11)
                                                    {
                                                        $result .= "###.". substr($favorecido->codcredor, 3, 3) . "." . substr($favorecido->codcredor, 6, 3) ."-##";
                                                    }
                                                    else
                                                    {
                                                        $result .= $favorecido->codcredor;
                                                    }
                                        $result .= '</td>
                                                    <td class="px-6 py-4">'.$favorecido->txtnomecredor.'</td>
                                                    <td class="px-6 py-4 text-right">
                                                    <span
                                                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                                                        name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                                                        R$ '.number_format($favorecido->vlrpagamento, 2, ',', '.').'
                                                    </span>
                                                    </td>
                                                </tr>';
                                }
                }
            }
        }
    }
      return $result;
   }
}

-------------------------- componente -> acao
    
    <?php

namespace App\Components\Despesas;

use App\Models\GastosDireto\LiquidacaoGastosDiretos;
use App\Models\GastosDireto\NotaEmpenhoGastosDiretos;
use App\Models\GastosDireto\NotaPagamentoGastosDiretos;
use Illuminate\Support\Facades\DB;

class Acao
{
   //Faz a query de todos os dados necessarios para montar a row de acordo com as seleÃ§oes da busca
    public function query(object $config)
    {
        if ($config->fase == 'vportal_notapagamento_gastosdiretos') {
            $model = NotaPagamentoGastosDiretos::class;
         } else if ($config->fase == 'vportal_notaempenho_gastosdiretos') {
            $model = NotaEmpenhoGastosDiretos::class;
         } else {
            $model = LiquidacaoGastosDiretos::class;
         }

         if ($config->fase == 'vportal_notapagamento_gastosdiretos') {
            $acao = $model::select('codacao', 'txtdescricaoacao', DB::raw('SUM(vlrpagamento) as vlrpagamento'), DB::raw('SUM(vlrpagamentorp) as vlrpagamentorp'))
               ->whereRaw($config->where)
               ->groupBy('codacao', 'txtdescricaoacao')
               ->orderBy('txtdescricaoacao')
               ->paginate(10);
         }
         // Empenho
         else if ($config->fase == 'vportal_notaempenho_gastosdiretos'){
            // Unir tabela de Gastos Diretos com Transferencia de Recursos
            $acao = $model::select('codacao', 'txtdescricaoacao', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
               ->whereRaw($config->where)
               ->groupBy('codacao', 'txtdescricaoacao')
               ->orderBy('txtdescricaoacao')
               ->paginate(10);
         }
         // LiquidaÃ§Ã£o
         else {
            $acao = $model::select('codacao', 'txtdescricaoacao', DB::raw('SUM(vlrpagamento) as vlrpagamento'))
               ->whereRaw($config->where)
               ->groupBy('codacao', 'txtdescricaoacao')
               ->orderBy('txtdescricaoacao')
               ->paginate(10);
         }

         // Retornar as consultas para a pÃ¡gina
         return (object) [
            'acoes' => $acao,
         ];
    }
}
    
-------------------------- componente row -> acao
    
    
    <?php

namespace App\Components\Rowdespesa;

use Illuminate\Support\Facades\Crypt;

class Rowacao
{
//FunÃ§Ã£o que monta a linha de resultado da busca na tabela
// $config Ã© composto por:
// "dado" => Dados que serÃ£o utilizados para a montagem da linha,
// "request" => Request original,
// 'buscar_por' => Buscar por (utilizado para montar a row de acordo com o padrÃ£o dynamic row),
// 'busca_parametro' => Parametro de busca (utilizado para montar a row de acordo com o padrÃ£o dynamic row),
// 'reset' => Identifica se o request Ã© do tipo RESET, onde Ã© recarregado o estado original da pÃ¡gina
   public function generaterow(object $config)
   {
      //recebe como parametro a query faz a montagem da row, a cada elemento de unidade gestora (pode ser mais de um) e mantem suas subfunÃ§oes
      $result = '';
      foreach ($config->dado->acoes as $acao) 
      {
         $result .= '
         <tr>
             <td class="pl-4"> <a href="'.route('gastos-diretos-detalhada', ['request' => Crypt::encrypt([ 'codgrupodespesa' => 'codgrupodespesa', 'codelementodespesa' => 'codelementodespesa', 'codunidadegestora' => 'codunidadegestora', 'codgestao' => 'codgestao', 'codcredor' => 'codcredor', 'codacao' => $acao->codacao, 'codfonterecurso' => 'codfonterecurso', 'txtdescricaofuncao' => 'txtdescricaofuncao', 'codsubfuncao' => 'codsubfuncao', 'fase' => $config->request->fase, 'mes' => $config->request->mes, 'ano' => $config->request->ano, 'classificacao' => $config->request->classificacao, 'posicao' => $config->request->posicao, 'txtdescricaoacao' => $acao->txtdescricaoacao ])]).'">
                   <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-lightBlue-500" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                      <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                   </svg>
                </a>
             </td>
             <td class="px-6 py-4">'.$acao->txtdescricaoacao.'</td>';
          
         if($config->request->fase != 'vportal_notapagamento_gastosdiretos'){
               $result .= '<td class="px-6 py-4 text-right">
                <span
                   class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                   name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                   R$ '.number_format($acao->vlrpagamento, 2, ',', '.').'
                </span>
             </td>';
        } else {
                 
            $result .= 
                '<td class="px-6 py-4 whitespace-nowrap">
                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800" name="texto" style="font-size: 0.75rem; line-height: 1rem;"> R$ '.number_format($acao->vlrpagamento, 2, ',', '.').'
                    </span>
                 </td>
                 <td class="px-6 py-4 whitespace-nowrap text-right">
                    <span
                       class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800"
                       name="texto" style="font-size: 0.75rem; line-height: 1rem;">
                       R$ '.number_format($acao->vlrpagamentorp, 2, ',', '.').'
                    </span>
                 </td>';
                 
        }
        $result .= '</tr>';
          
      }

      return $result;
   }
}

