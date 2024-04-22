@extends('layout.main')

@section('title', 'SETUR - Polo Potengi')

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
                        <h4>Polo Potengi</h4>
                        <p>
                            <a href="/turismonorn"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
                        <p>Região turística composta por 5 municípios</p>
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
                      <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">BARCELONA</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 3.989 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Parque Purús
                        <br/>• Docenorte esporte clube
                        <br/>• Cine teatro Carajás
                        <br/>• Parque zoobotânico vale – Carajás 
                        <br/>• Floresta Nacional dos Carajás 
                        </p>

                        <p><b>Site:</b> <a href="#">https://barcelona.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradebarcelon</p>
                        <a href="/potengiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Potengi</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">RIACHUELO</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 8.310 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        •
                        </p>

                        <p><b>Site:</b> <a href="#">https://www.riachuelo.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituraderiachuelorn</p>
                        <a href="/potengiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Potengi</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">SANTA MARIA</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 5.689 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Cascata de São Nicolau
                            </p>

                            <p><b>Site:</b> <a href="#">https://santamaria.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @santamariarn</p>
                            <a href="/potengiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Potengi</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polopotengi-saopaulo.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">SÃO PAULO DO POTENGI</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 17.858 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Barragem Campo Grande
                            <br/>• Museu Monsenhor Expedito de Medeiros
                            <br/>• Carnaval
                            <br/>• ExpoPotengi
                            <br/>• Vaquejada
                            <br/>• Festa de São Paulo Apóstolo
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.saopaulodopotengi.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradespp</p>
                            <a href="/potengiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Potengi</button></a>
                          </div>
                        </div>
                      </div>
                
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polopotengi-saotome.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">SÃO TOMÉ</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 11.051 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • 
                            </p>

                            <p><b>Site:</b> <a href="#">http://www.saotome.pr.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradesaotome </p>
                            <a href="/potengiAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Potengi</button></a>
                          </div>
                        </div>
                      </div>
            
                </div>
                
            </div>
            
        </div>
    </section>

@endsection