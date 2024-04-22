@extends('layout.main')

@section('title', 'SETUR - Polo Do Sertão Para o Mar')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
        .card {border-radius: 0px;}
    </style>

    <section>
        <div class="container">
            
            {{-- /title --}}
            <div class="row title-polo" style="margin-top:130px;">
                
                <div class="card-polo">
                    <div class="box-title-polo-left">
                        <h4>Polo Do Sertão Para o Mar</h4>
                        <p>
                            <a href="/turismonorn"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
                        <p>Região turística composta por 6 municípios</p>
                        <hr>
                    </div>
                </div>
                
                <div class="card-polo">
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
                        <h5 class="card-title">ALTO DO RODRIGUES</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 14.923 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • 
                        </p>

                        <p><b>Site:</b> <a href="#">https://altodorodrigues.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefaltodorodrigues</p>
                        <a href="/dosertaoparaomarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Do Setão Para o Mar</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">CARNAUBAIS</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 10.972 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Lagoa da Pasta
                        <br/>• Lagoa do Jenipapeiro
                        <br/>• Lagoa do Poré
                        <br/>• Lagoa de Manoel Tavares
                        <br/>• Lagoa Papagaio
                        <br/>• Lagoa do Mato
                        <br/>• Lagoa da Capivara
                        <br/>• Lagoa do Jaburu
                        <br/>• Lagoa do Queimado
                        <br/>• Cidade Histórica
                        <br/>• Igreja de Santa Luzia e Festa de Santa Luzia
                        </p>

                        <p><b>Site:</b> <a href="#">https://carnaubais.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradecarnaubais  </p>
                        <a href="/dosertaoparaomarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Do Setão Para o Mar</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polosertaoparaomar-galinhos.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">GALINHOS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 10.541 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Farol
                            <br/>• Passeios de barco
                            <br/>• Salinas
                            <br/>• Mangue
                            <br/>• Rio
                            <br/>• Dunas
                            <br/>• Lagoa
                            <br/>• Artesanato
                            </p>

                            <p><b>Site:</b> <a href="#">http://www.galinhos.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituragalinhos / @visitegalinhos</p>
                            <a href="/dosertaoparaomarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Do Setão Para o Mar</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polosertaoparaomar-guamare.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">GUAMARÉ</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 303.792 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Passeios panorâmicos a parques eólicos
                            <br/>• Passeios pelos viveiros de camarão 
                            <br/>• Passeio pela refinaria de gás e petróleo Clara Camarão
                            <br/>• Caverna dos Morcegos Gigantes
                            <br/>• Trilha de  Gamboas
                            <br/>• Passeio nas Gamboas
                            <br/>• Ilha do Presídio
                            <br/>• Praia do Queimados
                            <br/>• Praia do Minhoto
                            <br/>• Praia do Amaro
                            </p>

                            <p><b>Site:</b> <a href="#">https://guamare.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituraguamare / @belezasdeguamare</p>
                            <a href="/dosertaoparaomarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Do Setão Para o Mar</button></a>
                          </div>
                        </div>
                      </div>
                
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polosertaoparaomar-macau.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">MACAU</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 32.260 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praia Camapum
                            <br/>• Praias
                            <br/>• Ponta do tubarão (área de proteção ambiental)
                            <br/>• Dunas
                            <br/>• Parque salineiro
                            <br/>• Manguezais
                            <br/>• Passeios de barco, de buggy e de jangada
                            <br/>• Caminhadas ecológicas
                            <br/>• Museu marinho
                            <br/>• Monumentos históricos
                            <br/>• Artesanato (areias coloridas, conchas do mar e madeira), pesca esportiva.
                            </p>

                            <p><b>Site:</b> <a href="#">http://macau.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @macauprefeitura </p>
                            <a href="/dosertaoparaomarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Do Setão Para o Mar</button></a>
                          </div>
                        </div>
                      </div>
            
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">PENDÊNCIAS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 15.411 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Rio Piranhas-Açu
                            <br/>• Casarão de Ofício
                            <br/>• Carcinicultura
                            </p>

                            <p><b>Site:</b> <a href="#">https://pendencias.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradependencias</p>
                            <a href="/dosertaoparaomarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Do Setão Para o Mar</button></a>
                          </div>
                        </div>
                      </div>
                    
                </div>
                
            </div>
            
        </div>
    </section>

@endsection