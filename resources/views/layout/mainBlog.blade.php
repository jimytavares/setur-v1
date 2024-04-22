<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('img/logo-gov-png.png') }}" type="image/x-icon" />

    <title>@yield('title')</title>
    
    <!-- Projeto Desenvolvido e Monitorado
    Pelo Desenvolvedor: jimytavares@hotmail.com
    Dev Full Stack 
    -->
    
    {{-- Fonte do Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    
    <!-- Alerts JavaScript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    {{-- Font Awesome: Rede Social Icons --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- CSS da aplicação --}}
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('js/scripts.js') }}">
    <link href="{{ URL::asset('icon/assets/Pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <style>
        .nav-conectse{ margin-top:15px; }
        .nav-conectse a{ color:black; text-decoration: none; }
        .nav-conectse a:hover{ letter-spacing: 1px; }
        
        .image-container {
  position: relative;
  overflow: hidden;
}

.image-container img {
  width: 100%;
  height: auto;
  transition: transform 0.3s ease;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  opacity: 0;
  transition: opacity 0.3s ease;
  display: flex;
  justify-content: center;
  align-items: center;
}

.overlay p {
  text-align: center;
}

.image-container:hover img {
  transform: scale(1.1);
}

.image-container:hover .overlay {
  opacity: 1;
}

    </style>
    
</head>
<body>
    
    <div class="row" style="position: relative; top: 0; height:80px;">
        <div class="col-md-auto">
            <img src="{{URL::asset('img/logo-gov-png.png')}}" style="width:50px; margin-left:25px; margin-top:24px;"/>
        </div>
        <div class="col-1" style="">
            
            <div class="row" style="margin:0 auto; margin-top:31px; font-size:17px;">
                <div class="col-3"><i class="fab fa-instagram" style="color:#c13584;"></i></div>
                <div class="col-3"><i class="fab fa-facebook-square" style="color:#3b5998;"></i></div>
                <div class="col-3"><i class="fab fa-twitter" style="color:#1da1f2;"></i></div>
                <div class="col-3"><i class="fab fa-youtube" style="color:#ff0000;"></i></div>
            </div>
            
        </div>
        <div class="col-8" style="text-align:center;">
            <img src="{{URL::asset('img/conectse/conectese-black.png')}}" style="width:110px; margin-top:10px; margin-left:200px;"/>
<!--            <p style="letter-spacing:1px; margin-top:9px; font-size:22px;">SETUR - SECRETARIA Municipal de Turismo</p>-->
        </div>
        <div class="col-1">
            
            <div class="" style="padding-top:15px;">
                <button class="btn btn-primary btn-sm" onclick="myFunction()" style="margin-top:10px; color:white; background-color:#FDC830; border:none;"><i class="far fa-window-maximize"></i></button>
                <button class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" style="margin-top:10px; color:; background-color:; border:;"><i class="far fa-comment-dots"></i> Sugestões</button>
            </div>
        </div>
    </div>
    
    <!--<div class="row" style="margin-top:15px;">
        <div class="col-4"></div>
        <div class="col-4">
            <img src="img/conectse/conectese-black.png" style="width:100%;"/>
        </div>
        <div class="col-4"></div>
    </div>-->
    
<!--
    <div class="row" style="background-color:#f8f9f7; margin-top:5px; border: 1px solid #e6e6e6; text-align:center; font-weight:;">
        <div class="col-2 nav-conectse"><a href="#">IGR TRAIRI</a></div>
        <div class="col-2 nav-conectse"><a href="#">IGR VALE MAR</a></div>
        <div class="col-2 nav-conectse"><a href="#">IGR ROTA DO FRIO</a></div>
        <div class="col-2 nav-conectse"><a href="#">IGR COSTA BRANCA</a></div>
        <div class="col-2 nav-conectse"><a href="#">IGR COSTA DAS DUNAS</a></div>
        <div class="col-2 nav-conectse"><a href="#">IGR SERRAS DO AGRESTE</a></div>
        
        <div class="col-2 nav-conectse"><a href="#">POLO SERIDÓ</a></div>
        <div class="col-2 nav-conectse"><a href="#">POLO TURÍSTICO DO OESTE POTIGUAR</a></div>
        <div class="col-2 nav-conectse"><a href="#">REGIÃO DO SERTÃO PARA O MAR</a></div>
        <div class="col-3 nav-conectse"><a href="#">ASSOCIAÇÃO TURÍSTICA CABUGI CENTRAL</a></div>
        <div class="col-3 nav-conectse"><a href="#">ASSOCIAÇÃO TURÍSTICA CAMINHOS DO POTENGI</a></div>
    </div>
-->
    
    {{-- .Carousel --}}
    <div class="" style="background: linear-gradient(to right, #F37335, #FDC830); height:5px; margin-top:5px;">.</div>
    <div class="row no-gutters" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px; margin-top:2px;">
      <div class="col">
        <div class="image-container">
          <img src="{{URL::asset('img/conectse/RN-Espetacular_01.png')}}" alt="Imagem 1" />
          <div class="overlay">
            <p></p>
          </div>
        </div>
      </div>
      <div class="col" style="margin-left:-24px;">
        <div class="image-container">
          <img src="{{URL::asset('img/conectse/RN-Espetacular_02.png')}}" alt="Imagem 2">
          <div class="overlay">
            <p></p>
          </div>
        </div>
      </div>
      <div class="col" style="margin-left:-24px;">
        <div class="image-container">
          <img src="{{URL::asset('img/conectse/RN-Espetacular_03.png')}}" alt="Imagem 3">
          <div class="overlay">
            <p></p>
          </div>
        </div>
      </div>
    </div>
    <div class="" style="background: linear-gradient(to right, #FF4E50, #F9D423); height:5px; margin-top:2px;">.</div>
    
    @yield('content')
    
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Envie Sua Sugestão</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
          <div class="container">
              <form>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nome Completo:</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">E-Mail:</label>
                    <input type="email" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Sugestão:</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                  <button type="submit" class="btn btn-success">Enviar</button>
                </form>
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
    
    <footer>
        <div class="container-fluid footer01 hidden-xs">
            <div class="container row rowfooter">
                <div class="col">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <h4>Contatos</h4>
                    <p>
                        rnsetur@gmail.com <br/>
                        (84) 3232-2486 <br/> 
                        <i class="fab fa-whatsapp" style="font-size:20px;"></i> WhattsApp: (84) 3232-2496
                    </p> 
                </div>
                <div class="col">
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                    <h4>Horário de funcionamento</h4>
                    <p>Segunda à sexta Das 8 às 14 horas</p>
                </div>
            </div>
        </div>
        
        <div class="footer02">
            <small>Secretaria de Estado do Turismo do Rio Grande do Norte &copy; 2023 - <em>Jimy Dickson</em></small>
        </div>
    </footer>
   
    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
