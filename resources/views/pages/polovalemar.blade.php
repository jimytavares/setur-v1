@extends('layout.main')

@section('title', 'SETUR - Polo Vale Mar')

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
                        <h4>Polo Vale Mar</h4>
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
                      <img src="{{ URL::asset('img/polos/polovalemar-assu.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">ASSU</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 58.743 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Chapada do Palheiro
                        <br/>• Trilhas pelas grutas e cavernas da Lagoa do Piató
                        <br/>• Delta do Rio Assu
                        <br/>• Lagoas
                        <br/>• Carnaubais
                        <br/>• São João
                        <br/>• Monumentos históricos
                        <br/>• Artesanato (palha de carnaúba, bordados, macramé, pintura em tela, ponto de cruz, fuxico, tapeçaria, cerâmica, vagonite, madeira, reciclagem de jornal).

                        </p>

                        <p><b>Site:</b> <a href="#">https://assu.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituraassu</p>
                        <a href="/valenarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Vale Mar</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/polovalemar-Ipanguaçu-gabrielmarques.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">IPANGUAÇU</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 15.759 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        •
                        </p>

                        <p><b>Site:</b> <a href="#">https://ipanguacu.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituraipanguacu</p>
                        <a href="/valemarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Vale Mar</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">ITAJÁ</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 7.641 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Rio
                            <br/>• Lago
                            <br/>• Riacho
                            <br/>• Barragem (Açude) Armando Ribeiro Gonçalves
                            <br/>• Pesca
                            <br/>• Esportes náuticos
                            <br/>• Treking
                            <br/>• Passeios ecológicos
                            </p>

                            <p><b>Site:</b> <a href="#">https://itaja.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituraitaja</p>
                            <a href="/valemarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Vale Mar</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">PORTO DO MANGUE</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 6.605 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praia de Pedra Grande
                            <br/>• Esportes Náuticos (Regata)
                            <br/>• Artesanato (em conhas, pedras, madeira, crochê, pintura em tela)
                            <br/>• Rio das Conchas
                            <br/>• Praia da Costinha
                            <br/>• Dunas do Rosado
                            <br/>• Deserto do Alagamar
                            </p>

                            <p><b>Site:</b> <a href="#">https://portodomangue.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeportodomangue / @portodomanguern</p>
                            <a href="/valemarAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Vale Mar</button></a>
                          </div>
                        </div>
                      </div>
                
                </div>
                
            </div>
            
        </div>
    </section>

@endsection