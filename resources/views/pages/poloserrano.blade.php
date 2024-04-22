@extends('layout.main')

@section('title', 'SETUR - Polo Serrano')

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
                        <h4>Polo Serrano</h4>
                        <p>
                            <a href="/turismonorn"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
                        <p>Região turística composta por 12 municípios</p>
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
                      <img src="{{ URL::asset('img/polos/poloserrano-alexandria.jpeg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">ALEXANDRIA</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 13.529 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Serra da Barriguda
                        <br/>• Capela de Santa Filomena
                        <br/>• Sítio Arqueológico e a Pedra do Sino
                        <br/>• Festa da padroeira Nossa Senhora da Conceição
                        <br/>• Carnaval
                        </p>

                        <p><b>Site:</b> <a href="#">https://alexandria.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @alexandria_pref </p>
                        <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/poloserrano-apodi.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">APODI</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 35.904 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Museu de Arqueologia de Lajedo Soledade
                        <br/>• Barragem Apodi
                        </p>

                        <p><b>Site:</b> <a href="#">https://apodi.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituramunicipaldeapodi</p>
                        <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">CARAÚBAS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 20.588 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Festa do padroeiro da cidade São Sebastião
                            <br/>• Exposição Agropecuária de Caraúbas 
                            <br/>• Lagoa do Apanha-Peixe
                            </p>

                            <p><b>Site:</b> <a href="#">http://www.caraubas.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @caraubas</p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserrano-felipeguerra.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">FELIPE GUERRA</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 6.009 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Cachoeira da Caripina 
                            <br/>• Caverna do Crote
                            <br/>• Cachoeira do Rocandor
                            <br/>• Lajedo do Rosário
                            <br/>• Barragem do Mirador
                            <br/>• Caverna da Catedral
                            <br/>• Gruta dos Três Lagos
                            <br/>• Olho D’água das Galegas
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.felipeguerra.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @governodefelipeguerra</p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">JOSÉ DA PENHA</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 5.941 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • 
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.josedapenha.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefjosedapenha </p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserrano-janduis.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">JANDUÍS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 5.228 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Açude do livramento
                            <br/>• Igreja Santa Terezinha
                            <br/>• Festa de São Bento
                            <br/>• Festa da Padroeira Santa Teresinha
                            </p>

                            <p><b>Site:</b> <a href="#">http://janduis.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradejanduis </p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">LUCRÉCIA</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 4.053 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Barragem Balneário
                            <br/>• Capelinha de São João
                            <br/>• Cruz dos trés hérois
                            <br/>• Açude Lucrécia
                            <br/>• Mirante de São João
                            <br/>• Furna da Onça.
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.lucrecia.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradelucrecia </p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserrano-major.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">MAJOR SALES</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 4.102 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Major Folia
                            <br/>• Açude Gessem
                            <br/>• Centro Turístico Cultural Aprígio Matias
                            <br/>• Museu Cultural de Major Sales 
                            <br/>• Praça Central
                            </p>

                            <p><b>Site:</b> <a href="#">https://majorsales.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeiturademajorsales </p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">OLHO D'AGUA DOS BORGES</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 3 295  habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • 
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.olhodaguadoborges.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeodb </p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserrano-patu.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">PATU</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 12.861 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Santuário do Lima
                            <br/>• Gruta de Jesuíno Brilhante
                            <br/>• Cruzeiro de São Sebastião
                            <br/>• Voo Livre
                            <br/>• Serra de Patu
                            <br/>• Sítio arqueológico do Jatobá
                            <br/>• Piscinas naturais
                            </p>

                            <p><b>Site:</b> <a href="#">https://patu.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @governodepatu </p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserrano-paudosferros.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">PAU DOS FERROS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 30.802 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Açude Público Pedro Diógenes Fernandes
                            <br/>• Igreja Matriz de Nossa Senhora da Conceição
                            <br/>• Obelisco da Praça Monsenhor Caminha
                            <br/>• Feira Intermunicipal de Educação, Cultura, Turismo e Negócios do Alto Oeste Potiguar (FINECAP)
                            <br/>• Nossa Senhora da Conceição
                            </p>

                            <p><b>Site:</b> <a href="#">https://paudosferros.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @paudosferros</p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">SÃO FRANCISCO DO OESTE</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 4.281 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • 
                            </p>

                            <p><b>Site:</b> <a href="#">https://saofranciscodooeste.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @pmsforn </p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserrano-saomiguel.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">SÃO MIGUEL</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 23 789  habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Trilha de Motos na Serra
                            <br/>• São João na Serra
                            <br/>• Festa do padroeiro São Miguel Arcanjo
                            <br/>• Açude do Bonito
                            <br/>• Açude do Jacó/Pau Branco
                            <br/>• Praça 7 de Setembro
                            <br/>• Parque da Lagoa de São Miguel
                            <br/>• Serrote Verde
                            </p>

                            <p><b>Site:</b> <a href="#">http://www.saomiguel.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradesaomiguelrn </p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">UMARIZAL</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 10.485 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Trilhas
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.umarizal.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeumarizalrn </p>
                            <a href="/serranoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Serrano</button></a>
                          </div>
                        </div>
                      </div>
            
                </div>
                
            </div>
            
        </div>
    </section>

@endsection