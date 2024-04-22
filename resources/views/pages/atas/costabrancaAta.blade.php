@extends('layout.main')

@section('title', 'SETUR - Polo Costa Branca')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
    </style>

    <section>
        <div class="container">
            
            <div class="row">
                <div class="col-4">
                    <div class="box-title-polo-left">
                        <h4>Polo Costa Branca</h4>
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
                    <h4><b>REGIÃO TURÍSTICA - COSTA BRANCA</b></h4>
                    <p>Região turística composta por 6 municípios</p>
                    <a href="/polocostabranca"><small><i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar</small></a>
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
                      <td colspan="">CriaçãodoPoloTurísticoCostaBranca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/CriaçãodoPoloTurísticoCostaBranca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">-</th>
                      <td colspan="">RegimentoInternoPoloCostaBranca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/RegimentoInternoPoloCostaBranca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">-</th>
                      <td colspan="">Observaçãoatas</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/Observaçãoatas.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      
                    <tr>
                      <th scope="row">1ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/1ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">2ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/2ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">3ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/3ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">4ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/4ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">5ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/5ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">6ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/6ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">7ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/7ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">8ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/8ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">15ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/15ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">16ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/16ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">17ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/17ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">18ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/18ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">19ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/19ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">20ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/20ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      
                    <tr>
                      <th scope="row">26ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/26ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">27ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/27ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">28ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/28ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">29ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/29ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">30ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/30ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">30ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/30ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">32ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/32ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">33ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/33ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">34ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/34ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">35ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/35ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">36ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/36ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">37ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/37ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">38ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/38ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">39ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/39ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">40ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/40ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">41ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/41ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">42ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/42ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">43ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/43ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">44ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/44ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">45ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/45ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">46ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/46ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">47ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/47ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">48ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/48ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">49ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/49ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">50ª</th>
                      <td colspan="">Ata Polo Costa Branca</td>
                      <td><a href="{{ URL::asset('doc/atas/costabranca/50ª Ata Polo Costa Branca.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            
        </div>
    </section>

@endsection
    
