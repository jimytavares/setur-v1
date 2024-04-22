@extends('layout.main')

@section('title', 'SETUR - Inspire-se')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Inspire-se</h4>
                <p>
                    <a href="/setur-v1/public/"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-Y') ?>
                </p>
                <div class="img-pages">
                    <a href="{{ URL::asset('img/serradesaobento3.jpg') }}" target="_blank"><img src="{{ URL::asset('img/serradesaobento3.jpg') }}"/></a>
                    <br/>
                    <small style="color:gray;">(Serra de São Bento)</small>
                </div><br/>
                <hr>
            </div><br/>
            
            <div class="">
                
                
                <p>Dentro do planejamento estratégico da Setur está a promoção de capacitações que ajudem no desenvolvimento regional do turismo. E um dos pontos mais sensíveis nesse processo de regionalização é, justamente, a construção de uma divulgação eficiente dos destinos.  Nesse sentido, surgiu o INSPIRE-SE – Programa de Capacitação em Marketing e Comunicação no Turismo.  Evento foi exclusivo para os gestores públicos do turismo potiguar e teve sua primeira edição acontecendo de forma presencial, no dia 18/03, no Centro de Convenções de Natal.</p>

                <p>O evento foi idealizado a partir dos projetos de pesquisa dos bolsistas Setur/Fapern Aureo Paiva e João Victor Leal e consistiu em um dia inteiro de palestras e formações com foco no fortalecimento das marcas turísticas  e na construção de uma divulgação eficiente dos destinos potiguares nas redes sociais.</p> 

                <p>Profissionais de comunicação que atuam na SETUR e na Empresa Potiguar de Promoção Turística (Emprotur) foram os responsáveis por ministrar palestras especialmente elaboradas para dialogar com os gestores municipais e algumas de suas demandas em comunicação e marketing.</p> 

                <p>“Essa formação vem no sentido de transmitir parte do conhecimento da nossa equipe para os municípios turísticos que querem melhorar a divulgação dos seus destinos, fortalecendo suas marcas e o potencial de seus atrativos turísticos. É um momento singular para a  troca de conhecimentos, e para ampliar nosso diálogo com os municípios, fortalecendo nossa meta de ampliar a regionalização do turismo potiguar”, comenta Ana Maria da Costa, Secretaria Estadual de Turismo.</p>

                <p>Novas edições do evento estão sendo planejadas.</p> 
                
            </div>
            
        </div>
    </section>

@endsection
    
