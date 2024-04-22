<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('img/logo-gov-png.png') }}" type="image/x-icon" />

    <title>@yield('title')</title>
    
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
    
    {{-- CSS/are.admin --}}
    <link href="{{ URL::asset('css/admin/main-admin.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/admin/styleadmin-admin.css') }}" rel="stylesheet">
    
    <!-- Alert JavaScript -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/0ujn23waig7iavn7loss126e9hjoivblq3uqag9g4b05a8oq/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    
    {{-- CSS da aplicação --}}
    <link href="{{ URL::asset('icon/assets/Pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css" media="all"/>
    
    <!-- charts.js/graficos-transparencia -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    
    <style>
        .app-sidebar__heading{
            color:#3f6ad8 !important;
        }
        .metismenu-icon{
            color:#3f6ad8;
            opacity: 0.9 !important;
        }

        .card-counter{
            box-shadow: 2px 2px 10px #DADADA;
            margin: 5px;
            padding: 20px 10px;
            background-color: #fff;
            height: 100px;
            border-radius: 5px;
            transition: .3s linear all;
          }

          .card-counter:hover{
            box-shadow: 4px 4px 20px #DADADA;
            transition: .3s linear all;
          }

          .card-counter.primary{
            background-color: #007bff;
            color: #FFF;
          }

          .card-counter.danger{
            background-color: #ef5350;
            color: #FFF;
          }  

          .card-counter.success{
            background-color: #66bb6a;
            color: #FFF;
          }  

          .card-counter.info{
            background-color: #26c6da;
            color: #FFF;
          }  

          .card-counter i{
            font-size: 5em;
            opacity: 0.2;
          }

          .card-counter .count-numbers{
            position: absolute;
            right: 35px;
            top: 20px;
            font-size: 32px;
            display: block;
          }

          .card-counter .count-name{
            position: absolute;
            right: 35px;
            top: 65px;
            font-style: italic;
            text-transform: capitalize;
            opacity: 0.5;
            display: block;
            font-size: 18px;
          }
        
        /*style 2*/
        .counter{
            color: #f27f21;
            font-family: 'Open Sans', sans-serif;
            text-align: center;
            height: 170px;
            width: 190px;
            padding: 30px 25px 25px;
            margin: 0 auto;
            border: 3px solid #f27f21;
            border-radius: 20px 20px;
            position: relative;
            z-index: 1;
        }
        .counter:before,
        .counter:after{
            content: "";
            background: #f3f3f3;
            border-radius: 20px;
            box-shadow: 4px 4px 2px rgba(0,0,0,0.2);
            position: absolute;
            left: 15px;
            top: 15px;
            bottom: 15px;
            right: 15px;
            z-index: -1;
        }
        .counter:after{
            background: transparent;
            width: 100px;
            height: 100px;
            border: 15px solid #f27f21;
            border-top: none;
            border-right: none;
            border-radius: 0 0 0 20px;
            box-shadow: none;
            top: auto;
            left: -10px;
            bottom: -10px;
            right: auto;
        }
        .counter .counter-icon{
            font-size: 35px;
            line-height: 35px;
            margin: 0 0 15px;
            transition: all 0.3s ease 0s;
        }
        .counter:hover .counter-icon{ transform: rotateY(360deg); }
        .counter .counter-value{
            color: #555;
            font-size: 25px;
            font-weight: 600;
            line-height: 20px;
            margin: 0 0 20px;
            display: block;
            transition: all 0.3s ease 0s;
        }
        .counter:hover .counter-value{ text-shadow: 2px 2px 0 #d1d8e0; }
        .counter h3{
            font-size: 17px;
            font-weight: 700;
            text-transform: uppercase;
            margin: 0 0 15px;
        }
        .counter.blue{
            color: #3f6ad8;
            border-color: #3f6ad8;
        }
        .counter.blue:after{
            border-bottom-color: #3f6ad8;
            border-left-color: #3f6ad8;
        }
        @media screen and (max-width:990px){
            .counter{ margin-bottom: 40px; }
        }
        
        /*Style 3*/
            .mt-70 {
                margin-top: 70px
            }

            .mb-70 {
                margin-bottom: 70px
            }

            .card {
                box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
                border-width: 0;
                transition: all .2s
            }

            

            .vertical-timeline {
                width: 100%;
                position: relative;
                padding: 1.5rem 0 1rem
            }

            .vertical-timeline::before {
                content: '';
                position: absolute;
                top: 0;
                left: 67px;
                height: 100%;
                width: 4px;
                background: #e9ecef;
                border-radius: .25rem
            }

            .vertical-timeline-element {
                position: relative;
                margin: 0 0 1rem
            }

            .vertical-timeline--animate .vertical-timeline-element-icon.bounce-in {
                visibility: visible;
                animation: cd-bounce-1 .8s
            }

            .vertical-timeline-element-icon {
                position: absolute;
                top: 0;
                left: 60px
            }

            .vertical-timeline-element-icon .badge-dot-xl {
                box-shadow: 0 0 0 5px #fff
            }

            .badge-dot-xl {
                width: 18px;
                height: 18px;
                position: relative
            }

            .badge:empty {
                display: none
            }

            .badge-dot-xl::before {
                content: '';
                width: 10px;
                height: 10px;
                border-radius: .25rem;
                position: absolute;
                left: 50%;
                top: 50%;
                margin: -5px 0 0 -5px;
                background: #fff
            }

            .vertical-timeline-element-content {
                position: relative;
                margin-left: 90px;
                font-size: 1.3rem
            }

            .vertical-timeline-element-content .timeline-title {
                font-size: .8rem;
                text-transform: uppercase;
                margin: 0 0 .5rem;
                padding: 2px 0 0;
                font-weight: bold
            }

            .vertical-timeline-element-content .vertical-timeline-element-date {
                display: block;
                position: absolute;
                left: -90px;
                top: 0;
                padding-right: 10px;
                text-align: right;
                color: #adb5bd;
                font-size: .8619rem;
                white-space: nowrap
            }

            .vertical-timeline-element-content:after {
                content: "";
                display: table;
                clear: both
            }
        
        
/* For other boilerplate styles, see: /docs/general-configuration-guide/boilerplate-content-css/ */
/*
* For rendering images inserted using the image plugin.
* Includes image captions using the HTML5 figure element.
*/

figure.image {
  display: inline-block;
  border: 1px solid gray;
  margin: 0 2px 0 1px;
  background: #f5f2f0;
}

figure.align-left {
  float: left;
}

figure.align-right {
  float: right;
}

figure.image img {
  margin: 8px 8px 0 8px;
}

figure.image figcaption {
  margin: 6px 8px 6px 8px;
  text-align: center;
}


/*
 Alignment using classes rather than inline styles
 check out the "formats" option
*/

img.align-left {
  float: left;
}

img.align-right {
  float: right;
}

/* Basic styles for Table of Contents plugin (toc) */
.mce-toc {
  border: 1px solid gray;
}

.mce-toc h2 {
  margin: 4px;
}

.mce-toc li {
  list-style-type: none;
}



    </style>
    
</head>
<body>
    
    <!--#### ALL PAGE ####-->
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        <!-- Line header -->
        @include('admin.globals.line-header')

        <!-- SECTION: Page -->
        <div class="app-main">

            <!-- LEFT: settings color -->
            @include('admin.globals.nav-bar')

            <!-- RIGHT: PAGE -->            
            <div class="app-main__outer">
                <div class="app-main__inner">
    
                    @yield('content2')
                    
                </div>
            </div> 

            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>

        </div>

    </div>
    
<!-- Modal -->
<div class="modal fade" id="mudarsenha" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Aviso</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="alert alert-success" role="alert">
            Por favor entrar em contato com o <b>suporte de desenvolvimento</b> informando sua <i>matricula e e-mail</i> através do <b>whattsapp (84)99941-7996 </b>, Jimy Dickson!
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sair</button>
      </div>
    </div>
  </div>
</div>
    
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>
    
    <script type="text/javascript" src="{{ URL::asset('js/admin/main.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>
