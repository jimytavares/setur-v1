@extends('layout.main')

@section('title', 'SETUR - Serra do Agreste Potiguar')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
    </style>

    <section style="margin-top:100px;">
        <div class="container">
            
            <div class="box-info-municipios">
                
                <div class="box-title-municipios" style="text-align:center;">
                    <h4><b>REGIÃO TURÍSTICA - Serra do Agreste Potiguar</b></h4>
                    <p>Região turística composta por 1 municípios</p>
                    <a href="/poloserradoagrestepotiguar"><small><i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar</small></a>
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
                      <td colspan="">Ata Polo Serra do Agreste Potiguar</td>
                      <td><a href="{{ URL::asset('doc/atas/poloserradoagrestepotiguar/1ªAtaPoloSerrasdoAgrestePotiguar.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                    </tr>
                  </tbody>
                </table>
    
            </div>
            
        </div>
    </section>

@endsection
    
