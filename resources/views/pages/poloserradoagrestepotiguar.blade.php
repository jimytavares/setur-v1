@extends('layout.main')

@section('title', 'SETUR - Polo Serras do Agreste Potiguar')

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
                        <h4>Polo Serras do Agreste Potiguar</h4>
                        <p>
                            <a href="/turismonorn"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
                        <p>Região turística composta por 4 municípios</p>
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
                      <img src="{{ URL::asset('img/polos/poloserradoagrestepotiguar-monte.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">MONTE DAS GAMELEIRAS</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 2.063 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Capela Nossa Senhora da Saúde
                        <br/>• Pedra da Pintada
                        <br/>• Pedra Navio
                        <br/>• Pedra da Caridade
                        <br/>• Pedra do Milagre
                        <br/>• Olho d´Água
                        <br/>• Açude do Pituaçu
                        <br/>• Tanque de Agripina
                        <br/>• Pedra do Magalhães
                        </p>

                        <p><b>Site:</b> <a href="#">http://montedasgameleiras.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituramdg</p>
                        <a href="/serradoagrestepotiguarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serras do Agreste Potiguar</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/poloserradoagrestepotiguar-passaefica.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">PASSA E FICA</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 13.667 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Pedra da Boca,
                        <br/>• Açude do Calabouço,
                        <br/>• Pedra da Caveira
                        </p>

                        <p><b>Site:</b> <a href="#">https://passaefica.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefpassaefica</p>
                        <a href="/serradoagrestepotiguarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serras do Agreste Potiguar</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">SÃO JOSÉ DO CAMPESTRE</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 12.901 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • 
                            </p>

                            <p><b>Site:</b> <a href="#">https://prefeiturasaojosedocampestre.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeiturasaojosedocampestre</p>
                            <a href="/serradoagrestepotiguarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serras do Agreste Potiguar</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserradoagrestepotiguar-serradesaobento.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">SERRA DE SÃO BENTO</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 5.739 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Serra de São Bento,
                            <br/>• Festival de Inverno de Serra de São Bento,
                            <br/>• Festival da Cachaça,
                            <br/>• Festival Gastronômico,
                            <br/>• Mountain Bike, trekking, cavalgada, trilhas ecológicas.
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.serradesaobento.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeserradesaobento / @serradesaobentorn</p>
                            <a href="/serradoagrestepotiguarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serras do Agreste Potiguar</button></a>
                          </div>
                        </div>
                      </div>
            
                </div>
                
            </div>
            
        </div>
    </section>

@endsection