@extends('layout.main')

@section('title', 'SETUR - A Gestão')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>A Gestão</h4>
                @include('ini.header-page')
            </div>
            
            {{-- BOX01 --}}
            <!--<div class="row box-row">
                <div class="col-3 img-gestao">
                    <img src="{{ URL::asset('img/gestao-aninha-costa.jpg') }}" />
                </div>
                <div class="col" id="box-text">
                    <h4>Ana Maria Costa</h4>
                    
                    <p>Ana Maria Costa é potiguar nascida em Natal e já tem uma carreira de 23 anos no turismo, somando experiências no setor público e privado. Ela é formada em educação física pela UFRN e, antes de trabalhar no setor turístico, foi professora das redes estadual e municipal de ensino. Foi no ano de 1999 que passou a integrar o time de colaboradores da Potiguar Turismo, empresa de receptivos que atua na capital potiguar. Nesta empresa começou como auxiliar e, ao ganhar experiência em diversos setores, chegou ao cargo de diretora comercial. Nessa época, Ana Maria também organizava eventos de promoção e divulgação do Rio Grande do Norte em mercados emissores nacionais. Em 2012, em sociedade com  a empresária Decca Bolonha, fundou sua própria empresa de receptivos, a Anauê. Entre 2015 e 2017 foi nomeada diretora-presidente da Empresa Potiguar de Promoção Turística (Emprotur). Desde 2019, Ana Maria Costa é Secretária de Turismo do Rio Grande do Norte. </p>
                </div>
            </div>-->
            
            {{-- BOX02 --}}
            <div class="row box-row">
                <div class="col-3 img-gestao">
                    <img src="{{ URL::asset('img/gestao-solange-portela.jpg') }}" />
                </div>
                <div class="col" id="box-text">
                    <h4>Solange Portela <br/><span style="color:gray; font-size:15px;">SECRETÁRIA DE ESTADO DO TURISMO DO RIO GRANDE DO NORTE</span></h4>
                    
                    <p>Mestra em Gestão Pública pela UFRN (2014). Especialista em Administração Geral pela Universidade Potiguar (1996), possui graduação em Psicologia pela Universidade Federal do Rio Grande do Norte (1999) e graduação em Ciências Econômicas pela Universidade Potiguar (1990). Subsecretária de Política e Gestão Turística de Estado do Turismo e Gerente Setorial do Projeto Governo Cidadão na Secretaria de Estado do Turismo do RN. Tem experiência na área de Administração e Gestão Pública, Planejamento, Turismo e Psicologia. Desenvolve atividades de palestrante e consultora nos seguintes temas: instância de governança, programa de regionalização do turismo, planejamento, administração pública, gestão e políticas públicas, conhecimento com acompanhamento de projetos executados com recursos de empréstimo com instituições internacionais. No cargo atual, desde 2015, dentre as atividades desenvolvidas se incluem a liderança equipe técnica, coordenação grupo de trabalho, gerenciamento de projetos na área de turismo, atuação como facilitadora e mediadora de reuniões. </p>
                </div>
            </div>
            
            {{-- BOX03 --}}
            <div class="row box-row">
                <div class="col-3 img-gestao">
                    <img src="{{ URL::asset('img/gestao-danielly-rego.jpg') }}" />
                </div>
                <div class="col" id="box-text">
                    <h4>Danielly Rêgo <br/><span style="color:gray; font-size:15px;">SECRETÁRIA ADJUNTA</span></h4>
                    
                    <p>Danielly Christine Gadelha Rêgo Brandão é natural de Mossoró/RN, filha de Cacilda Maria Carlos Gadelha Rêgo e José Rêgo Júnior (in memorian). É casada com Leonardo Brandão da Cruz Lira com quem tem uma filha, Maria Luiza Rêgo Brandão Lira. Parte de sua vida acadêmica aconteceu no Colégio Diocesano Santa Luzia de Mossoró/RN. No ano de 2006, formou-se em Direito pela Universidade Potiguar. Integra seu currículo a atuação no escritório Rêgo Júnior Advocacia, localizado em Mossoró. Contudo, não limitou seu exercício profissional a advocacia privada, também atuou na Procuradoria Geral do Município de Mossoró, no Conselho de Educação e na Procuradoria Administrativa da Assembleia Legislativa do Rio Grande do Norte. </p>
                    
                    <p>Sua experiência no poder executivo adentrou à área de segurança pública, onde trabalhou, durante quatro anos, como ouvidora do sistema penitenciário no estado do Rio Grande do Norte, dentro da Secretaria do Estado de Justiça e Cidadania (SEJUC), no exercício dessa função esteve membro do Comitê Gestor das Políticas de Promoção da Igualdade Racial no RN e do Comitê Estadual de Combate e Prevenção à Tortura. Atualmente, foi nomeada Secretária Adjunta de Turismo do Estado do Rio Grande do Norte.</p>
                </div>
            </div>
            
        </div>
    </section>

@endsection
    
