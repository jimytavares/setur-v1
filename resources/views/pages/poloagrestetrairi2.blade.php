@extends('layout.main')

@section('title', 'SETUR - Polo Agreste Trairi')

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
                        <h4>Polo Agreste Trairi</h4>
                        <p>
                            <a href="http://setur.rn.gov.br/turismonorn"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
                        <p>Região turística composta por 8 municípios</p>
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
                      <img src="{{ URL::asset('img/polos/03-agrestetrairi-santa-rita-santa-cruz.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Santa Cruz</h5>
                        <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 40.295 habitantes (Fonte: IBGE)</p>

                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>• Museu Rural Auta Pinheiro Bezerra
                                <br/>• Complexo Cultural Santá
                                <br/>• Santuário de Santa Rita</p>

                                <p><b>Site:</b> <a href="#">http://santacruz.rn.gov.br/site/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeiturasantacruzrn</p>
                                    <a href="/poloagrestetrairiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;"> Ata Polo Agreste Trairi</button></a>
                      </div>
                    </div>
                  </div>
                    
                  <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/01-agrestetrairi-serra-caiada-rapel-giovanni.jpg')}}" class="card-img-top" style="width:100%; height:100%; border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Serra Caiada</h5>
                        <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 10.646 habitantes (Fonte: IBGE)</p>

                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>• Praça do Letreiro
                                    <br/>• Centro Cultural da cidade de Serra Caiada 
                                    <br/>• Turismo de aventura: Trilhas, alpinismo, ecoturismo</p>

                                <p><b>Site:</b> <a href="#">https://www.serracaiada.rn.gov.br/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeserracaiadarn /  @vemviverserracaiada</p>
                                    <a href="/poloagrestetrairiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;"> Ata Polo Agreste Trairi</button></a>
                      </div>
                    </div>
                  </div>
                    
                  <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/brejinho.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Brejinho</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 12.873 habitantes (Fonte: IBGE)</p>
                        <p><b>Principais atrativos turísticos:</b></p>

                        <p><b>Site:</b> <a href="#">https://brejinho.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> prefeitura_brejinho_rn</p>
                          <a href="/poloagrestetrairiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;"> Ata Polo Agreste Trairi</button></a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/Campo-Redondo-RN.jpg')}}" class="card-img-top" style="width:100%; height:100%; padding-top:-30px; border-radius:0px;">
                      <div class="card-body">
                        <h5 class="card-title">Campo Redondo</h5>
                        <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 11.363 habitantes (Fonte: IBGE)</p>
                               <p><b>Principais atrativos turísticos:</b></p> 
                               
                            <p><b>Site:</b> <a href="#">https://www.camporedondo.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> camporedondo_oficial</p>
                            <a href="/poloagrestetrairiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;"> Ata Polo Agreste Trairi</button></a>
                      </div>
                    </div>
                  </div>          
                    
                  <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/02-agrestetrairi-sitio-novo- castelo-ze-dos-montes.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Sitio Novo</h5>
                        <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 5.600 habitantes (Fonte: IBGE)</p>

                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>• Castelo Zé dos Montes
                                    <br/>• Pedra de São Pedro
                                    <br/>• O olho d'água
                                    <br/>• Trilhas da Pedra de São Pedro
                                    <br/>• Cavernas
                                    <br/>• Pinturas Rupestres
                                    <br/>• Cruzeiro de São Francisco
                                    <br/>• Capela de Santo Antônio
                                    <br/>• Mirantes Naturais</p>

                                <p><b>Site:</b> <a href="#">http://sitionovo.rn.gov.br/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradesitionovorn</p>
                                    <a href="/poloagrestetrairiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;"> Ata Polo Agreste Trairi</button></a>
                      </div>
                    </div>
                  </div>
                    
                  <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/pedrovelho.jpg')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Pedro Velho</h5>
                        <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 14.881 habitantes (Fonte: IBGE)</p>
                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>• Ruínas de Cuitezeiras e Sítio do Pau Grande 
                                <br/>• Ponte Ferroviária
                                <br/>• Samaumeira Pau Grande
                                <br/>• Cristo de Carnaúba</p>

                                <p><b>Site:</b> <a href="#">https://pedrovelho.rn.gov.br/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> pedrovelhorn_</p>
                                    <a href="/poloagrestetrairiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;"> Ata Polo Agreste Trairi</button></a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Santo Antonio</h5>
                        <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 24.422 habitantes (Fonte: IBGE)</p>

                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>•Pico do grão grande
                                    <br/>•Cascata de São Nicolau
                                    <br/>•Lagoa Azul
                                    <br/>•Museu Nacional de Santo Antônio RN</p>
                                
                                <p><b>Site:</b> <a href="#">https://santoantonio.rn.gov.br/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradesantoantoniorn</p>
                                    <a href="/poloagrestetrairiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;"> Ata Polo Agreste Trairi</button></a>
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Tangara</h5>
                        <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 16.008 habitantes (Fonte: IBGE)</p>

                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>• Açude Tangará 
                                    <br/>• Centro de Artesanato de Tangará RN
                                    <br/>• Pastel de Tangará - Patrimônio Imaterial cultural
                                    <br/>• Arraiá do Lampião
                                    <br/>• Vaquejada de Tangará
                                    <br/>• Açude Trairí
                                    <br/>• Museu de Teodorico Bezerra
                                    <br/>• Cruzeiro de São Francisco</p>
                                
                                <p><b>Site:</b> <a href="#">https://tangara.rn.gov.br/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradetangararn</p>
                                    <a href="/poloagrestetrairiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;"> Ata Polo Agreste Trairi</button></a>
                      </div>
                    </div>
                  </div>
                  
                </div>
    
            </div>
            
        </div>
    </section>

@endsection