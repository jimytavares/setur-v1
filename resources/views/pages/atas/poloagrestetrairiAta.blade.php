@extends('layout.main')

@section('title', 'SETUR - Polo Agreste Trairi')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
    </style>

    <section>
        <div class="container">
            
            <div class="row">
                <div class="col-4">
                    <div class="box-title-polo-left">
                        <h4>Polo Agreste Trairi</h4>
                        <p>
                            <a href="http://setur.rn.gov.br/"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                        </p>
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
                
                <div class="box-title-municipios" style="text-align:center;">
                    <h4><b>REGIÃO TURÍSTICA - AGRESTE/TRAIRI</b></h4>
                    <p>Região turística composta por 8 municípios</p>
                    <a href="/poloagrestetrairi2"><small><i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar</small></a>
                </div>
                
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
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/Criação-do-Polo-Turístico-Agreste-Trairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">1ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/1ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">3ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/3ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">4ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/4ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">5ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/5ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">6ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/6ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">7ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/7ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">8ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/8ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">9ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/9ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">10ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/10ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">11ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/11ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">12ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/12ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">13ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/13ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">14ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/14ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">15ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/15ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">16ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/16ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">17ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/17ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">18ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/18ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">19ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/19ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">20ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/20ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">21ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/21ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">22ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/22ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">23ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/23ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">24ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/24ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">25ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/25ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">26ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/26ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">27ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/27ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">28ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/28ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">29ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/29ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">30ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/30ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">31ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/31ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">32ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/32ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">33ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/33ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">34ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/34ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">35ª</th>
                              <td colspan="">Ata  Polo Agreste Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/35ªAtaPoloAgresteTrairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                              <tr>
                              <th scope="row">-</th>
                              <td colspan="">Regimento-Interno-Polo-Agreste-Trairi</td>
                              <td><a href="{{ URL::asset('doc/atas/poloagrestetrairi/Regimento-Interno-Polo-Agreste-Trairi.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                          </tbody>
                        </table>
    
            </div>
            
        </div>
    </section>

@endsection
    
