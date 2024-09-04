@extends('layout.main')

@section('title', 'SETUR - Editais')

@section('content')

    <section>
        <div class="container">
          
           
            <div class="box-title">
                <h4>Editais</h4>
                @include('ini.header-page')
                <hr>
            </div>
            
            <div class="row">
                <div class="col-4">
                    
                        <div class="card text-center">
                          <div class="card-header">
                            Diário Oficial
                          </div>
                          <div class="card-body" style="height:100%;">
                            <h5 class="card-title">RESULTADO PRELIMINAR DO EDITAL 001/2024</h5>
                              <i class="far fa-file-pdf" style="font-size:50px; color:red; margin-top:10px;"></i>
                            <p style="margin-top:10px;">
                                RESULTADO PRELIMINAR DO EDITAL 001/2024 - SELEÇÃO DE ORGANIZAÇÕES DA SOCIEDADE CIVIL SEM FINS LUCRATIVOS - OSC'S, RESPONSÁVEIS PELAS INSTÂNCIAS DE GOVERNANÇA REGIONAIS DO TURISMO
                            </p>
                            <p>
                                O recurso contra resultado preliminar poderá ser impetrado no prazo de 05 (cinco) dias úteis da publicação conforme item 8.2 e nos termos do item 10 do edital.
                            </p>
                            <p>
                                Natal/RN, 22 de julho de 2024.<br/>
                                Solange de Araújo Portela<br/>
                                Secretária de Estado Interina do Turismo – SETUR/RN<br/>
                                Aurora Rayane Cavalcante de Melo<br/>
                                Coordenadora de Articulação e Ordenamento – CAO/SETUR/R  
                            </p>
                            <a href="{{ URL::asset('doc/editais/resultado-preliminar-do-edital-0012024.pdf') }}" class="btn btn-success" target="_blank">Download</a>
                          </div>
                          <div class="card-footer text-muted">

                          </div>
                        </div>
                    
                </div>
                
                <div class="col-4">
                    
                    <div class="card text-center">
                          <div class="card-header">
                            Diário Oficial
                          </div>
                          <div class="card-body" style="height:100%;">
                            <h5 class="card-title">EDITAL Nº 01/2024 – SETUR/RN</h5>
                              <i class="far fa-file-pdf" style="font-size:50px; color:red; margin-top:10px;"></i>
                            <p>
                                RETIFICAÇÃO Nº 02/2024 DO EDITAL Nº 01/2024/SETUR-RN
                            </p>
                            <p style="margin-top:10px;">
                                Edital de Chamamento Público para seleção de
                                Organizações da Sociedade Civil sem fins lucrativos - OSC's, responsáveis pelas Instâncias de Governança
                                Regionais do Turismo, para concessão de apoio financeiro para a execução de projetos de fortalecimento
                                do turismo regional, no Estado do Rio grande do Norte.
                            </p>
                            <p>
                                Natal/RN, 02 de setembro de 2024.
                            </p>
                            <a href="{{ URL::asset('doc/editais/publicacao_Ratificacao_edital_SETEMBRO_2024.pdf') }}" class="btn btn-success" target="_blank">Download</a>
                          </div>
                          <div class="card-footer text-muted">

                          </div>
                        </div>
                    
                </div>
                
                <div class="col-4">
                    
                    <div class="card text-center">
                          <div class="card-header">
                            Diário Oficial
                          </div>
                          <div class="card-body" style="height:100%;">
                                <h5 class="card-title">EDITAL Nº 01/2024</h5>
                              <i class="far fa-file-pdf" style="font-size:50px; color:red; margin-top:10px;"></i>
                            <p style="margin-top:10px;">
                                EDITAL DE CONVOCAÇÃO PARA APRESENTAÇÃO DE DOCUMENTOS A FIM DE CELEBRAR
                                TERMO DE COLABORAÇÃO NOS TERMOS DO EDITAL DE CHAMAMENTO PÚBLICO 01/2024 –
                                SETUR/RN
                            </p>
                            <p>
                                Natal, 22 de agosto de 2024
                            </p>
                            <a href="{{ URL::asset('doc/editais/publicacao_republicacao_do_edital_convocacao_SETEMBRO_2023.pdf') }}" class="btn btn-success" target="_blank">Download</a>
                          </div>
                          <div class="card-footer text-muted">

                          </div>
                        </div>
                    
                </div>
            </div>
            
            
            
        </div>
    </section>

@endsection
    
