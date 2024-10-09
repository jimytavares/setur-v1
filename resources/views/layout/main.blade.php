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
    
    <script>
        $(document).ready(function(){

          $("#showsearch").click(function(){
            $("#inputbusca").fadeToggle(1000);
          });

          $("#btan").click(function(){
            $("#inputanime").fadeToggle(1000);
          });

          $("#btas").click(function(){
            $("#inputassistindo").fadeToggle(1000);
          });

          $("#showrank").click(function(){
            $("#btrankf").fadeToggle(1000);
            $("#btrankl").fadeToggle(1000);
          });

        });
        
        // Back to top button
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.back-to-top').fadeIn('slow');
            } else {
                $('.back-to-top').fadeOut('slow');
            }
        });
        $('.back-to-top').click(function () {
            $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
            return false;
        });
        
        $(window).scroll(function () {
            if ($(this).scrollTop() > 40) {
                $('.navbar').addClass('sticky-top');
            } else {
                $('.navbar').removeClass('sticky-top');
            }
        });
        
        $(document).ready(function(){
          $("#leilbi").click(function(){
            $("#box-logos2").removeClass("box-logos");
            $("#div-serv2").removeClass("box-sv");
            $("#div-serv3").removeClass("box-sv");
            $("#rmvbg-ccn").css("background-color", "");
            $("#rmvbg-footer").css("background-color", "");
            $("#rmvbg-footerpg").css("background-image", "");
            $("#rmvbg-notice").css("background-color", "");
            $("#rmvbg-nav").css("background-image", "");
            $("#rmv-nta").css("color", "");
            $("button").removeClass("transp-group");
            $("button").removeClass("hvr-shutter-in-horizontal");
            $("#rmvimg-index").removeClass("banner-main");
          });
        });

        $(document).ready(function(){
          $("#leilbi").click(function(){
            $("#rmv-alertstransp").remove();
            $("#rmv-alertspg").remove();
            $("#rmv-gifindex").remove();
          });
        });

        $(document).ready(function(){
          $("#leilbi").click(function(){
            $("p").addClass("leilbi2");
            $("h1").addClass("leilbi2");
            $("body").addClass("leilbi2");
            $("a").addClass("leilbi2");
            $("li").addClass("leilbi2");
            $("td").addClass("leilbi2");
            $("tr").addClass("leilbi2");
            $("small").addClass("leilbi2");
            $("i").addClass("leilbi2");
            $("hr").addClass("leilbi2");
            $("img").addClass("img-pretobranco");
            $("button").addClass("leilbi-button");
            $("#rmvimg-index").addClass("banner-mainlbi");
          });
        });
        </script>
    
    <script>
    tamanho = 16;
    function diminuir(){
      tamanho--;
      document.body.style.fontSize=tamanho+"px";
    }
    function aumentar(){
      tamanho++;
      document.body.style.fontSize=tamanho+"px";
    }
    </script>
    
    <style>
    .sticky-top{height:100px !important;}
    
    .leilbi2{color:yellow !important; background-color:black !important;}
    .leilbi4{color:white !important; background-color:black !important;}

    .leilbi-button{background-color:darkgray !important; color:yellow !important; border:none; border-radius:0px;}
    .leilbi-button-white{background-color:darkgray !important; color:white !important; border:none; border-radius:0px;}

    .img-pretobranco{
        -webkit-filter: grayscale(100%);
        filter: grayscale(100%);
        filter: gray; /* IE */
    }
    
    #box-logos2{background-color: black; height:200px; }
</style>
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W2Q9KKLP5Q"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-W2Q9KKLP5Q');
    </script>
    
