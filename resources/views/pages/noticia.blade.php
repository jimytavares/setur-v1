
@extends('layout.main')

@section('title', 'SETUR - Notícia')

@section('content')

    <section>
        <div class="container">
            
            <div class="row" style="margin-top:100px;">
                
                {{-- left/new.principal --}}
                <div class="div01-news" style="width:70%;"> 
                    <h3 style="text-align:;">{{$tb_noticias->titulo}}</h3>
                    <p style="color:gray;">{{$tb_noticias->descricao}}</p>
                    <div class="row">
                        <div class="col-8">
                            <p style="color:gray; padding-top:3px;">
                                <a href="/noticias"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Voltar Página</a> | <b>SETUR</b> <i class="far fa-calendar-alt"></i> <?php echo date('d/m/Y') ?>
                            </p>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-link btn-sm hidden-xs" data-bs-toggle="modal" data-bs-target="#newscompart">+ Compartilhar</button>
                            <small style="font-size:19px;">
                                <a href="https://www.instagram.com/rnsetur/" target="_blank"><i class="fa fa-instagram" aria-hidden="true" style="color:gray;"></i></a>
                                <a href="https://www.facebook.com/Seturrn/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true" style="color:gray;"></i></a>
                                <a href="https://www.youtube.com/channel/UCA-8x_70RMDrAbC0cMQBjpA" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true" style="color:gray;"></i></a>
                            </small>
                        </div>
                    </div>
                    <img src="{{ URL::asset('img/noticias/' . $tb_noticias->fotos) }}" style="width:100%; margin-top:10px;"/>
                    <p style="text-align: justify;">{!! $tb_noticias->texto !!}</p>
                </div>
                
                {{-- right/ultimas.noticias --}}
                <div class="div02-news hidden-xs" style="width:30%;">
                    <div class="" style="box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px; margin-top:20px;;">
                        <div class="" style="width:95%; margin:0 auto;">
                            <h4 style="padding-top:15px;">Últimas Notícias</h4>
                            @foreach($tb_newright->sortByDesc('datta')->take(4) as $tb_news)
                                <div class="row" style="margin-top:15px;">
                                    <div class="col-6">
                                        <img src="{{ URL::asset('img/noticias/' . $tb_news->fotos) }}" style="width:100%; margin-top:10px;"/>
                                    </div>
                                    <div class="col-6">
                                        <a href="/noticia/{{$tb_news->id}}" style="text-decoration: none;"><p style="color:black; font-size:14px;">{{$tb_news->titulo}}</p></a>
                                        <small style="color:gray;">{{date('d/m/Y', strtotime($tb_news->datta))}}</small>
                                    </div>
                                </div>
                            @endforeach
                            <div class="" style="margin-top:10px;">
                                .
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </section>

<script>
function copyText() {
  /* Encontra o texto a ser armazenado */
  var copyText = document.getElementById("input_url");

  /* Seleciona o texto do input */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /*Solução para dispositivos móveis*/

  /* Copia o texto */
  document.execCommand("copy");
}
</script>

<!-- Modal -->
<div class="modal fade" id="newscompart" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Compartilhar Notícia!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
            <!-- O campo a ser copiado -->
            <input type="text" class="form-control dropdown-toggle" id="input_url" value="{{Request::url()}}" style="border:none; color:white !important;"/>

            <!-- Botão -->
          <div class="" style="text-align:center;">
            <span onclick="copyText()" >
              <button class="btn btn-success" type="button"> <i class="dripicons-copy">Copiar Notícia</i></button>
            </span>
          </div><br/>
          
      </div>
      <div class="modal-footer">
        <small style="color:gray;">*Clique no botão acima "copiar" e envie a notícia através das redes sociais ou whattsapp.</small>
      </div>
    </div>
  </div>
</div>

@endsection
    
