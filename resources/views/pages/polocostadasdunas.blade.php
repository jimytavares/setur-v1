@extends('layout.main')

@section('title', 'SETUR - Polo Costa das Dunas')

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
                        <h4>Polo Costa das Dunas</h4>
                        <p>
                            <a href="/turismonorn"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
                        <p>Região turística composta por 17 municípios</p>
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
                 
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/polocostadasdunas-arez.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Arez</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 14.526 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Bica do Figueiredo
                        <br/>• Lagoa de Guaraíras
                        <br/>• Porto do Patané
                        <br/>• Canhão histórico
                        <br/>• Parque Natural Municipal José Mulato 
                        <br/>• Igreja Matriz de São João Batista e o antigo Convento dos Jesuítas
                        <br/>• Santa Coluna
                        <br/>• Cruzeiro da Praça
                        <br/>• Museu Clidenor de Lima Galvão 
                        </p>

                        <p><b>Site:</b> <a href="#">https://arez.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituramunicipalarez</p>
                        <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                    <div class="card">
                      <img src="{{ URL::asset('img/polos/polocostadasdunas-baiaformosa.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Baía Formosa</h5>
                        <hr>
                        <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 9.373 habitantes (Fonte: IBGE)</p>

                        <p><b>Principais atrativos turísticos:</b></p>

                        <p>
                        • Praia da Cacimba
                        <br/>• Praia de Bacupari
                        <br/>• Reserva de Mata Atlântica
                        <br/>• Lagoa Araraquara
                        <br/>• Lagoa da Coca-Cola
                        <br/>• Mirante da Baía Formosa
                        <br/>• Estátua de Italo Ferreira
                        </p>

                        <p><b>Site:</b> <a href="#">https://baiaformosa.rn.gov.br/</a>
                        <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeiturabaiaformosa / @baiaformosaa / @baiaformosa.rn</p>
                        <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                      </div>
                    </div>
                  </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-canguaretama.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Canguaretama</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 34.814 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Centro de Turismo Barra do Cunhaú
                            <br/>• Praia Barra de Cunhaú
                            <br/>• Mortuário do Cunhaú
                            <br/>• Festa da Padroeira Nossa Senhora da Conceição
                            <br/>• Festa dos Mártires de Cunhaú
                            <br/>• Festival de Verão
                            </p>

                            <p><b>Site:</b> <a href="#">https://canguaretama.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituracanguaretamarn / @vemvivercanguaretama</p>
                            <a href="/polocostadasrunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-cearamirin.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Ceará-Mirim</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 213.317.639 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praça Central Florida
                            <br/>• Praia de Jacumã
                            <br/>• Praia de Muriú
                            <br/>• Paróquia de São Bento
                            <br/>• Cachoeirinha de Pitangui
                            <br/>• Aerobunda
                            </p>

                            <p><b>Site:</b> <a href="#">https://cearamirim.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituracearamirim / @cearamirim.rn</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-extremoz.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Extrémoz</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 29.282 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Genipabu
                            <br/>• Praia de Pitangui
                            <br/>• Passeio de Buggy
                            <br/>• Passeio de Dromedários
                            <br/>• Lagoa de Pitangui
                            <br/>• Praia de Santa Rita
                            <br/>• Aquário Natal
                            <br/>• Barra do Rio
                            <br/>• Graçandu
                            </p>

                            <p><b>Site:</b> <a href="#">https://extremoz.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeextremozrn </p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
            
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-maxaranguape.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Maxaranguape</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 12.714 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praia de Maracajaú
                            <br/>• Praia do amor
                            <br/>• Árvore do amor
                            <br/>• Mergulho nos Parrachos
                            <br/>• Farol de São Roque
                            </p>

                            <p><b>Site:</b> <a href="#">https://site.maxaranguape.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituramaxaranguape / @curtamaracajau</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-natal.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Natal</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 896.708 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praia de Ponta Negra e Morro do Careca
                            <br/>• Praia da Redinha
                            <br/>• Praia dos Artistas
                            <br/>• Parque da Cidade Dom Nivaldo Montes
                            <br/>• Forte dos Reis Magos e Praia do Forte
                            <br/>• Palácio da Cultura - Pinacoteca do Estado do Rio
                            <br/>• Parque das Dunas
                            <br/>• Centro de Turismo de Natal
                            <br/>• Casa de Câmara cascudo
                            <br/>• Carnatal
                            <br/>• Teatro Alberto Maranhão
                            <br/>• Museu de Arte Sacra
                            <br/>• Museu de Cultura Popular Djalma Maranhão ????
                            <br/>• Museu Câmara Cascudo/UFRN
                            <br/>• Centro de Convenções
                            <br/>• Ponte Newton Navarro
                            <br/>• Cidade da Criança
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.natal.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @natalprefeitura / @vivanataloficial</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-nisiafloresta.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Nísia Floresta</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 28.266 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praia de Pirangi do Sul  (Parrachos) 
                            <br/>• Praia de Camurupim (Pedra Oca)
                            <br/>• Praia de Barreta
                            <br/>• Barra de Tabatinga (Vista dos Golfinhos no Mirante)
                            <br/>• Praia de Búzios (Windsurf, Kitesurf, Surf - Pôr do sol nas dunas)
                            <br/>• Baobá de Nísia Floresta
                            <br/>• Estação Ferroviária Papary
                            <br/>• Lagoa do Bonfim
                            <br/>• Lagoa de Boa Água
                            <br/>• Lagoa do Carcará
                            <br/>• Lagoa do Urubu
                            <br/>• Lagoa da Redonda
                            <br/>• Lagoa da Boacica
                            <br/>• Lagoa da Juventude
                            <br/>• Lagoa de Búzios
                            <br/>• Lagoa do Arroz
                            <br/>• Lagoa da Ilhota
                            <br/>• Lagoa de Arituba
                            <br/>• Lagoa Amarela 
                            <br/>• Lagoa Azul
                            <br/>• Floresta Nacional de Nísia Floresta 
                            <br/>• Mausoléu de Nísia Floresta
                            <br/>• Museu de Nísia Floresta
                            <br/>• Igreja Matriz de Nossa Senhora do Ó 
                            <br/>• Ruínas da Casa de Pedra (Hortigranjeira)
                            <br/>• Capela de Timbó (Berço da Campanha da Fraternidade) 
                            <br/>• Passeio de canoa ecológico (Rio Pirangi e Rio Pirrichiu)
                            </p>

                            <p><b>Site:</b> <a href="#">http://nisiafloresta.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituranisiafloresta / @vempranisia</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-parnamirim.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Parnamirim</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 272.490 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Cajueiro de Pirangi
                            <br/>• Centro de Lançamento Barreira do Inferno
                            <br/>• Planetário
                            <br/>• Praia de Cotovelo
                            <br/>• Praia de Pirangi do Norte
                            <br/>• Vale Encantado
                            <br/>• Mergulho nos Parrachos
                            <br/>• Parque Aluízio Alves
                            <br/>• Rio Pium
                            <br/>• Cine Teatro Vereador Paulo Barbosa
                            <br/>• Beco do Picado
                            <br/>• Mercado Público Municipal
                            <br/>• Carnaval 
                            </p>

                            <p><b>Site:</b> <a href="#">https://parnamirim.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeitura_parnamirim / @visiteparnamirim_</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-pureza.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Pureza</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 9.825 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Olheiro de Pureza
                            <br/>• Letreiro
                            <br/>• Terminal Turístico do Olheiro
                            </p>

                            <p><b>Site:</b> <a href="#">http://pureza.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradepureza / @visitepureza</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-riodofogo.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Rio do Fogo</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 10.961 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praia de Zumbi
                            <br/>• Parrachos
                            <br/>• Praia de Perobas
                            <br/>• Praia de Rio do Fogo
                            <br/>• Parrachos de Rio do Fogo 
                            <br/>• Lagoa da Cotia
                            <br/>• Barra de Punaú
                            <br/>• Praia de Pititinga
                            <br/>• Lagoa da Mutuca
                            </p>

                            <p><b>Site:</b> <a href="#">http://riodofogo.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituraderiodofogorn / @riodofogo_praia</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-saogoncalo.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">São Gonçalo do Amarante</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 104.919 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Santuário dos Mártires
                            <br/>• Engenho Potengi
                            <br/>• Capela e monumento aos Mártires de Uruaçu
                            <br/>• Distrito Industrial de São Gonçalo do Amarante
                            <br/>• Artesanato -  Argila, Sisal, Pedras, Louças cerâmicas
                            <br/>• Casa de Dona Militana
                            <br/>• Solar Ferreiro Torto
                            <br/>• Poço do Eco
                            </p>

                            <p><b>Site:</b> <a href="#"> https://saogoncalo.rn.gov.br/ - https://turismo.saogoncalo.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefsgarn</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-saomiguel.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">São Miguel do Gostoso</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 10.441 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praia de Tourinhos
                            <br/>• Praia de Santo Cristo
                            <br/>• Praia do Marco
                            <br/>• Praia da Xêpa
                            <br/>• Praia Exu Queimado
                            <br/>• Praia Ponta do Santo Cristo
                            <br/>• Praia do Maceió
                            </p>

                            <p><b>Site:</b> <a href="#">https://site.saomigueldogostoso.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @saomiguelgov / @secturgostoso </p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-tibaudosul.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Tibau do Sul</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 14.694 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Passeio de barco
                            <br/>• Pipa
                            <br/>• Santuário Ecológico de Pipa
                            <br/>• Falésias de Cacimbinhas
                            <br/>• Praia de Tibau do Sul
                            <br/>• Praia de Madeiro
                            <br/>• Chapadão de Pipa
                            <br/>• Portal de Tibau do Sul
                            <br/>• Lagoa das Guaraíras
                            </p>

                            <p><b>Site:</b> <a href="#">https://www.prefeituratibaudosul.com/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradetubaudosul</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-touros.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Touros</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 33.716 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Praia de Perobas
                            <br/>• Praia de Touros
                            <br/>• Praia de Pititinga
                            <br/>• Praia de Carnaubinha
                            <br/>• Farol do Calcanhar
                            <br/>• Museu histórico de Touros
                            <br/>• Praia de São José
                            </p>

                            <p><b>Site:</b> <a href="#">http://touros.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @tourosprefeitura  / @scturismo</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-vilaflor.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Vila Flor</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 3.217 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • Casa de Câmara e Cadeia
                            </p>

                            <p><b>Site:</b> <a href="#">https://vilaflor.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituravilaflor</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                    <div class="card-polo" style="widthh:32%; margin-top:30px;">
                        <div class="card">
                          <img src="{{ URL::asset('img/polos/polocostadasdunas-georginoavelino.jpg')}}" class="card-img-top" style="width:100%; height:100%;border-radius:0px;" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">Georgino Avelino</h5>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 4.527 habitantes (Fonte: IBGE)</p>

                            <p><b>Principais atrativos turísticos:</b></p>

                            <p>
                            • 
                            </p>

                            <p><b>Site:</b> <a href="#">http://pmsenadorgeorginoavelino.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradegeorgino</p>
                            <a href="/polocostadasdunasAta"><button class="btn btn-success btn-sm" style="text-align:center; margin-top:10px;">Ata Costa das Dunas</button></a>
                          </div>
                        </div>
                      </div>
                    
                </div>
                
            </div>
            
        </div>
    </section>

@endsection