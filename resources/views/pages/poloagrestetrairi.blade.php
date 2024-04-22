@extends('layout.main')

@section('title', 'SETUR - Polo Agreste Trairi')

@section('content')

    <section>
        <div class="container">
            
            <div class="row">
                <div class="col-4">
                    <div class="box-title-polo-left">
                        <h4>Polo Agreste Trairi</h4>
                        <p>
                            <a href="/setur-v1/public/"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
                        <hr>
                    </div>
                </div>
                <div class="col-8">
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
                        <div class="col-12"><hr></div>
                    </div>
                </div>
            </div>
            
            <br/>
            
            <div class="box-info-municipios">
                
                <div class="box-title-municipios">
                    <h4><b>REGIÃO TURÍSTICA - AGRESTE/TRAIRI</b></h4>
                    <p>Região turística composta por 8 municípios</p>
                </div>
    
                <div class="row subtitle-municipios">
                    <div class="col-8">
                        <p>Municípios:</p>
                    </div>
                    <div class="col-4">
                        <p>Imagens:</p>
                    </div>
                </div>

                <div class="row">
                    
                    {{-- /municipios --}}
                    <div class="col-8">
                       
                        <div class="box-municipios">
                           <div class="box-municipios-inter">
                                <p><b>BREJINHO</b></p>
                                <hr>
                                
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 12.873 habitantes (Fonte: IBGE)</p>
                                <p><b>Principais atrativos turísticos:</b></p>
                                
                                <p><b>Site:</b> <a href="#">https://brejinho.rn.gov.br/</a>
                                <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> prefeitura_brejinho_rn</p>
                           </div>
                        </div>

                        <div class="box-municipios">
                           <div class="box-municipios-inter">
                            <p><b>CAMPO REDONDO</b></p>
                            <hr>
                            <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 11.363 habitantes (Fonte: IBGE)</p>
                               <p><b>Principais atrativos turísticos:</b></p> 
                               
                            <p><b>Site:</b> <a href="#">https://www.camporedondo.rn.gov.br/</a>
                            <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> camporedondo_oficial</p>
                           </div>
                        </div>

                        <div class="box-municipios">
                            <div class="box-municipios-inter">
                                <p><b>PEDRO VELHO</b></p>
                                <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 14.881 habitantes (Fonte: IBGE)</p>
                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>• Ruínas de Cuitezeiras e Sítio do Pau Grande 
                                <br/>• Ponte Ferroviária
                                <br/>• Samaumeira Pau Grande
                                <br/>• Cristo de Carnaúba</p>

                                <p><b>Site:</b> <a href="#">https://pedrovelho.rn.gov.br/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> pedrovelhorn_</p>
                            </div>
                        </div>

                        <div class="box-municipios">
                            <div class="box-municipios-inter">        
                                <p><b>SANTA CRUZ</b></p>
                                <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 40.295 habitantes (Fonte: IBGE)</p>

                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>• Museu Rural Auta Pinheiro Bezerra
                                <br/>• Complexo Cultural Santá
                                <br/>• Santuário de Santa Rita</p>

                                <p><b>Site:</b> <a href="#">http://santacruz.rn.gov.br/site/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeiturasantacruzrn</p>
                            </div>
                        </div>

                        <div class="box-municipios">
                            <div class="box-municipios-inter">
                                <p><b>SANTO ANTÔNIO</b></p>
                                <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 24.422 habitantes (Fonte: IBGE)</p>

                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>•Pico do grão grande
                                    <br/>•Cascata de São Nicolau
                                    <br/>•Lagoa Azul
                                    <br/>•Museu Nacional de Santo Antônio RN</p>
                                
                                <p><b>Site:</b> <a href="#">https://santoantonio.rn.gov.br/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradesantoantoniorn</p>
                            </div>
                        </div>

                        <div class="box-municipios">
                            <div class="box-municipios-inter">
                                <p><b>SERRA CAIADA</b></p>
                                <hr>
                                <p><i class="fa fa-user-circle-o" aria-hidden="true"></i> População estimada: 10.646 habitantes (Fonte: IBGE)</p>

                                <p><b>Principais atrativos turísticos:</b></p>

                                <p>• Praça do Letreiro
                                    <br/>• Centro Cultural da cidade de Serra Caiada 
                                    <br/>• Turismo de aventura: Trilhas, alpinismo, ecoturismo</p>

                                <p><b>Site:</b> <a href="#">https://www.serracaiada.rn.gov.br/</a>
                                    <br/><b><i class="fa fa-instagram" aria-hidden="true"></i> Instagram:</b> @prefeituradeserracaiadarn /  @vemviverserracaiada</p>
                            </div>
                        </div>

                        <div class="box-municipios">
                            <div class="box-municipios-inter">
                                <p><b>SÍTIO NOVO</b></p>
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
                            </div>
                        </div>

                        <div class="box-municipios">
                            <div class="box-municipios-inter">
                                <p><b>TANGARÁ</b></p>
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
                            </div>
                        </div>
                        
                    </div>
                    
                    {{-- /imagens --}}
                    <div class="col-4">
                        
                        <a href="{{ URL::asset('img/polos/01-agrestetrairi-serra-caiada-rapel-giovanni.jpg')}}" target="_blank"><img src=" {{ URL::asset('img/polos/01-agrestetrairi-serra-caiada-rapel-giovanni.jpg')}} " style="width:100%;"/></a>
                        <a href="{{ URL::asset('img/polos/02-agrestetrairi-sitio-novo- castelo-ze-dos-montes.jpg')}}" target="_blank"><img src=" {{ URL::asset('img/polos/02-agrestetrairi-sitio-novo- castelo-ze-dos-montes.jpg')}} " style="width:100%;"/></a>
                        <a href="{{ URL::asset('img/polos/03-agrestetrairi-santa-rita-santa-cruz.jpg')}}" target="_blank"><img src=" {{ URL::asset('img/polos/03-agrestetrairi-santa-rita-santa-cruz.jpg')}} " style="width:100%;"/></a>
                        
                        <table class="table table-striped" style="margin-top:40px;">
                          <thead>
                            <tr>
                              <th scope="col"></th>
                              <th scope="col">Nome</th>
                              <th scope="col">Download</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <th scope="row">-</th>
                              <td colspan="">Criação do Polo Turístico Agreste-Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">1ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">3ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">4ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">5ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">6ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">7ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">8ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">9ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">10ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">11ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">12ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">13ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="#" id="a-download"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                          </tbody>
                        </table>
                        
                    </div>
                    
                </div>
                
            </div>
            
        </div>
    </section>

@endsection
    
