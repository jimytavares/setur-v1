@extends('layout.main')

@section('title', 'SETUR - Notícias')

@section('content')

    <section>
        <div class="container">
            
            <div class="box-title">
                <h4>Notícias</h4>
                @include('ini.header-page')
            </div>
            
            <div class="row">
                {{-- left/noticias --}}
                <div class="col-9 div01-news">
                    
                    @foreach($noticias as $table_noticias)
                        <div class="row" style="margin-top:30px; width:98%;">
                            
                            <div class="div-noticias01" style="width:38%;">
                                <a href="/noticia/{{$table_noticias->id}}"><img src="{{ URL::asset('img/noticias/' . $table_noticias->fotos) }}" style="height:260px; border-radius:3px; height:230px;" class="card-img-top" alt="..."></a>
                            </div>
                            
                            <div class="div-noticias01" style="width:62%;">
                                <a href="/noticia/{{$table_noticias->id}}" style="text-decoration:none;"><h4 style="color:black; "> <b>{{$table_noticias->titulo}}</b></h4></a>
                                <p class="card-text" style="color:gray;">{{ $table_noticias->descricao }}</p>
                                <div class="row card-end">
                                  <div class="col"><a href="/noticia/{{$table_noticias->id}}"><button class="btn btn-primary btn-sm" style="background-color:#e65c00; border:none; border-radius:0px;">Ler Notícia</button></a></div>
                                  <div class="col align-right"><i class="fas fa-calendar"></i> {{date('d/m/Y', strtotime($table_noticias->datta))}} | SETUR</div>
                                </div>
                            </div>
                            
                        </div>
                    <hr style="width:97%;">
                    @endforeach
                    
                    <nav aria-label="Page navigation example" style="margin:0 auto;">
                      <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="http://setur.rn.gov.br/noticias?page=1">1</a></li>
                        <li class="page-item"><a class="page-link" href="http://setur.rn.gov.br/noticias?page=2">2</a></li>
                        <li class="page-item"><a class="page-link" href="http://setur.rn.gov.br/noticias?page=3">3</a></li>
                        <li class="page-item"><a class="page-link" href="http://setur.rn.gov.br/noticias?page=4">4</a></li>
                        <li class="page-item"><a class="page-link" href="http://setur.rn.gov.br/noticias?page=5">5</a></li>
                        <li class="page-item"><a class="page-link" href="http://setur.rn.gov.br/noticias?page=6">6</a></li>
                        <li class="page-item"><a class="page-link" href="http://setur.rn.gov.br/noticias?page=7">7</a></li>
                      </ul>
                    </nav>
                    
                </div>
                {{-- right/publis --}}
                <div class="col-3 hidden-xs">
                    
                    <p style="color:#e65c00;font-size:13px; margin-top:20px;">Redes Sociais</p>
                    <hr>
                    <a href="https://www.facebook.com/Seturrn/" target="_blank"><button type="button" class="btn btn-primary" style="width:100%; border-radius:0px; background-color:#183c67; border:none;"><i class="fab fa-facebook-square"></i> Facebook</button></a>
                    <!--<a href="https://br.linkedin.com/company/emprotur" target="_blank"><button type="button" class="btn btn-primary" style="width:100%; margin-top:5px; border-radius:0px; backgroud-color:#28a7c1; border:none;"><i class="fab fa-linkedin" style="font-size:18px;"></i> Linkedin</button></a>-->
                    <a href="https://www.instagram.com/rnsetur/" target="_blank"><button type="button" class="btn btn-primary" style="width:100%; margin-top:5px; border-radius:0px; background-image: linear-gradient(to right, #f9d302,  #f90704, #a046b5, #813db3); border:none;"><i class="fab fa-instagram"></i> Instagram</button></a>
                    <a href="https://www.youtube.com/channel/UCA-8x_70RMDrAbC0cMQBjpA" target="_blank"><button type="button" class="btn btn-primary" style="width:100%; margin-top:5px; border-radius:0px; background-image: linear-gradient(to right, #9a266c, red); border:none;"><i class="fab fa-youtube"></i> Youtube</button></a>

                    <p style="color:#e65c00;font-size:13px; margin-top:30px;">Previsão do tempo</p>
                    <hr>
                    <div id="cont_c6b7770e25f1631d31f6ef8e4ad83824"><script type="text/javascript" async src="https://www.tempo.com/wid_loader/c6b7770e25f1631d31f6ef8e4ad83824"></script></div>
                    
                    <p style="color:#e65c00;font-size:13px; margin-top:30px;">Galeria - Rio Grande do Norte</p>
                    <hr>
                    <img src="{{URL::asset('img/admin/bg-home.jpg')}}" style="width:100%; border-radius:5px; opacity:0.9;"/>
                    <img src="{{URL::asset('img/polos/polocostadasdunas-extremoz.jpg')}}" style="width:100%; border-radius:5px; opacity:0.9; margin-top:10px;"/>
                </div>
            </div>
            
        </div>
    </section>

@endsection
    
