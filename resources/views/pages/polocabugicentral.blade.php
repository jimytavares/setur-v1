@extends('layout.main')

@section('title', 'SETUR - Polo Cabugi Central')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
        .card {border-radius: 0px;}
    </style>

    <section>
        <div class="container">
            
            {{-- /title --}}
            <div class="row title-polo" style="margin-top:130px;">
                
                <div class="polo-left" style="width:30%;">
                    <div class="box-title-polo-left">
                        <h4>Polo Cabugi Central</h4>
                        <p>
                            <a href="/turismonorn"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
                        <p>Região turística composta por 4 municípios</p>
                        <hr>
                    </div>
                </div>
                
                <div class="polo-right" style="width:70%;">
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
                 
                    <div class="col-4" style="margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Angicos</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 11.695 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Pico do Cabugi
                        <br/>• Poço da Oitiçica
                        <br/>• Casa de Cultura Popular professor Paulo Freire
                        <br/>• Igreja Matriz São José dos Angicos
                        </p>

                        <p><b>Site:</b> <a href="#">https://www.angicos.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeangicos</p>
                        <a href="/cabugicentralAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Cabugi Central</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="col-4" style="margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/polocabugicentral-fernando.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Fernando Pedroza</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 3.081 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Pedra do Sapo
                        <br/>• Gruta da Santa
                        <br/>• Túnel
                        <br/>• Lagoa Azul
                        <br/>• Açude Orós da Melancia
                        <br/>• Trilha no Pico do cabugi
                        <br/>• Artesanato
                        </p>

                        <p><b>Site:</b> <a href="#">https://www.fernandopedroza.rn.gov.br/index.php/pt/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @fernandopedroza </p>
                        <a href="/cabugicentralAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Cabugi Central</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="col-4" style="margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocabugicentral-lajes.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Lajes</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 11.410 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Parque Ecológico do Cabugi
                            <br/>• Mercado Público de Lajes
                            </p>

                            <p><b>Site:</b> <a href="#">https://lajes.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradelajes  </p>
                            <a href="/cabugicentralAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Cabugi Central</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="col-4" style="margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Pedro Avelino</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 6.591 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • 
                            </p>

                            <p><b>Site:</b> <a href="#">http://pedroavelino.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradepedroavelino</p>
                            <a href="/cabugicentralAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Cabugi Central</button></a>
                          </div>
                        </div>
                      </div>
                    </div>
    
            </div>
            
        </div>
    </section>

@endsection