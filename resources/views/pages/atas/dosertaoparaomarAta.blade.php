@extends('layout.main')

@section('title', 'SETUR - Polo Do Sertão Para o Mar')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
    </style>

    <section style="margin-top:100px;">
        <div class="container">
            
            <div class="box-info-municipios">
                
                <div class="box-title-municipios" style="text-align:center;">
                    <h4><b>REGIÃO TURÍSTICA - Do Sertão Para o Mar</b></h4>
                    <p>Região turística composta por 6 municípios</p>
                    <a href="/polosertaoparaomar"><small><i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar</small></a>
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
                      <th scope="row">1ª</th>
                      <td colspan="">Ata Polo Do Sertão Para o Mar</td>
                      <td><a href="{{ URL::asset('doc/atas/polodosertaoparaomar/1ªatapolosertaoparaomar.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                  </tbody>
                </table>
    
            </div>
            
        </div>
    </section>

@endsection
    
