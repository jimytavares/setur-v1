@extends('layout.main')

@section('title', 'SETUR - Polo Costa das Dunas')

@section('content')
    
    <style>
        .card-img-top{height:250px !important;}
    </style>

    <section>
        <div class="container">
            
            <div class="row">
                <div class="col-4">
                    <div class="box-title-polo-left">
                        <h4>Polo Costa das Dunas</h4>
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
                    <h4><b>REGIÃO TURÍSTICA - COSTA DAS DUNAS</b></h4>
                    <p>Região turística composta por 17 municípios</p>
                    <a href="/polocostadasdunas"><small><i class="fa fa-angle-double-left" aria-hidden="true"></i> Voltar</small></a>
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
                              <td colspan="">Ata reunião extraordinária Polo Costa das Dunas</td>
                              <td><a href="{{ URL::asset('doc/atas/costadasdunas/Ata reunião extraordinária Polo Costa das Dunas.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">-</th>
                              <td colspan="">Criação do Polo turístico Costa das Dunas</td>
                              <td><a href="{{ URL::asset('doc/atas/costadasdunas/Criação do Polo turístico Costa das Dunas.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                            <tr>
                              <th scope="row">-</th>
                              <td colspan="">Regimento Interno Polo Costa das Dunas</td>
                              <td><a href="{{ URL::asset('doc/atas/costadasdunas/Regimento Interno Polo Costa das Dunas.pdf') }}" id="a-download" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF</a></td>
                            </tr>
                          </tbody>
                        </table>
    
            </div>
            
        </div>
    </section>

@endsection
    
