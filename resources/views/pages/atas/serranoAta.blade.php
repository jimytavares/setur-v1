@extends('layout.main')

@section('title', 'SETUR - Polo Serrano')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
    </style>

    <section>
        <div class="container">
            
            {{-- /titulo.ata --}}
            <div class="row">
                <div class="col-4">
                    <div class="box-title-polo-left">
                        <h4>Polo Serrano</h4>
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
            
            {{-- /documentos.ata --}}
            <div class="box-info-municipios">
                
                <div class="box-title-municipios" style="text-align:center;">
                    <h4><b>REGIÃO TURÍSTICA - SERRANO</b></h4>
                    <p>Região turística composta por 14 municípios</p>
                    <a href="/poloserrano"><small><i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar</small></a>
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
                      <td colspan="">CriaçãodoPoloTurísticoSerrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/CriaçãodoPoloTurísticoSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">-</th>
                      <td colspan="">RegimentoInternoPoloSerrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/RegimentoInternoPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">1ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/1ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">2ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/2ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">3ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/3ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">4ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/4ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">5ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/5ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">6ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/6ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">7ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/7ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">8ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/8ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">9ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/9ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">10ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/10ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">11ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/11ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">12ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/12ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">13ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/13ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">14ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/14ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">15ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/15ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">16ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/16ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">17ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/17ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">18ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/18ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">19ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/19ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">20ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/20ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">21ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/21ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">22ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/22ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">23ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/23ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">24ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/24ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">25ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/25ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">26ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/26ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">27ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/27ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">28ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/28ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">29ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/29ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">30ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/30ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">31ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/31ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">32ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/32ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">33ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/33ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">34ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/34ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">35ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/35ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">36ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/36ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">37ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/37ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">38ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/38ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">39ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/39ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">40ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/40ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">41ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/41ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">42ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/42ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">43ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/43ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">44ª</th>
                      <td colspan="">Ata Polo Serrano</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserrano/44ªAtaPoloSerrano.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                  </tbody>
                </table>
            </div>
            
        </div>
    </section>

@endsection
    
