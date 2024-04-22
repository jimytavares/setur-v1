
@extends('layout.main')

@section('title', 'SETUR - Buscar Notícia' )

@section('content')

    <div class="container" style="margin-top:110px;">
        <div class="" style="width:80%; margin:0 auto;">
            
                <div class="box-title">
                    <h4>Notícias</h4>
                    @include('ini.header-page')
                    <div class="" style="background: linear-gradient(to right, #7da44e, #f49819); height:3px;">
                        .
                    </div>
                    <div class="alert alert-primary" role="alert" style="margin-top:10px;">
                      Exibição de todas as notícias, através da sua busca por: <b>{{$search_noticia}}</b>
                    </div>
                </div>
                
                @foreach($noticias as $tb_noticia)
                    <div class="row" style="margin-top:30px; width:98%;">
                            
                            <div class="div-noticias01" style="width:38%;">
                                <a href="/noticia/{{$tb_noticia->id}}"><img src="{{ URL::asset('img/noticias/' . $tb_noticia->fotos) }}" style="height:260px; border-radius:3px; height:230px;" class="card-img-top" alt="..."></a>
                            </div>
                            
                            <div class="div-noticias01" style="width:62%;">
                                <a href="/noticia/{{$tb_noticia->id}}" style="text-decoration:none;"><h4 style="color:black; "> <b>{{$tb_noticia->titulo}}</b></h4></a>
                                <p class="card-text" style="color:gray;">{{ $tb_noticia->descricao }}</p>
                                <div class="row card-end">
                                  <div class="col"><a href="/noticia/{{$tb_noticia->id}}"><button class="btn btn-primary btn-sm" style="background-color:#e65c00; border:none; border-radius:0px;">Ler Notícia</button></a></div>
                                  <div class="col align-right"><i class="fas fa-calendar"></i> {{date('d/m/Y', strtotime($tb_noticia->datta))}} | SETUR</div>
                                </div>
                            </div>
                            
                        </div>
                    <hr style="width:97%;">
                @endforeach

        </div>
    </div>

@endsection
    
