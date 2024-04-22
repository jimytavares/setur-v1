@extends('layout.mainBlog')

@section('title', 'SETUR / CONECTE-SE')

@section('content')

<style>
.blockquote-custom {
  position: relative;
  font-size: 1.1rem;
    margin-top:40px;
    box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
}

.blockquote-custom-icon {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -25px;
  left: 50px;
}
    
.blockquote-custom-icon-link {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -25px;
  left: 110px;
}
    
.blockquote-custom-icon-coment {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -25px;
  left: 170px;
}
    
    .btn-nav-conectse{ background-color:#f2f5fa !important; border-radius:0px !important; margin-left:5px !important; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px !important; color: #8c8f94 !important; font-size:14px !important; margin:0 auto !important; }
    .nav-pills .nav-link.active{ background-color:#FDC830 !important; color:black !important; transition: background-color 0.3s ease, color 0.3s ease !important;  }

    .box-left-blog{ width:20%; text-align: center; }
    .new-box-left-blog{ display:none; }
    .box-right-blog{ width:80%; }
    .new-box-right-blog{ width:100%; }
</style>

    <section>
        
        <div class="container-fluid" style="width:85%; margin:0 auto; background-color:;">
            
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style=" margin-left:30px;">
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-igrtrairi" type="button" role="tab" aria-controls="pills-igrtrairi" aria-selected="true">IGR TRAIRI</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-igrtrairi" type="button" role="tab" aria-controls="pills-igrtrairi" aria-selected="false">IGR VALE MAR</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-igrrotadofrio" type="button" role="tab" aria-controls="pills-igrrotadofrio" aria-selected="false">IGR ROTA DO FRIO</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-igrcostabranca" type="button" role="tab" aria-controls="pills-igrcostabranca" aria-selected="false">IGR COSTA BRANCA</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-igrcostadasdunas" type="button" role="tab" aria-controls="pills-igrcostadasdunas" aria-selected="false">IGR COSTA DAS DUNAS</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-igrserrasdoagreste" type="button" role="tab" aria-controls="pills-igrserrasdoagreste" aria-selected="false">IGR SERRAS DO AGRESTE</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-poloserido" type="button" role="tab" aria-controls="pills-poloserido" aria-selected="false">POLO SERIDO</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-poloturisticodooestepotiguar" type="button" role="tab" aria-controls="pills-poloturisticodooestepotiguar" aria-selected="false">POLO TURÌSTICO DO OESTE POTIGUAR</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-regiaodosertaoparaomar" type="button" role="tab" aria-controls="pills-regiaodosertaoparaomar" aria-selected="false">REGIAO DO SERTAO PARA O MAR</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="btn-nav-conectse nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-associacaoturisticacabugi" type="button" role="tab" aria-controls="pills-associacaoturisticacabugi" aria-selected="false">ASSOCIAÇÂO TURÌSTIOCA CABUGI</button>
                    </li>
                    <li class="nav-item" role="presentation">
                    <button class="btn-nav-conectse nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-associacaoturisticapotengi" type="button" role="tab" aria-controls="pills-associacaoturisticapotengi" aria-selected="false">ASSOCIAÇÂO TURÌSTICA CAMIONHOS DO POTENGI</button>
                    </li>
                </ul>
        </div>

        <div class="container" style="margin-top:20px;">
                <div class="row">

                    {{-- .left --}}
                    <div class="box-left-blog" id="alterLeftBlog">

                        <img src="{{URL::asset('img/conectse/logosetur-png.png')}}" class="mx-auto" style="border-radius:10px; width:100%; opacity:0.8; margin-top:20px; margin:0 auto;"/>
                        <hr>

                        @foreach($slc_publi as $dados)
                            <div class="" style="margin-top:20px;">
                                <h5>{{$dados->titulo}}</h5>
                                <p style="text-align: justify;">{{$dados->descricao}}</p>
                            </div>
                            
                        <div class="" style="margin:0 auto;">
                            <img src="{{URL::asset('img/conectse/' . $dados->imagem )}}" style="border-radius:5px; opacity:0.9; width:100%;"/>
                            @if($dados->link == '')
                                
                            @else
                                <a href="{{$dados->link}}" target="_blank"><button class="btn btn-warning btn-sm" style="width:60%; margin-top:15px; border-radius:10px; color:white;">Conhecer</button></a>
                            @endif
                            <hr>
                        </div>
                        @endforeach

                    </div>

                    {{-- .right --}}
                    <div class="box-right-blog" id="alterRightBlog">

                        <div class="tab-content" id="pills-tabContent" style="width:90%; margin:0 auto">
                          <div class="tab-pane fade show active" id="pills-igrtrairi" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                          
                              @foreach($slc_igrtrairi as $dados)
                                  @if($dados->status == 'publicado')
                                    <blockquote class="blockquote blockquote-custom bg-white p-5 rounded">
                                        <a href="{{ route('like', $dados->id) }}"><div class="blockquote-custom-icon bg-info shadow-sm text-white" style="background-color:#99b670;"><i class="far fa-heart">&nbsp;{{$dados->curtidas}}</i></div></a>
                                        <a href="{{ route('like', $dados->id) }}"><div class="blockquote-custom-icon-link bg-info shadow-sm text-white"><i class="fas fa-link"></i></div></a>
                                        <a href="{{ route('like', $dados->id) }}"><div class="blockquote-custom-icon-coment bg-info shadow-sm text-white"><i class="far fa-comment-dots"></i></div></a>
                                        <img src="{{URL::asset('img/conectse/' . $dados->imagem)}}" style="width:100%; border-radius:5px;"/>
                                        <p class="mb-0 mt-4 font-italic">{{$dados->descricao}}</p>
                                        <footer class="blockquote-footer pt-4 mt-4 border-top">
                                            <cite title="Source Title">{{$dados->autor}}</cite>
                                        </footer>
                                    </blockquote>
                                @endif
                            @endforeach          
                              
                          </div>
                          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                          
                              @foreach($slc_igrvalemar as $dados)
                                  @if($dados->status == 'publicado')
                                    <blockquote class="blockquote blockquote-custom bg-white p-5 rounded">
                                        <a href="{{ route('like', $dados->id) }}"><div class="blockquote-custom-icon bg-info shadow-sm text-white"><i class="far fa-heart">&nbsp;{{$dados->curtidas}}</i></div></a>
                                        <a href="{{ route('like', $dados->id) }}"><div class="blockquote-custom-icon-link bg-info shadow-sm text-white"><i class="fas fa-link"></i></div></a>
                                        <img src="{{URL::asset('img/conectse/' . $dados->imagem)}}" style="width:100%; border-radius:5px;"/>
                                        <p class="mb-0 mt-4 font-italic">{{$dados->descricao}}</p>
                                        <footer class="blockquote-footer pt-4 mt-4 border-top">
                                            <cite title="Source Title">{{$dados->autor}}</cite>
                                        </footer>
                                    </blockquote>
                                @endif
                            @endforeach     
                              
                          </div>
                          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                          <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                        </div>

                    </div>
                </div>
        </div>
            
    </section>

<script>
function myFunction() {
    var elementLeft = document.getElementById("alterLeftBlog");
    var elementRight = document.getElementById("alterRightBlog");
    
    if (elementLeft && elementRight) {
        if (elementLeft.classList.contains("box-left-blog")) {
            // Se a classe box-left-blog estiver presente, alterne para new-box-left-blog
            elementLeft.classList.remove("box-left-blog");
            elementLeft.classList.add("new-box-left-blog");
        } else {
            // Caso contrário, alterne para box-left-blog
            elementLeft.classList.remove("new-box-left-blog");
            elementLeft.classList.add("box-left-blog");
        }
        
        if (elementRight.classList.contains("box-right-blog")) {
            // Se a classe box-right-blog estiver presente, alterne para new-box-right-blog
            elementRight.classList.remove("box-right-blog");
            elementRight.classList.add("new-box-right-blog");
        } else {
            // Caso contrário, alterne para box-right-blog
            elementRight.classList.remove("new-box-right-blog");
            elementRight.classList.add("box-right-blog");
        }
    } else {
        console.error("Um ou ambos os elementos não foram encontrados.");
    }
}

</script>

@endsection
    
