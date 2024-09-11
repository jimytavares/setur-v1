@extends('layout.main')

@section('title', 'SETUR - Fale Conosco')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Turismo no RN</h4>
                <p>
                    <a href="http://setur.rn.gov.br"><i class="fa fa-home" aria-hidden="true"></i> Página Inicial</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d-m-y') ?>
                </p>
                <hr>
            </div><br/>
            
            {{-- web/ --}}
            <div class="container hidden-xs">
                
                <div style="text-align:center;">
                    <img src="{{ URL::asset('img/mapaturismo2.png') }}" style="width:80%;"/>
                </div>
                
                <p style="color:gray;">*Clique no polo desejado para obter mais informações</p>
                
                <div class="row box-polo">
                    
                    <div class="col-3"> <a href="/poloagrestetrairi2"><button class="btn btn-primary btn-polo btn-polo-agreste">Agreste/Trairí</button></a> </div>
                    <div class="col-3"> <a href="/polocabugicentral"><button class="btn btn-primary btn-polo btn-polo-cabugi">Cabugi Central</button></a> </div>
                    <div class="col-3"> <a href="/polocostabranca"><button class="btn btn-primary btn-polo btn-polo-branca">Costa Branca</button></a> </div>
                    <div class="col-3"> <a href="/polocostadasdunas"><button class="btn btn-primary btn-polo btn-polo-dunas">Costa das Dunas</button></a> </div>
                    
                    <div class="col-3"> <a href="/polosertaoparaomar"><button class="btn btn-primary btn-polo btn-polo-sertao">Do Sertão Para o Mar</button></a> </div>
                    <div class="col-3"> <a href="/polopotengi"><button class="btn btn-primary btn-polo btn-polo-potengi">Potengi</button></a> </div>
                    <div class="col-3"> <a href="/polorotadofrio"><button class="btn btn-primary btn-polo btn-polo-frio">Rota do Frio</button></a> </div>
                    <div class="col-3"> <a href="/poloserido"><button class="btn btn-primary btn-polo btn-polo-serido">Seridó</button></a> </div>
                    
                    <div class="col-3"> <a href="/poloserrano"><button class="btn btn-primary btn-polo btn-polo-serrano">Serrano</button></a> </div>
                    <div class="col-3"> <a href="/poloserradoagrestepotiguar"><button class="btn btn-primary btn-polo btn-polo-serra">Serra do Agreste Potiguar</button></a> </div>
                    <div class="col-3"> <a href="/polovalemar"><button class="btn btn-primary btn-polo btn-polo-mar">Vale Mar</button></a> </div>
                    
                </div>
                
            </div>
            
            {{-- mb/ --}}
            <div class="container visible-xs">
                
                <img src="{{ URL::asset('img/mapaturismo.png') }}" style="width:100%;"/>
                
                <p style="color:gray;">*Clique no polo desejado para obter mais informações</p>
                
                <div class="row box-polo">
                    
                    <div class="col-12"> <a href="/poloagrestetrairi2"><button class="btn btn-primary btn-polo btn-polo-agreste">Agreste/Trairí</button></a> </div>
                    <div class="col-12"> <a href="/polocabugicentral"><button class="btn btn-primary btn-polo btn-polo-cabugi">Cabugi Central</button></a> </div>
                    <div class="col-12"> <a href="/polocostabranca"><button class="btn btn-primary btn-polo btn-polo-branca">Costa Branca</button></a> </div>
                    <div class="col-12"> <a href="/polocostadasdunas"><button class="btn btn-primary btn-polo btn-polo-dunas">Costa das Dunas</button></a> </div>
                    
                    <div class="col-12"> <a href="/polosertaoparaomar"><button class="btn btn-primary btn-polo btn-polo-sertao">Do Sertão Para o Mar</button></a> </div>
                    <div class="col-12"> <a href="/polopotengi"><button class="btn btn-primary btn-polo btn-polo-potengi">Potengi</button></a> </div>
                    <div class="col-12"> <a href="/polorotadofrio"><button class="btn btn-primary btn-polo btn-polo-frio">Rota do Frio</button></a> </div>
                    <div class="col-12"> <a href="/poloserido"><button class="btn btn-primary btn-polo btn-polo-serido">Seridó</button></a> </div>
                    
                    <div class="col-12"> <a href="/poloserrano"><button class="btn btn-primary btn-polo btn-polo-serrano">Serrano</button></a> </div>
                    <div class="col-12"> <a href="/poloserradoagrestepotiguar"><button class="btn btn-primary btn-polo btn-polo-serra">Serra do Agreste Potiguar</button></a> </div>
                    <div class="col-12"> <a href="/polovalemar"><button class="btn btn-primary btn-polo btn-polo-mar">Vale Mar</button></a> </div>
                    
                </div>
                
            </div>
            
        </div>
    </section>

@endsection
    
