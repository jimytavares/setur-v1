@extends('layout.main')

@section('title', 'SETUR - Polo Costa Branca')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
        .card {border-radius: 0px;}
    </style>

    <section>
        <div class="container">
            
            {{-- /title --}}
            <div class="row title-polo" style="margin-top:130px;">
                
                <div class="polo-left">
                    <div class="box-title-polo-left">
                        <h4>Polo Costa Branca</h4>
                        <p>
                            <a href="/turismonorn"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
                        <p>Região turística composta por 6 municípios</p>
                        <hr>
                    </div>
                </div>
                
                <div class="polo-right">
                    <div class="row box-title-polo-right">
                        <small>Veja também:</small>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Agreste/Trairí</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Cabugi Central</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Costa Branca</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Costa das Dunas</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Potengi</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Vale Mar</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Rota do Frio</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Seridó</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Serrano</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Do Sertão Para o Mar</a></div>
                        <div class="col-3"> <i class="fa fa-map-marker" aria-hidden="true"></i> <a href="#">Serra do Agreste Potiguar</a></div>
                        <!--<div class="col-12"><hr></div>-->
                    </div>
                </div>
                
            </div>
            
            {{-- /card-municipios --}}
            <div class="box-info-municipios">
                
                <div class="row">
                 
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/polocostabranca-areiabranca.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Areia Branca</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 28.156 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Dunas do Rosado
                        <br/>• Praia de Upanema
                        <br/>• Praia de Baixa Grande
                        <br/>• Praia de São Cristóvão
                        <br/>• Praia de Redonda
                        <br/>• Praia de Ponta do Mel
                        <br/>• Praia de Morro Pintado
                        <br/>• Praia da Costa
                        <br/>• Praia do Pontal
                        <br/>• Praia de São José
                        <br/>• Festa de Nossa Senhora dos Navegantes
                        </p>

                        <p><b>Site:</b> <a href="#">https://areiabranca.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeareiabranca</p>
                        <a href="/costabrancaAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa Branca</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/polocostabranca-barauna.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Baraúna</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 29.112 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        Parque Nacional da Furna Feia
                        <br/>Izzis Acqua Park
                        </p>

                        <p><b>Site:</b> <a href="#">https://barauna.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradebarauna  </p>
                        <a href="/costabrancaAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa Branca</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostabranca-grossos.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Grossos</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 10.541 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praia de Pernambuquinho
                            <br/>• Dunas de Valença
                            </p>

                            <p><b>Site:</b> <a href="#">https://grossos.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituragrossos.rn / @visitegrossos</p>
                            <a href="/costabrancaAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa Branca</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostabranca-mossoro.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Mossóro</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 303.792 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Memorial da Resistência
                            <br/>• Museu do Petróleo
                            <br/>• Teatro Municipal Dix-Huit Rosado 
                            <br/>• Parque da Criança
                            <br/>• Mossoró Cidade Junina
                            <br/>• Pingo da Mei Dia
                            <br/>• Estação das artes
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.prefeiturademossoro.com.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeiturademossoro</p>
                            <a href="/costabrancaAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa Branca</button></a>
                          </div>
                        </div>
                      </div>
                
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Serra do Mel</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 12.225 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • 
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.serradomel.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituraserradomel </p>
                            <a href="/costabrancaAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa Branca</button></a>
                          </div>
                        </div>
                      </div>
            
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostabranca-tibau.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Tibau</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 4.173 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Morro de Areias Coloridas
                            <br/>• Pedra do Chapéu
                            <br/>• Carnaval
                            <br/>• Festa da Padroeira
                            </p>

                            <p><b>Site:</b> <a href="#">http://www.tibau.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradetibau</p>
                            <a href="/costabrancaAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa Branca</button></a>
                          </div>
                        </div>
                      </div>
                    
                </div>
                
            </div>
            
        </div>
    </section>

@endsection