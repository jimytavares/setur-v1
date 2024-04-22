@extends('layout.main')

@section('title', 'SETUR - Polo Seridó')

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
                        <h4>Polo Seridó</h4>
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
                      <img src="{{ URL::asset('img/polos/poloserido-acari.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">ACARI</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 11.106 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Açude Gargalheiras
                        <br/>• Museu Histórico de Acari
                        <br/>• Museu histórico de Acari
                        <br/>• Balneário do Francisco do Pastel 
                        </p>

                        <p><b>Site:</b> <a href="#">https://acari.rn.gov.br/home</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @pprefeituradeacari </p>
                        <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/poloserido-caico.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">CAICÓ</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 68.726 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Festa de Santana
                        <br/>• Arco do Triunfo
                        <br/>• Açude Itans
                        <br/>• Praça dos Trailers
                        <br/>• Castelo de Engady
                        <br/>• Igreja do Rosário
                        <br/>• Casa Forte do Cuó
                        <br/>• Poço de Santana
                        <br/>• Serra da Formiga
                        <br/>• Culinária e artesanato
                        </p>

                        <p><b>Site:</b> <a href="#">https://caico.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradecaicorn</p>
                        <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserido-carnauba.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">CARNAÚBA DOS DANTAS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 8.297 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Monte do Galo
                            <br/>• Castelo de Bivar
                            <br/>• Serra da Rajada
                            <br/>• Sítio arqueológico Xiquexique
                            <br/>• Monte do Galo
                            <br/>• Museu Nossa Senhora das Vitórias
                            <br/>• Sítio Arqueológico Pedra do Alexandre
                            <br/>• Sítio Arqueológico Casa Santa
                            <br/>• Santuário de Santa Rita de Cássia
                            <br/>• Talhado do Gavião
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.carnaubadosdantas.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituracarnauba</p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserido-cerro.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">CERRO CORÁ</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 11.182 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Casa Grande (Casa Centenária)
                            <br/>• Igreja São João Batista
                            <br/>• Trilha do Escorrego
                            <br/>• Cruzeiro com vista da cidade e do Açude Elói de Souza
                            <br/>• Trilha da Nascente do Rio Potengi
                            <br/>• Mirante do Pipila
                            <br/>• Vale Vulcânico
                            <br/>• Sítios arqueológicos
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.cerrocora.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituracerrocora</p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
                
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserido-curraisnovos.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">CURRAIS NOVOS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 45.022 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Memorial Tomaz Salustino
                            <br/>• Museu Mineral Mario Porto
                            <br/>• Túneis  e Galerias (65 Km de subsolo) 
                            <br/>• Gruta de Santa Bárbara
                            <br/>• Igreja de Santa Tereza D´avila 
                            <br/>• Cânion dos Apertados
                            <br/>• Pedra do Sino
                            <br/>• Fundação Cultural José Bezerra Gomes
                            <br/>• Coreto Guarany
                            <br/>• Casarão de Poesia
                            <br/>• Pico do Totoró
                            </p>

                            <p><b>Site:</b> <a href="#">https://curraisnovos.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradecurraisnovos </p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">FLOR NIA</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 9.772 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Igreja matriz de São Sebastião
                            <br/>• Santuário de Nossa Senhora das Graças
                            <br/>• Praça Mãe Santa 
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.florania.rn.gov.br/#/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeflorania </p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserido-jucurutu.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">JUCURUTU</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 18.335 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Letreiro
                            <br/>• Monte do Galo
                            <br/>• Rio Piranhas;
                            <br/>• Vaquejada de Jucurutu
                            <br/>• Serra João do Vale
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.jucurutu.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradejucuruturn </p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserido-lagoanova.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">LAGOA NOVA</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 13.990 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Cruzeiro da Baraúna
                            <br/>• Geossítio Mirante de Santa Rita
                            <br/>• Parque Eólico
                            <br/>• Trilhas nas Margens do Rio Cafuca
                            <br/>• Serra de Santana
                            <br/>• Produção de Caju
                            <br/>• Centro Municipal de Artesanato,
                            <br/>• Ecoturismo e Turismo de Segunda Residência
                            </p>

                            <p><b>Site:</b> <a href="#">https://lagoanova.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradelagoanova </p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/poloserido-parelhas.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">PARELHAS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 21.611 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Serra do Boqueirão
                            <br/>• Planalto da Borborema
                            <br/>• Serra da Arreia
                            <br/>• Serra da Coruja
                            <br/>• Serra das Gargantas
                            <br/>• Serra das Queimadas
                            <br/>• Serra do Marimbondo
                            <br/>• Sítio arqueológico Mirador  
                            <br/>• Encontro dos Jipeiros do Seridó
                            <br/>• Forró Folia
                            <br/>• Festival de Cultura (FECAP)
                            <br/>• Parque dos Dinossauros
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.parelhas.rn.gov.br/  - http://www.visiteparelhas.com.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeparelhas </p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">SÃO JOÃO DO SABUGI</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 6.221 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Festa de São João Batista
                            <br/>• Maior São João do Seridó
                            </p>

                            <p><b>Site:</b> <a href="#">https://saojoaodosabugi.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradesaojoaodosabugi </p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">TENENTE LAURENTINO CRUZ</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 6.085 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Mirante da Casa Grande
                            <br/>• Letreiro
                            </p>

                            <p><b>Site:</b> <a href="#">https://tenentelaurentinocruz.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeitura.ten.laurentino.cruz </p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="width:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/logo-gov-setur-png2.png')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">TIMBAÚBA DOS BATISTAS</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 2.427 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Sítio Pintado
                            <br/>• Festa da Emancipação Política
                            <br/>• Festa do Padroeiro São Severino Mártir
                            </p>

                            <p><b>Site:</b> <a href="#">http://timbaubadosbatistas.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @timbaubadosbatistasrn </p>
                            <a href="/seridoAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Seridó</button></a>
                          </div>
                        </div>
                      </div>
            
                </div>
                
            </div>
            
        </div>
    </section>

@endsection