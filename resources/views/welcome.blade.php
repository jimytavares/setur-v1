@extends('layout.main')

@section('title', 'SETUR - RN')

@section('content')

    {{-- /carousel.imgs --}}
    <div id="carouselExampleFade" class="carousel carousel-index slide carousel-fade" data-bs-ride="carousel" style="margin-top:-68px; z-index: -1;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ URL::asset('img/serradolima3.jpg') }}" class="d-block w-100 carousel-mb" alt="..." style="height:800px">
        </div>
        <div class="carousel-item">
          <img src="{{ URL::asset('img/4.png') }}" class="d-block w-100 carousel-mb" alt="..." style="height:800px">
        </div>
        <div class="carousel-item">
          <img src="{{ URL::asset('img/maracajau3.jpg') }}" class="d-block w-100 carousel-mb" alt="..." style="height:800px">
        </div>
        <div class="carousel-item">
          <img src="{{ URL::asset('img/6.png') }}" class="d-block w-100 carousel-mb" alt="..." style="height:800px">
        </div>
        <div class="carousel-item">
          <img src="{{ URL::asset('img/7.png') }}" class="d-block w-100 carousel-mb" alt="..." style="height:800px">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    {{-- /noticias --}}
    <section class="py-5">
        <div class="container">
            
            <div class="news-title">
                <div class="row">
                    <div class="col-9">
                        <h4 style="font-size:px !important;"><i class="fas fa-angle-double-right"></i>Últimas Notícias</h4>
                    </div>
                    <div class="col-3 hidden-xs" style="padding-top:5px; text-align:right;">
                        <a href="/noticias" style="text-decoration:none;"><button class="btn btn-primary btn-sm">+ Toda as Notícias</button></a> <small>- SETUR <i class="fas fa-calendar"></i> <?php echo date('d.m.y') ?></small>
                    </div>
                </div>
                <hr>
            </div>
            
            <div class="card-group">
                @foreach($tb_noticias->sortByDesc('datta')->take(3) as $table_noticias)
                    <div class="card" style="margin-left:5px;">
                        <a href="/noticia/{{$table_noticias->id}}"><button class="btn btn-primary btn-sm" style="margin-top:15px; position:absolute; background-color:#5b66e5; border:none; border-radius:0px; width:90px; opacity:0.9;"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Ler mais</button></a>
                        <img src="{{ URL::asset('img/noticias/' . $table_noticias->fotos) }}" style="height:260px;" class="card-img-top" alt="...">
                        <div class="card-body">
                          <a href="/noticia/{{$table_noticias->id}}" style="text-decoration:none;"><p style="color:#1a6bb2;"><b>{{$table_noticias->titulo}}</b></p></a>
                          <p class="card-text">{{ $table_noticias->descricao }}</p>
                          <hr>
                          <div class="row card-end">
                              <div class="col"><i class="fas fa-calendar"></i> {{date('d/m/Y', strtotime($table_noticias->datta))}}</div>
                              <div class="col align-right"><a href="/noticia/{{$table_noticias->id}}">Ler Notícia</a> | SETUR</div>
                          </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- /banner --}}
    <section class="sec-banner">
        <div class="container">
            <a href="http://setur.rn.gov.br/turismonorn"><img src="{{ URL::asset('img/Banner_sitesetur.gif') }}" style="width:100%;" /></a>
        </div>
    </section>
    
    {{-- /logo.web --}}
    <section class="hidden-xs" style="margin-top:80px;">
        <div class="container-fluid box-logos" id="box-logos2">
            
            <div class="row line-logos">
                <div class="col-2 edit-logo-visite"> <a href="https://visiteriograndedonorte.com.br/" target="_blank"><img src="{{ URL::asset('img/logo/logo-visite-white2.png') }}" /></a> </div>
                <div class="col-2 edit-logo-gov"> <a href="#"><img src="{{ URL::asset('img/logo/logo-gov-white.png') }}" /> </a> </div>
                <div class="col-2 edit-logo-cad"> <a href="https://cadastur.turismo.gov.br/hotsite/#!/public/capa/entrar" target="_blank"><img src="{{ URL::asset('img/logo/logo-cadastur-white.png') }}" /> </a> </div>
                <div class="col-2 edit-logo-emprotur"> <a href="http://emprotur.setur.rn.gov.br/" target="_blank"><img src="{{ URL::asset('img/logo/logo-emprotur-white.png') }}" /> </a> </div>
                <div class="col-2 edit-logo-cnn"> <a href="https://www.centrodeconvencoesdenatal.rn.gov.br/" target="_blank"><img src="{{ URL::asset('img/logo/logo-ccn.png') }}" /> </a> </div>
                <div class="col-2 edit-logo-cnn" style="padding-top: 0px !important;"> <a href="#"><img src="{{ URL::asset('img/logo/logo-bug-white.png') }}" style="width:165px !important; margin-left:40px;" /> </a> </div>
            </div>
            
        </div>
    </section>
    {{-- /logo.mb --}}
    <section class="visible-xs" style="margin-top:80px;">
        <div class="container-fluid box-logos">
            
            <div class="container row line-logos" style="margin-left:-20px;">
                <div class="col-4"> <img src="{{ URL::asset('img/logo/logo-visite-white2.png') }}" style="width:130px; margin-left:-18px;"/> </div>
                <div class="col-4"> <img src="{{ URL::asset('img/logo/logo-gov-white.png') }}" style="width:100px; margin-top:10px;"/> </div>
                <div class="col-4"> <img src="{{ URL::asset('img/logo/logo-cadastur-white.png') }}" style="width:110px; margin-top:20px;"/> </div>
                <div class="col-4"> <img src="{{ URL::asset('img/logo/logo-emprotur-white.png') }}" style="width:100px;"/> </div>
                <div class="col-4"> <img src="{{ URL::asset('img/logo/logo-ccn.png') }}" style="width:130px; margin-top:10px;"/> </div>
                <div class="col-4" style="padding-top: 0px !important;"> <img src="{{ URL::asset('img/logo/logo-bug-white.png') }}" style="width:110px !important; margin-left:20px;" /> </div>
            </div>
            
        </div>
    </section>
    
    {{-- /social.media --}}
    <section class="py-4">
        <div class="container">
            
            <div class="row">
                
                {{-- /left --}}
                <div class="box-left-social">
                    <div class="box-title2">
                        <h4><i class="fas fa-angle-double-right" style="color:gray;"></i> Redes Sociais</h4>
                        <hr>
                    </div>
                    
                    <div class="row box-social">
                        <div class="circle-social"> 
                            <a href="https://www.instagram.com/rnsetur/" target="_blank"><button class="btn btn-light btn-social box-insta"><i class="fab fa-instagram"></i></button></a> 
                        </div>
                        <div class="circle-social"> 
                            <a href="https://www.facebook.com/Seturrn/" target="_blank"><button class="btn btn-light btn-social box-face"><i class="fab fa-facebook"></i></button></a> 
                        </div>
                        <div class="circle-social"> 
                            <a href="https://www.youtube.com/channel/UCA-8x_70RMDrAbC0cMQBjpA" target="_blank"><button class="btn btn-light btn-social box-youtube"><i class="fab fa-youtube"></i></button></a> 
                        </div>
                        <div class="circle-social"> 
                            <a href="https://twitter.com/cadastur_rn" target="_blank"><button class="btn btn-light btn-social box-twitter"><i class="fab fa-twitter"></i></button></a> 
                        </div>
                    </div>
                    
                    <div class="box-social-map">
                        <div class="box-title2">
                            <h4><i class="fas fa-angle-double-right" style="color:gray;"></i> Endereço</h4>
                            <hr>
                        </div>
                        <p>Centro de Convenções Ponta Negra - Via
                        Costeira Sen. Dinarte Medeiros Mariz, S/n
                        - Ponta Negra, Natal/RN -
                        CEP 59.090-002
                        CNPJ: 01.278.765/0001-50
                        </p>
                    </div>
                    
                    <div class="row box-social-button">
                        <div class="col">
                            <a href="https://www.google.com/maps?ll=-5.861693,-35.182339&z=12&t=m&hl=pt-BR&gl=BR&mapclient=embed&cid=13796984422289991221" target="_blank"><button class="btn btn-success btn-map"><i class="fa fa-map-marker" aria-hidden="true"></i> Google Maps</button></a>
                        </div>
                        <div class="col">
                            <a href="/faleconosco"><button class="btn btn-warning btn-map btn-map2"><i class="fa fa-comments" aria-hidden="true"></i> Fale Conosco</button></a>
                        </div>
                    </div>
                </div>
                
                {{-- /right --}}
                <div class="box-right-social">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63507.340991907135!2d-35.225679208130295!3d-5.826154669234382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ff3d31c54f9f%3A0xbf78bc3b86316635!2sSETUR%20-%20Secretaria%20de%20Turismo!5e0!3m2!1spt-BR!2sbr!4v1664289432868!5m2!1spt-BR!2sbr" width="100%" height="340" style="border:0; margin-top:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                
            </div>
            
        </div>
    </section>

@endsection
