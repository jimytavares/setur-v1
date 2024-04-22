@extends('layout.main')

@section('title', 'SETUR - Planos e Projetos')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Planos e Projetos</h4>
                <p>
                    <a href="/setur-v1/public/"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                </p>
                <!--<div class="img-pages">
                    <a href="{{ URL::asset('img/6.png') }}" target="_blank"><img src="{{ URL::asset('img/6.png') }}"/></a>
                    <br/>
                    <small style="color:gray;">(Galinhos - Acervo Galinhos)</small>
                </div>-->
                <hr>
            </div>
            
            <div class="box-planos-projetos">
                
                {{-- 01 --}}
                <div class="">
                    
                    <h4 style="margin-top:25px;">1 - Estruturação e Fortalecimento das Instâncias de Governança Regionais nos Polos Turísticos do Rio Grande do Norte</h4>
                    
                    <p>Como estratégia para a Interiorização do Turismo no Estado do Rio Grande do Norte, a Secretaria de Estado do Turismo do RN (SETUR/RN) contratou a Start Consultoria Técnica Ltda., para estruturar e fortalecer, de forma coordenada, compartilhada, descentralizada e sustentável as Instâncias de Governança Regionais – IGRs.</p>

                    <p>O trabalho parte das premissas do Programa de Regionalização do Turismo, do Ministério do Turismo, em que uma das estratégias é a Institucionalização de Instâncias de Governança, considerando-se os princípios da participação, sustentabilidade, integração e descentralização, contando com o envolvimento do poder público, iniciativa privada, terceiro setor, sociedade civil e instituições de ensino dos municípios das Regiões Turísticas, promovendo a integração e a cooperação intersetorial, com vistas à sinergia na atuação conjunta entre todos os envolvidos direta e indiretamente na atividade turística.</p>
                    
                    <p style="color:gray;">Governo do Estado do Rio Grande do Norte Secretaria de Estado do Turismo – Setur/RN junho/2022</p>

                    <div class="card-deck row">
                      <div class="card col-3">
                        <img class="card-img-top" src="{{ URL::asset('img/planejamentoprojeto/meta01.png') }}" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title">Relatório Meta 1</h5>
                          <p class="card-text">Estruturação e Fortalecimento das Instâncias de Governança Regionais nos Polos Turísticos do Rio Grande do Norte.</p>
                            <div class="card-footer" style="margin-top:90px;">
                                <a href="{{ URL::asset('doc/planoseprojetos/relatorio-meta-1.pdf') }}" target="_blank"><small><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório</small></a>
                                | <a href="{{ URL::asset('doc/planoseprojetos/relatorio-meta-1-doc.pdf') }}" target="_blank"><small><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Informação</small></a>
                            </div>
                        </div>
                      </div>
                      <div class="card col-3">
                          <img class="card-img-top" src="{{ URL::asset('img/planejamentoprojeto/meta02.png') }}" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title">Relatório Meta 2</h5>
                          <p class="card-text">Estruturação eFortalecimento das Instânciasde Governança RegionaisnosPolosTurísticosdo Rio Grandedo Norte Workshops de Sensibilização e Modelos de Gestão</p>
                            <div class="card-footer" style="margin-top:90px;">
                                <a href="{{ URL::asset('doc/planoseprojetos/relatorio-meta-2.pdf') }}" target="_blank"><small><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório</small></a>
                                | <a href="{{ URL::asset('doc/planoseprojetos/relatorio-meta-2-doc.pdf') }}" target="_blank"><small><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Informação</small></a>
                            </div>
                        </div>
                      </div>
                      <div class="card col-3">
                          <img class="card-img-top" src="{{ URL::asset('img/planejamentoprojeto/atv1-meta3.png') }}" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title">Relatório Atividade 1 Meta 3</h5>
                          <p class="card-text">Relatório - Atividade 01 | Meta 03 workshop de elaboração dos planos de trabalho das IGRs.</p>
                            <div class="card-footer" style="margin-top:60px;">
                                <a href="{{ URL::asset('doc/planoseprojetos/relatorio-atividade-1-meta-3.pdf') }}" target="_blank"><small><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório</small></a>
                                | <a href="{{ URL::asset('doc/planoseprojetos/relatorio-atividade-1-meta-3-doc.pdf') }}" target="_blank"><small><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Informação</small></a>
                            </div>
                        </div>
                      </div>
                      <div class="card col-3">
                          <img class="card-img-top" src="{{ URL::asset('img/planejamentoprojeto/atv2-meta3.png') }}" alt="Imagem de capa do card">
                        <div class="card-body">
                          <h5 class="card-title">Relatório Atividade 2 Meta 3</h5>
                          <p class="card-text">Relatório - Atividade 02 | Meta 03 workshop para a construção dos instrumentos legais de formalização.</p>
                            <div class="card-footer" style="margin-top:60px;">
                                <a href="{{ URL::asset('doc/planoseprojetos/relatorio-atividade-2-meta-3.pdf') }}" target="_blank"><small><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Relatório</small></a>
                                | <a href="{{ URL::asset('doc/planoseprojetos/relatorio-atividade-2-meta-3-doc.pdf') }}" target="_blank"><small><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Informação</small></a>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>

                {{-- 02 --}}
                <div class="">
                    
                    <h4>2 - Cursos de Capacitação de Fortalecimento para atores da atividade Turística</h4>
                    
                    <p>A Secretaria de Estado Turismo – SETUR/RN por meio do contrato nº 73/2022 celebrado entre a Secretária de Estado do Planejamento e das Finanças e o Serviço Nacional de Aprendizagem Comercial – SENAC/RN, o qual foi comprado o mínimo de 1360 e máximo de 1700 vagas a serem ofertados cursos de capacitação para 50 municípios que integram os polos turísticos do Rio Grande do Norte, com investimento de R$ 989.140,00 mil reais do Projeto Governo Cidadão, com recursos viabilizados pelo empréstimo junto ao Banco Mundial. Os cursos realizados foram:</p>
                    
                    <div class="row">
                        <div class="col">
                            <p>1.	Turismo de Base Comunitária.<br/>
                            2.	Gestão de pequenos negócios.<br/>
                            3.	Instância de Governança Municipal. <br/>
                            4.	Técnicas para Garçom.<br/>
                            5.	Boas práticas na manipulação de alimentos.</p>
                        </div>
                        <div class="col">
                            
                            <table class="table table-striped table-hover">
                              <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nome</th>
                                  <th scope="col" style="text-align:center;">Download</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <th scope="row">1</th>
                                  <td>Relatótio final - Cursos de Capacitação</td>
                                    <td style="text-align:center;"><a href="{{URL::asset('doc/planoseprojetos/relatotio-final-cursos-de-capacitação.pdf')}}" target="_blank"><i class="fas fa-download" style="color:red; font-size:22px;"></i></a></td>
                                </tr>
                              </tbody>
                            </table>
                            
                        </div>
                    </div>
                    
                </div>
                
                {{-- 03 --}}
                <div class="">
                    <h4>3 - Plano de Marketing</h4>

                    <p>Para elaboração e desenvolvimento do Plano intitulado “Planejamento Estratégico e Marketing para o Turismo do Rio Grande do Norte”, a empresa Solimar International e a empresa Green Team Global, em parceria, reuniram uma equipe de especialistas brasileiros e internacionais com larga experiência e domínio em planejamento e gerenciamento de projetos, incluindo expertise em turismo e marketing.</p> 

                    <p>A empresa Solimar foi a empresa líder, enquanto a Green Team prestou seu apoio como consultora coadjuvante. Durante o desenvolvimento, as equipes permanentes das empresas e os contratados propuseram soluções para um número expressivo de desafios, incluindo o declínio do turismo internacional e doméstico que vem acontecendo no estado do Rio Grande do Norte, bem como a quase inexistência de dados estatísticos confiáveis que pudessem garantir o suporte necessário à tomada de decisões no que concerne ao marketing no turismo.</p> 

                    <p>Compreendendo que o turismo é uma indústria diversificada com uma variedade de partes interessadas e interligadas, a equipe empregou uma abordagem colaborativa que envolveu as partes interessadas do setor público e privado. Utilizou os insumos das organizações sem fins lucrativos, setor acadêmico e residentes locais. Ao longo do projeto, a equipe fez contato com um grande número de interlocutores locais com o intuito de obter seus insumos e comentários sobre o processo de planejamento estratégico.</p> 

                    <p>Isto aconteceu através de uma série de 20 Oficinas em todos os Polos, de março de 2016 a março de 2017, além de reuniões técnicas e entrevistas. Além das metas que foram priorizadas e identificadas como chave para o desenvolvimento turístico dos Polos a curto e médio prazo, também foram discutidos e identificados os desafios e oportunidades. Todas as colocações e informações geradas pelos participantes das oficinas dos Polos foram utilizadas na avaliação da oferta turística dos municípios que compõem os Polos, bem como para a etapa de diagnóstico.</p> 

                    <p style="text-align:center; margin-top:30px;"><b>Os produtos produzidos pela consultoria podem ser acessados abaixo:</b></p> 

                    <div class="row">
                        <div class="col col-prod-planos"> 
                            <p>Produto 01: <br/><span>Oferta</span></p> <a href="{{ URL::asset('doc/planoseprojetos/planodemarketing/PRODUTO-1-OFERTA.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col col-prod-planos"> 
                            <p>Produto 02: <br/><span>Estudo de Demanda</span></p> <a href="{{ URL::asset('doc/planoseprojetos/planodemarketing/PRODUTO-2-ESTUDO-DE-DEMANDA.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col col-prod-planos"> 
                            <p>Produto 03: <br/><span>Diagnóstico do Turismo do RN</span></p> <a href="{{ URL::asset('doc/planoseprojetos/planodemarketing/PRODUTO-3-DIAGNÓSTICO-DO-TURISMO-DO-RN.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col col-prod-planos"> 
                            <p>Produto 04: <br/><span>Estratégia</span></p> <a href="{{ URL::asset('doc/planoseprojetos/planodemarketing/PRODUTO-4-ESTRATÉGIA.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col col-prod-planos"> 
                            <p>Produto 05: <br/><span>Plano de Marketing</span></p> <a href="{{ URL::asset('doc/planoseprojetos/planodemarketing/PRODUTO-5-PLANO-DE-MARKETING.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col col-prod-planos"> 
                            <p>Produto 06: <br/><span>Plano de Investimentos</span></p> <a href="{{ URL::asset('doc/planoseprojetos/planodemarketing/PRODUTO-6-PLANO-DE-INVESTIMENTOS.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col col-prod-planos"> 
                            <p>Produto 07: <br/><span>Relatório Final Consolidado Produto</span></p> <a href="{{ URL::asset('doc/planoseprojetos/planodemarketing/PRODUTO-7-RELATORIO-FINAL-CONSOLIDADO-PRODUTO.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col col-prod-planos"> 
                            <p>Produto 08: <br/><span>Relatório Síntese</span></p> <a href="{{ URL::asset('doc/planoseprojetos/planodemarketing/PRODUTO-8-RELATÓRIO-SÍNTESE.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                    </div>
                </div>
                
                {{-- 04 --}}
                <div class="">
                    <h4>4 - Projeto de Dinamização</h4>

                    <p>O Projeto de Dinamização e Sustentabilidade do Turismo nos municípios de Passa e Fica, Serra de São Bento e Monte das Gameleiras, cujo objetivo teve como objetivo apoiar o desenvolvimento do turismo sustentável como vetor de desenvolvimento local nessas localidades.</p>

                    <p>No decorrer do projeto, foram implementadas uma série de ações para promover a
                    melhoria da qualidade dos serviços, qualificar a experiência turística, valorizar a
                    produção local e divulgar a região enquanto destino integrado. Todas essas ações
                    seguiram uma lógica estratégica que fortaleceu o posicionamento do território
                        enquanto destino turístico.</p>

                    <p>O Projeto de Dinamização e Sustentabilidade do Turismo é fruto do Contrato RN
                    Sustentável 062/2017 firmado entre o IABS – Instituto Brasileiro de Desenvolvimento
                    e Sustentabilidade e o Governo do Estado do Rio Grande do Norte, com financiamento do Banco Mundial.</p>

                    <div class="row">
                        <div class="col-5" style="border:solid; border-width: 1px; margin-top:5px; margin-left:3px;"> 
                            <p><span><b>Produto 1</b> - Avaliação Situacional do destino</span></p> <a href="{{ URL::asset('doc/planoseprojetos/projetodedinamizacao/Produto 1 - Avaliação Situacional do destino.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col-5" style="border:solid; border-width: 1px; margin-top:5px; margin-left:3px;"> 
                            <p><span><b>Produto 2</b> -Diagnostico Detalhado_04Nov</span></p> <a href="{{ URL::asset('doc/planoseprojetos/projetodedinamizacao/Produto 2 -Diagnostico Detalhado_04Nov.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col-5" style="border:solid; border-width: 1px; margin-top:5px; margin-left:3px;"> 
                            <p><span><b>Produto 3</b> - QualificacaoServicos Revisado_07Mai</span></p> <a href="{{ URL::asset('doc/planoseprojetos/projetodedinamizacao/Produto 3 - QualificacaoServicos Revisado_07Mai.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col-5" style="border:solid; border-width: 1px; margin-top:5px; margin-left:3px;"> 
                            <p><span><b>Produto 4</b> -Diagnostico Cadeias Produtivas e Estratégias de Comercialização</span></p> <a href="{{ URL::asset('doc/planoseprojetos/projetodedinamizacao/Produto 4 -Diagnostico Cadeias Produtivas e Estratégias de Comercialização.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col-5" style="border:solid; border-width: 1px; margin-top:5px; margin-left:3px;"> 
                            <p><span><b>Produto 5</b> -Inclubação de Negócio Social direcionado ao Mercado Turístico_final</span></p> <a href="{{ URL::asset('doc/planoseprojetos/projetodedinamizacao/Produto 5 -Inclubação de Negócio Social direcionado ao Mercado Turístico_final.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col-5" style="border:solid; border-width: 1px; margin-top:5px; margin-left:3px;"> 
                            <p><span><b>Produto 6</b> - Criação da Identidade Visual do destino (1)</span></p> <a href="{{ URL::asset('doc/planoseprojetos/projetodedinamizacao/Produto 6 - Criação da Identidade Visual do destino (1).pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col-5" style="border:solid; border-width: 1px; margin-top:5px; margin-left:3px;"> 
                            <p><span><b>Produto 7</b> - Criação de paginas nas redes sociais</span></p> <a href="{{ URL::asset('doc/planoseprojetos/projetodedinamizacao/Produto 7 - Criação de paginas nas redes sociais.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col-5" style="border:solid; border-width: 1px; margin-top:5px; margin-left:3px;"> 
                            <p><span><b>Produto 8</b> - EncontroComercial _24OutVF</span></p> <a href="{{ URL::asset('doc/planoseprojetos/projetodedinamizacao/Produto 8 - EncontroComercial _24OutVF.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                        <div class="col-5" style="border:solid; border-width: 1px; margin-top:5px; margin-left:3px;"> 
                            <p><span><b>Produto 9</b> - Seminario Final_Completo_com_Anexos</span></p> <a href="{{ URL::asset('doc/planoseprojetos/projetodedinamizacao/Produto 9 - Seminario Final_Completo_com_Anexos.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Download</a> 
                        </div>
                    </div>
                </div>
                
                {{-- 05 --}}
                <div class="">
                    <h4>5 - Plano de Desenvolvimento Integrado de Turismo Sustentável – PDITS</h4>

                    <p>O Governo do Estado elaborou em 1998, um Plano Estratégico de Desenvolvimento Turístico, com apoio financeiro da EMBRATUR, com o objetivo de definir uma estratégia para o desenvolvimento da atividade turística no Estado, e ao mesmo tempo servir de “Marco Lógico” para o PRODETUR/RN II.</p>

                    <p>O Plano previa  o processo de interiorização, com investimentos nos principais municípios de interesse turístico, com metas de grande importância para a economia do Estado. Ao avaliar o PRODETUR/NE, o BID (Banco Interamericano de Desenvolvimento) entendeu que os investimentos realizados pelos Estados na primeira fase do programa não foram suficientes para garantir a consolidação da atividade turística na região, propondo manter as áreas de investimentos dentro do mesmo espaço beneficiado, completando e complementando as ações. </p>

                    <p>Assim, os estados se comprometeram a elaborar novos Planos, dentro da área de planejamento determinada pelos impactos gerados pelos investimentos da primeira fase do programa, e em 2002 foram elaborados os PDITS, <b>Plano de Desenvolvimento Integrado de Turismo Sustentável.</b></p>

                    <p>Em resumo, o PDITS contém a descrição da área de planejamento, apresenta um estudo da dinâmica socioeconômica da região, os aspectos ambientais, institucionais, a infraestrutura, a oferta e a demanda turística, as atrações, os produtos turísticos, o emprego, o setor privado, o gasto turístico, os investimentos do setor privado, os pontos fortes, os pontos fracos, os riscos e as oportunidades. Além disso,  apresenta um plano de ação contendo as propostas a serem contempladas.</p>

                    <p><b>Consulte os PDITS:</b></p>

                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nome</th>
                          <th scope="col" style="text-align:center;">Download</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>PDITS - Polo Agreste Trairi</td>
                            <td style="text-align:center;"><a href="{{URL::asset('doc/planoseprojetos/pdits/PDITS_POLO_AGRESTE_TRAIRI.pdf')}}" target="_blank"><i class="fas fa-download" style="color:red; font-size:22px;"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>PDITS -  Polo Costa das Dunas</td>
                            <td style="text-align:center;"><a href="{{URL::asset('doc/planoseprojetos/pdits/PDITS_POLO_COSTA_DAS_DUNAS.pdf')}}" target="_blank"><i class="fas fa-download" style="color:red; font-size:22px;"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>PDITS -  Polo Serrano (Vol 1)</td>
                            <td style="text-align:center;"><a href="{{URL::asset('doc/planoseprojetos/pdits/PDITS_POLO_SERRANO_VOL1.pdf')}}" target="_blank"><i class="fas fa-download" style="color:red; font-size:22px;"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>PDITS -  Polo Serrano  (Vol 2)</td>
                            <td style="text-align:center;"><a href="{{URL::asset('doc/planoseprojetos/pdits/PDITS_POLO_SERRANO_VOL2.pdf')}}" target="_blank"><i class="fas fa-download" style="color:red; font-size:22px;"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>PDITS -  Polo Costa Branca</td>
                            <td style="text-align:center;"><a href="{{URL::asset('doc/planoseprojetos/pdits/PDITS_POLO_COSTA_BRANCA.pdf')}}" target="_blank"><i class="fas fa-download" style="color:red; font-size:22px;"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>PDITS -  Polo Seridó</td>
                            <td style="text-align:center;"><a href="{{URL::asset('doc/planoseprojetos/pdits/PDITS_POLO_SERIDÓ.pdf')}}" target="_blank"><i class="fas fa-download" style="color:red; font-size:22px;"></i></a></td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Produto 3 - Polo Agreste Trairí</td>
                            <td style="text-align:center;"><a href="{{URL::asset('doc/planoseprojetos/pdits/PRODUTO-3-AGRESTE-TRAIRI.pdf')}}" target="_blank"><i class="fas fa-download" style="color:red; font-size:22px;"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                
                {{-- 06 --}}
                <div class="">
                    <h4>6 - Plano de Retomada do Turismo do Rio Grande do Norte</h4>

                    <p>Plano de Retomada do Turismo do Rio Grande do Norte é um documento, lançado em 02 de Outubro de 2020, que reúne orientações básicas de segurança sanitária e ações integradas para garantir a saúde pública e organizar a retomada gradativa da atividade turística diante da pandemia.</p>

                    <p>Foram responsáveis pela elaboração do plano: a Setur e a Emprotur, com apoio do trade turístico, prefeituras e entes como a Fecomércio RN, Senac RN, Sebrae RN, Associação Brasileira da Indústria de Hotéis do RN (ABIH-RN) e Sindetur – Sindicato das Empresas de Turismo do RN.</p>

                    <p>Ao longo de 18 meses, o Plano de Retomada do Turismo promoveu ações em sete vertentes: Protocolos de Saúde; Capacitação (treinamento e consultoria); Comunicação com a sociedade (empresas e turistas); Selo do turismo; Plano de promoção do destino; Cronograma; Alinhamentos com os governos.</p>

                    <p><b>Leia o documento completo abaixo:</b></p>

                    <div class="" style="margin:0 auto;">
                        <a href="{{URL::asset('doc/planoseprojetos/planoderetomada/PlanodeRetomadaTurismodoRN.pdf')}}" target="_blank"><button class="btn btn-danger" style="">Plano de Retomada Turismo do RN</button></a>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>

@endsection
    
