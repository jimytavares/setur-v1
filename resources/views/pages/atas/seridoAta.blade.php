@extends('layout.main')

@section('title', 'SETUR - Seridó')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
    </style>

    <section style="margin-top:100px;">
        <div class="container">
            
            <div class="box-info-municipios">
                
                <div class="box-title-municipios" style="text-align:center;">
                    <h4><b>REGIÃO TURÍSTICA - Seridó</b></h4>
                    <p>Região turística composta por 12 municípios</p>
                    <a href="/poloserido"><small><i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar</small></a>
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
                      <td colspan="">Criação do Polo Turístico Serido</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/criacaodopoloturísticoserido.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">-</th>
                      <td colspan="">Regimento Interno Polo Serido</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/regimentointernopoloserido.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">1ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/1ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">2ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/2ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">3ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/3ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">4ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/4ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">5ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/5ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">6ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/6ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">7ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/7ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">8ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/8ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">9ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/9ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">10ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/10ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">11ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/11ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">12ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/12ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                    <tr>
                      <th scope="row">13ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/13ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">14ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/14ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">15ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/15ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">16ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/16ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">17ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/17ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">18ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/18ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">19ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/19ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">20ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/20ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">21ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/21ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">22ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/22ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">23ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/23ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">24ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/24ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">25ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/25ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">26ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/26ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">27ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/27ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">28ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/28ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">29ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/29ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">30ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/30ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">31ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/31ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">32ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/32ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">33ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/33ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">34ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/34ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">35ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/35ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">36ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/36ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">37ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/37ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">38ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/38ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">39ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/39ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">40ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/40ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">41ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/41ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">42ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/42ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">43ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/43ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">44ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/44ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">45ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/45ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">46ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/46ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">47ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/47ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">48ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/48ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      <tr>
                      <th scope="row">49ª</th>
                      <td colspan="">Ata Polo Seridó</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserido/49ª Ata Polo Seridó.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                      
                  </tbody>
                </table>
    
            </div>
            
        </div>
    </section>

@endsection
    
