@extends('layout.main')

@section('title', 'SETUR - Polo Rota do Frio')

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
                        <h4>Polo Rota do Frio</h4>
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
                      <img src="{{ URL::asset('img/polos/polorotadofrio-martins.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">MARTINS</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 8.790 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Memorial Manoel Lino de Paiva
                        <br/>• Museu Cultural Demétrio Lemos
                        <br/>• Museu Histórico de Martins
                        <br/>• Casa de Pedra
                        <br/>• Cachoeira de Umarizeira
                        <br/>• Capela Nossa Senhora do Rosário
                        <br/>• Casa de Agá Fernande
                        <br/>• Igreja Matriz de Nossa Senhora da Conceição (sede da paróquia),
                        <br/>• Largo Raimundo Nonato
                        <br/>• Nicho Ecológico Nossa Senhora do Livramento
                        <br/>• Praça Almino Afonso 
                        <br/>• Mirante da Carranca
                        <br/>• Mirante do Canto
                        <br/>• Mirante Mãe Guilé
                        <br/>• Festival de Inverno
                        </p>

                        <p><b>Site:</b> <a href="#">https://martins.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeiturademartins  /  @martinsrn </p>
                        <a href="/rotadofrioAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Rota do Frio</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/polorotadofrio-portalegre.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">PORTALEGRE</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 8.310 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Cachoeira do Pinga
                        <br/>• Cachoeira do Talhado
                        <br/>• Casa de Câmara e cadeia da Vila de Portalegre
                        <br/>• Igreja Matriz
                        <br/>• Mirante Alto da Serra
                        <br/>• Mirante Municipal Boa Vista
                        <br/>• Ponta da Serra
                        <br/>• Pórtico de Entrega
                        <br/>• Praça de Eventos
                        <br/>• Terminal Turística da Bica
                        <br/>• Torres
                        </p>

                        <p><b>Site:</b> <a href="#">https://www.portalegre.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeportalegrern</p>
                        <a href="/rotadofrioAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Rota do Frio</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polorotadofrio-riachodacruz.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">RIACHO DA CRUZ</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 3.648 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Festa Santa Luzia
                            <br/>• Avenida Camila de Léllis
                            <br/>• Avenida dos Coqueiros
                            <br/>• Bosque Municipal
                            <br/>• Marco do Município
                            <br/>• Pórtico de Entrada
                            <br/>• Praça de Eventos
                            <br/>• Trilha Poço da Vaca
                            </p>

                            <p><b>Site:</b> <a href="#">https://riachodacruz.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @riachodacruzpref</p>
                            <a href="/rotadofrioAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Rota do Frio</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">SERRINHA DOS PINTOS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 4.832 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Lajedo dos Bastiões
                            <br/>• Lajedo do Tota
                            <br/>• Terminal Turístico Javan dos Santos Rosa
                            <br/>• Pedra do Nariz
                            <br/>• Igreja Nossa Senhora da Salete
                            <br/>• Pedra do Navio
                            <br/>• Pedra Pão
                            </p>

                            <p><b>Site:</b> <a href="#">https://serrinhadospintos.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeserrinhadospintos</p>
                            <a href="/rotadofrioAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Rota do Frio</button></a>
                          </div>
                        </div>
                      </div>
                
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polorotadofrio-vicosa.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">VIÇOSA</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 1.731 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Festa da padroeira Nossa Senhora do Perpétuo Socorro
                            <br/>• Casa de Cultura Popular Palácio das Louceiras
                            <br/>• Complexo Poliesportivo Dra. Julieta Dantas
                            <br/>• Gruta de Nossa Senhora do Perpétuo Socorro
                            <br/>• Nascentes do Olho-d’Água
                            <br/>• Pórtico Municipal
                            <br/>• Praça Antônio Gomes da Silva
                            <br/>• Praça de Eventos 
                            <br/>• Praça Manoel Forte Sobrinho
                            <br/>• Riacho dos Dormentes
                            <br/>• Mina das Pedras Brancas
                            <br/>• Trilha do Rancho Alegre
                            <br/>• Olhos d’água dos Dormentes
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.vicosa.mg.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradevicosarn </p>
                            <a href="/rotadofrioAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Rota do Frio</button></a>
                          </div>
                        </div>
                      </div>
            
                </div>
                
            </div>
            
        </div>
    </section>

@endsection