</head>
<body>
    
  <?php header("Refresh:"); ?>
   
    <div class="" style="height:7px;">
        .
    </div>
    
    <nav class="navbar navbar-light bg-light nav-edit hidden-xs" style="background-color: !important; z-index:2; box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.06) 0px 1px 2px 0px;">
      <div class="container-fluid">
       
        {{-- /RedeSociais.Logo --}}
        <div class="row">
            <div class="col">
                <a href="http://setur.rn.gov.br/"><img src="{{ URL::asset('img/logosetur-png.png') }}" style="width:110px; margin-left:; margin-top: 2px;"/></a>
            </div>
            <div class="col">
                <button class="navbar-toggler" style="border:none; margin-top:20px;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                  <i class="fa fa-bars" aria-hidden="true"></i> MENU
                </button>
            </div>
        </div>
        
        {{-- /Title.IconMenu --}}
        <div class="row">
            <div class="col-md-auto nav-title">
                <h4>Secretaria de Estado do Turismo do Rio Grande do Norte</h4>
            </div>
            <div class="col-md-auto">
                <button class="navbar-toggler" style="border:none; margin-top:14px;" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
            </div>
            <div class="col-md-auto">
                <div class="dropdown dropstart">
                  <button class="btn btn-light dropdown-toggle btn-access" type="button" data-bs-toggle="dropdown" aria-expanded="false"  style="margin-top:14px;">
                    <i class="fa fa-universal-access" aria-hidden="true"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <!--<li><a class="dropdown-item" href="#"><i class="fa fa-info" aria-hidden="true" style="color:#2eb8b8;"></i> Dica</a></li>
                    <li><hr class="dropdown-divider"></li>-->
                    <li><a class="dropdown-item" id="leilbi"><i class="fas fa-adjust" style="color:gray; font-size:14px;"></i> Alto Contraste</a></li>
                    <li><a class="dropdown-item" onclick="aumentar()"><i class="fa fa-low-vision" aria-hidden="true" style="color:blue;"></i> Fonte: Aumentar</a></li>
                    <li><a class="dropdown-item" onclick="diminuir()"><i class="fa fa-low-vision" aria-hidden="true" style="color:blue;"></i> Fonte: Diminuir</a></li>
                  </ul>
                </div>
            </div>
        </div>
        
        {{-- /Menu --}}
        <div class="offcanvas offcanvas-end text-bg-light" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
             
                <div class="offcanvas-header">
                    <img src="{{ URL::asset('img/logosetur-png.png') }}" style="width:145px; height:90px; margin-left:110px;"/>
                    <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <small style="font-size:19px; text-align:center;">
                    <a href="https://www.instagram.com/rnsetur/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/Seturrn/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="https://www.youtube.com/channel/UCA-8x_70RMDrAbC0cMQBjpA" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                </small>
                
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                 
                  <li class="nav-item" style="border-left: 3px solid #f5921a;">
                    <a class="nav-link active" aria-current="page" href="http://setur.rn.gov.br/"><i class="pe-7s-home icon-menu"></i> &nbsp;&nbsp;Início</a>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid green;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-culture icon-menu"></i> &nbsp;&nbsp;A Setur
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="/institucional"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Institucional</a></li>
                      <li><a class="dropdown-item" href="{{ route('editais') }}"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Editais</a></li>
                      <li><a class="dropdown-item" href="/gestao"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;A Gestão</a></li>
                      <li><a class="dropdown-item" href="/setoresedepartamentos"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Setores e Departamentos</a></li>
                      <li><a class="dropdown-item" href="http://emprotur.setur.rn.gov.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;EMPROTUR</a></li>
                      <li><a class="dropdown-item" href="http://www.centrodeconvencoesdenatal.rn.gov.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Centro de Convenções de Natal</a></li>
                      <!--<li><a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Calendario</a></li>-->
                      <li><a class="dropdown-item" href="/faleconosco"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Fale Conosco</a></li>
                      <li><a class="dropdown-item" href="/conetur"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;CONETUR</a></li>
                    </ul>
                  </li>
                    
                    <li class="nav-item" style="border-left: 3px solid #f5921a;">
                    <a class="nav-link" href="https://pncp.gov.br/app/pca/08241739000105/2025/6" target="_blank"><i class="pe-7s-home icon-menu"></i> &nbsp;&nbsp;PCA 2025</a>
                  </li>
                    
                    <li class="nav-item dropdown" style="border-left: 3px solid green;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-users icon-menu"></i> &nbsp;&nbsp;Atas Setur
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="{{ route('atasConetur') }}"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Atas CONETUR </a></li>
                      <li><a class="dropdown-item" href="{{ route('atasRegioes') }}"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Atas REGIÕES</a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item" style="border-left: 3px solid #ffff00;">
                    <a class="nav-link" href="/noticias"><i class="pe-7s-news-paper icon-menu"></i> &nbsp; Notícias</a>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid #1aa3ff;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-map-2 icon-menu"></i> &nbsp;&nbsp; Rio Grande do Norte
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Sobre o Estado</a></li>
                      <li><a class="dropdown-item" href="http://www.visiteriograndedonorte.com.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Visite Rio Grande do Norte</a></li>
                      <li><a class="dropdown-item" href="/turismonorn"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Turismo no RN</a></li>
                      <li><a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Fotos e Vídeos</a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid #f5921a;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-settings icon-menu"></i> &nbsp;&nbsp;Serviços
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="https://cadastur.turismo.gov.br/hotsite/#!/public/capa/entrar" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Cadastur</a></li>
                      <li><a class="dropdown-item" href="{{ route('bugueiroCredenciados') }}"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Buggy Turismo</a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid green;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-note2 icon-menu"></i> &nbsp;&nbsp; Atividades
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="/capacitacoes"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Capacitação</a></li>
                      <li><a class="dropdown-item" href="/turismocidadao"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Turismo Cidadão</a></li>
                      <li><a class="dropdown-item" href="/inspire-se"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Inspire-se</a></li>
                      <!--<li><a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Obras</a></li>-->
                    </ul>
                  </li>
                  
                    <li class="nav-item" style="border-left: 3px solid #ffff00;">
                      <a class="nav-link" href="{{ route('lgpd') }}"><i class="pe-7s-airplay icon-menu"></i> &nbsp; LGPD</a>
                  </li>
                  <li class="nav-item" style="border-left: 3px solid #ffff00;">
                      <a class="nav-link" href="/planoseprojetos"><i class="pe-7s-airplay icon-menu"></i> &nbsp; Planos e Projetos</a>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid #1aa3ff;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-global icon-menu"></i> &nbsp; Pesquisas
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="https://sirio.tur.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Sírio</a></li>
                      <li><a class="dropdown-item" href="http://emprotur.setur.rn.gov.br/.pages/dados-pesquisa.php" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Boletim de Inteligencia</a></li>
                      <li><a class="dropdown-item" href="http://www.transparencia.rn.gov.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Números do Turismo Potiguar</a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid #f5921a;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-airplay icon-menu"></i> &nbsp; Transparência
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="{{ URL::asset('doc/carta_de_servicos_setur.pdf') }}" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Carta de Serviço</a></li>
                      <li><a class="dropdown-item" href="http://www.sic.rn.gov.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;E-SIC</a></li>
                      <li><a class="dropdown-item" href="https://falabr.cgu.gov.br/publico/Manifestacao/SelecionarTipoManifestacao.aspx?ReturnUrl=%2f" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Ouvidoria</a></li>
                    </ul>
                </li>
                  
                </ul>
              </div>
        </div>
        
      </div>
    </nav>
    
    {{-- /nav.mb --}}
    <div class="visible-xs">
        <div class="collapse" id="navbarToggleExternalContent">
          <div class=" p-4">
             <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                 
                  <li class="nav-item" style="border-left: 3px solid #f5921a;">
                    <a class="nav-link active" aria-current="page" href="http://setur.rn.gov.br/"><i class="pe-7s-home icon-menu"></i> &nbsp;&nbsp;Início</a>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid green;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-culture icon-menu"></i> &nbsp;&nbsp;A Setur
                    </a>
                    <ul class="dropdown-menu" style="background-color:#efefef;">
                      <li><a class="dropdown-item" href="/institucional"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Institucional</a></li>
                      <li><a class="dropdown-item" href="/gestao"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;A Gestão</a></li>
                      <li><a class="dropdown-item" href="/setoresedepartamentos"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Setores e Departamentos</a></li>
                      <li><a class="dropdown-item" href="http://emprotur.setur.rn.gov.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;EMPROTUR</a></li>
                      <li><a class="dropdown-item" href="http://www.centrodeconvencoesdenatal.rn.gov.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Centro de Convenções de Natal</a></li>
                      <!--<li><a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Calendario</a></li>-->
                      <li><a class="dropdown-item" href="/faleconosco"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Fale Conosco</a></li>
                      <li><a class="dropdown-item" href="/conetur"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;CONETUR</a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item" style="border-left: 3px solid #ffff00;">
                    <a class="nav-link" href="/noticias"><i class="pe-7s-news-paper icon-menu"></i> &nbsp; Notícias</a>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid #1aa3ff;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-map-2 icon-menu"></i> &nbsp;&nbsp; Rio Grande do Norte
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" style="background-color:#efefef;">
                      <!--<li><a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Sobre o Estado</a></li>-->
                      <li><a class="dropdown-item" href="http://www.visiteriograndedonorte.com.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Visite Rio Grande do Norte</a></li>
                      <li><a class="dropdown-item" href="/turismonorn"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Turismo no RN</a></li>
                      <!--<li><a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Fotos e Vídeos</a></li>-->
                    </ul>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid #f5921a;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-settings icon-menu"></i> &nbsp;&nbsp;Serviços
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" style="background-color:#efefef;">
                      <li><a class="dropdown-item" href="https://cadastur.turismo.gov.br/hotsite/#!/public/capa/entrar" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Cadastur</a></li>
                      <li><a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Buggy Turismo</a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid green;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-note2 icon-menu"></i> &nbsp;&nbsp; Atividades
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" style="background-color:#efefef;">
                      <li><a class="dropdown-item" href="/capacitacoes"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Capacitação</a></li>
                      <li><a class="dropdown-item" href="/turismocidadao"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Turismo Cidadão</a></li>
                      <li><a class="dropdown-item" href="/inspire-se"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Inspire-se</a></li>
                      <!--<li><a class="dropdown-item" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Obras</a></li>-->
                    </ul>
                  </li>
                  
                  <li class="nav-item" style="border-left: 3px solid #ffff00;">
                      <a class="nav-link" href="/planoseprojetos"><i class="pe-7s-airplay icon-menu"></i> &nbsp; Planos e Projetos</a>
                  </li>
                  
                  <li class="nav-item dropdown" style="border-left: 3px solid #1aa3ff;">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <i class="pe-7s-global icon-menu"></i> &nbsp; Pesquisas
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" style="background-color:#efefef;">
                      <li><a class="dropdown-item" href="https://sirio.tur.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Sírio</a></li>
                      <li><a class="dropdown-item" href="http://emprotur.setur.rn.gov.br/.pages/dados-pesquisa.php" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Boletim de Inteligencia</a></li>
                      <li><a class="dropdown-item" href="http://www.transparencia.rn.gov.br/" target="_blank"><i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp;&nbsp;Números do Turismo Potiguar</a></li>
                    </ul>
                  </li>
                  
                  <li class="nav-item" style="border-left: 3px solid #f5921a;">
                      <a class="nav-link" href="#"><i class="pe-7s-airplay icon-menu"></i> &nbsp; Transparência</a>
                  </li>
                  
                </ul>

          </div>
        </div>
        
        <nav class="navbar navbar ">
            <div class="container-fluid" class="row">
                <div class="col-10">
                    <a href="http://setur.rn.gov.br/"><img src="{{ URL::asset('img/logosetur-png.png') }}" style="width:80px;"/></a>
                </div>
                <div class="col-2">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
            <hr style="width:100%; height:5px; background-image: linear-gradient(to right, #75a152 , #e3650e); border:none; opacity: 1;">
        </nav>
    </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content" style="background-color:#eeeeee;">
        
      <div class="modal-body">
          
          <style>
            .search-icon { height: 34px; width: 34px; float: right; display: flex; justify-content: center; align-items: center; color: white; background-color: #536bf6; font-size: 10px; bottom: 30px; position: relative; border-radius: 5px; }
            .search-icon:hover{ color: #fff !important; }

            .card-inner { position: relative; display: flex; flex-direction: column; min-width: 0; word-wrap: break-word; background-color: #fff; background-clip: border-box; border: 1px solid rgba(0,0,0,.125); border-radius: .25rem; border:none; cursor: pointer; transition: all 2s; }

            .card-inner:hover{ transform: scale(1.1); }
            .mg-text span{ font-size: 12px; }
            .mg-text{ line-height: 14px; }
          </style>
        
          <div class="container mt-4"> 
              <div class="row d-flex justify-content-center"> 
                  <div class="col-md-9"> 
                      
                      <div class="card2 p-4 mt-3" style="background-color:white; border-radius:10px; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;"> 
                          
                          <h3 class="heading mt-5 text-center" style="color:#005baa; letter-spacing:1px;">Ferramenta de Busca <i class="fas fa-search"></i></h3> 
                          
                          <div class="row mt-4 g-1 px-4 mb-5"> 
                              
                              <div class="col-md-2"> 
                                  <a data-bs-toggle="collapse" href="#collapsenews" role="button" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none;">
                                      <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                          <img src="https://i.imgur.com/Mb8kaPV.png" width="50"> 
                                          <div class="text-center mg-text"> 
                                              <span class="mg-text">Notícias</span> 
                                          </div>
                                      </div>
                                  </a>
                              </div> 
                              
                              <div class="col-md-2"> 
                                  <a data-bs-toggle="collapse" href="#collapsetransparencia" role="button" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none;">
                                  <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                      <img src="https://i.imgur.com/ueLEPGq.png" width="50"> 
                                      <div class="text-center mg-text"> <span class="mg-text">Transparência</span> 
                                      </div> 
                                  </div> 
                                  </a>
                              </div> 
                              
                              <div class="col-md-2">
                                  <a data-bs-toggle="collapse" href="#collapseservicos" role="button" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none;">
                                  <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                      <img src="https://i.imgur.com/tmqv0Eq.png" width="50"> 
                                      <div class="text-center mg-text"> <span class="mg-text">Serviços</span> 
                                      </div> 
                                  </div>
                                  </a>
                              </div> 
                              
                              <div class="col-md-2">
                                  <a data-bs-toggle="collapse" href="#collapsesite" role="button" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none;">
                                  <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                      <img src="https://i.imgur.com/D0Sm15i.png" width="50"> 
                                      <div class="text-center mg-text"> <a href="/buscarsite" style="text-decoration:none;"><span class="mg-text">Site</span></a> 
                                      </div> 
                                      </div> </a>
                              </div> 
                              
                              <div class="col-md-2"> 
                                  <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                    <img src="https://i.imgur.com/Z7BJ8Po.png" width="50"> 
                                      <div class="text-center mg-text" style="color:#0099ff;"> <a href="/turismocidadao" style="text-decoration:none;"><span class="mg-text">Turismo Cidadão</span></a>
                                  </div>
                                  </div>
                              </div> 
                              
                              <div class="col-md-2"> 
                                  <div class="card-inner p-3 d-flex flex-column align-items-center"> 
                                        <img src="https://i.imgur.com/YLsQrn3.png" width="50"> 
                                      <div class="text-center mg-text" style="color:#0099ff;"> <a href="/faleconosco" style="text-decoration:none;"><span class="mg-text">Fale Conosco</span></a></div> 
                                  </div>
                                  </div>
                          </div>
                          
                      </div> 
                  
                      <div class="card2 p-4 mt-3" style="background-color:white; border-radius:10px; margin-top:30px; box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;">
                          {{-- collapse --}}
                          <div class="collapse" id="collapsenews" style="margin-top:15px;">
                              <h4 style="text-align:center; color:#005baa; font-weight:bold;">Buscar Notícia</h4>
                              <div class="" style="margin-left:20%;"> 
                              </div> 
                              
                               <form action="/noticia-search" class="domain-form" method="GET" enctype="multipart/form-data" style="margin-left:20%;">
                                    <div class="form-group d-md-flex"> 
                                        <input type="text" name="search_noticia" class="form-control" placeholder="informe alguma tag ou algo sobre..." style="width:400px !important; border-radius:0px; border-color:gray; background-color:transparent;"> 
                                        <button class="btn btn-success btn-sm" type="submit" style="margin-left:5px;"><i class="fa fa-search"></i> Buscar</button>
                                    </div>
                                </form>
                          </div>
                          
                          {{-- 02/collapse --}}
                          <div class="collapse" id="collapsetransparencia" style="margin-top:15px;">
                              <div class="alert alert-primary" role="alert">
                                  Você pode encontrar todos os documentos da SETUR no  <a href="https://portaldatransparencia.gov.br/" class="alert-link">https://portaldatransparencia.gov.br/</a>.
                              </div>
                          </div>
                          
                          {{-- 03/collapse --}}
                          <div class="collapse" id="collapseservicos" style="margin-top:15px;">
                              
                              <div class="row">
                                <div class="col">
                                    <a href="ttp://www.cadastur.turismo.gov.br/" target="_blank"><button type="button" class="btn btn-primary" style="width:100%; height:130px; border-radius:0px; background-color:#717fe2; border:none; font-size:20px;">CADASTUR</button></a>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="2duvidas" style="width:100%; height:130px; border-radius:0px; background-color:#86d196; border:none; font-size:20px;">BUGGY TURISMO</button>
                                </div>
                            </div>
                              
                          </div>
                          
                          {{-- 04/site --}}
                          <div class="collapse" id="collapsesite" style="margin-top:15px;">
                              <h4 style="text-align:center; color:#005baa; font-weight:bold;">Buscar no Site</h4>
                              <div class="" style="margin-left:20%;"> 
                              </div> 
                              
                               <form action="/buscarsite" class="domain-form" method="GET" enctype="multipart/form-data" style="margin-left:20%;">
                                    <div class="form-group d-md-flex"> 
                                        <input type="text" name="buscar" class="form-control" placeholder="informe o que você deseja procurar no site..." style="width:400px !important; border-radius:0px; border-color:gray; background-color:transparent;"> 
                                        <button class="btn btn-success btn-sm" type="submit" style="margin-left:5px;"><i class="fa fa-search"></i> Buscar</button>
                                    </div>
                                </form>
                          </div>
                      </div>
                  
                  </div> 
              </div> 
          </div>
          
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
      </div>
      
    </div>
  </div>
</div>
    
<br/><br/>
    
    @yield('content')
    
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
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
