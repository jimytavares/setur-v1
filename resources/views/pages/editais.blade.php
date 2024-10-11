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

            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">EDITAIS</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">TERMOS DE COLABORAÇÃO</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                
                {{-- .Editais --}}
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                
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
                
                {{-- .Termos de Colaboração --}}
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                
                    <table class="table table-striped table-hover" style="margin-top:30px;">
                      <thead>
                        <tr>
                          <th scope="col" style="width:15%;">Nome do Documento</th>
                          <th scope="col" style="width:20%;">Nº Processo</th>
                          <th scope="col">Descrição</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/1-SEI-29091618-Termo-de-Colaboracao-1.pdf') }}" target="_blank">Termo de Colaboração 1</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente Termo de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/SEI_29091618_Termo_de_Colaboracao_2.pdf') }}" target="_blank">Termo de Colaboração 2</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente Termo de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/SEI_29091618_Termo_de_Colaboracao_3.pdf') }}" target="_blank">Termo de Colaboração 3</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente Termo de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/SEI_29091618_Termo_de_Colaboracao_4.pdf') }}" target="_blank">Termo de Colaboração 4</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td> O	presente	Termo	de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/SEI_29091618_Termo_de_Colaboracao_5.pdf') }}" target="_blank">Termo de Colaboração 5</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente	Termo	de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/SEI_29091618_Termo_de_Colaboracao_6.pdf') }}" target="_blank">Termo de Colaboração 6</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente Termo de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/SEI_29091618_Termo_de_Colaboracao_7.pdf') }}" target="_blank">Termo de Colaboração 7</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente Termo de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/SEI_29091618_Termo_de_Colaboracao_8.pdf') }}" target="_blank">Termo de Colaboração 8</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente Termo de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/SEI_29091618_Termo_de_Colaboracao_9.pdf') }}" target="_blank">Termo de Colaboração 9</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente Termo de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/1SEI_29091618_Termo_de_Colaboracao_10.pdf') }}" target="_blank">Termo de Colaboração 10</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente Termo de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                        <tr>
                            <td><a href="{{ URL::asset('doc/editais/termo_colaboracao/1SEI_29091618_Termo_de_Colaboracao_11.pdf') }}" target="_blank">Termo de Colaboração 11</a></td>
                          <td>02410017.000566/2024-41</td>
                          <td>O	presente Termo de	Colaboração,	decorrente	do	Edital	de	chamamento	público	nº	01/2024	–	SETUR/RN,
                             tem	por	objeto:	Concessão	de	apoio	financeiro	às	entidades	responsáveis	pelas	Instâncias	de	Governança	Regionais
                             do	Turismo	do	RN,	para	a	execução	de	projetos	de	fortalecimento	do	turismo	regional,	conforme	detalhado	no	Plano
                             de	Trabalho,	Anexo	I.</td>
                        </tr>
                      </tbody>
                    </table>
                
                </div>
                
            </div>
            
            
            
            
        </div>
    </section>

@endsection
    
