@extends('layout.main')

@section('title', 'SETUR - Institucional')

@section('content')

    <section>
        <div class="container">
          
           
            <div class="box-title">
                <h4>Institucional</h4>
                @include('ini.header-page')
                <div class="img-pages">
                    <a href="{{ URL::asset('img/7.png') }}" target="_blank"><img src="{{ URL::asset('img/7.png') }}"/></a>
                    <br/>
                    <small>(Extremoz - Dunas Genipabu -  Acervo Setur/Emprotur)</small>
                </div>
                <hr>
            </div>
         
            <div class="box-organograma02">
                <p>Com a competência de formular políticas para o desenvolvimento do turismo no Rio Grande do Norte, a Secretaria de Estado do Turismo (SETUR)  foi criada em 05 de junho de 1996 e atua em várias frentes, destacando-se o desenvolvimento de estudos e pesquisas para avaliar as potencialidades turísticas do estado e a articulação com os municípios potiguares e demais órgãos da administração pública para o fomento da atividade turística.</p>  
                <p>A secretaria também tem importância central na definição de uma política de promoção do destino em mercados nacionais e internacionais, sempre atuando para viabilizar um fluxo permanente de turistas para o estado. A Empresa Potiguar de Promoção Turística  (Emprotur), vinculada a Setur, executa a política de divulgação e de atração de turistas para o Rio Grande do Norte.</p> 

                <p>A Setur também tem como uma de suas competências promover políticas que auxiliem no avanço de políticas de infraestrutura turística, melhorando a qualidade dos serviços públicos acessados por turistas e pelos potiguares. </p>
            </div>
            
            <div class="row">
                <div class="col-7 img-organograma">
                   
                    <a href="{{ URL::asset('img/organograma.jpg') }}" target="_blank"><img src="{{ URL::asset('img/organograma.jpg') }}" /></a>
                    <small>*Clique na imagem para ampliar</small>
                    
                </div>
                <div class="col box-download">
     
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col"></th>
                          <th scope="col">Nome</th>
                          <th scope="col">Download</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td colspan="">Criação da Setur - 1996</td>
                          <td><a href="{{ URL::asset('doc/institucional/criacaodasetur-1996.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td colspan="">Criação da Emprotur - 2007</td>
                          <td><a href="{{ URL::asset('doc/institucional/criacaodaemprotur-2007.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="">Regimento Interno - SETUR</td>
                          <td><a href="{{ URL::asset('doc/institucional/regimentointerno-setur.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="">Estrutura orgânica do Poder Executivo</td>
                          <td><a href="{{ URL::asset('doc/institucional/estruturaorganicadopoderexecutivo.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                        </tr>
                      </tbody>
                    </table>
                    
                    <small>*Para realizar o download dos arquivos, clique em <i>PDF</i> na linha do arquivo desejado.</small>
                    
                </div>
            </div>
            
            
        </div>
    </section>

@endsection
    
