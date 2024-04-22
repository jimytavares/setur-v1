<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('img/logo-gov-png.png') }}" type="image/x-icon" />
 
    <title>ADMIN: SETUR RN</title>
    
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
    
    <style>
        .body-login{
          background: url('{{ URL::asset("img/admin/bg-home2.jpg") }}');
          background-repeat: no-repeat;
          background-position: center;
          background-attachment: fixed;
          background-size: cover;
        }
        
        .lg-index{
          overflow-x: hidden;
        }

        .box-login{
          background-color: white;
          width: 430px;
          height: 460px;
          margin: 0 auto;
          border-radius: 3px;
          margin-top: 5%;
        }
        .box2-login{
          padding-top: 5%;
        }

        .logo-image{ text-align: center; }
        .logo-image img { width: 40%; }

        .logo-image hr{
          background-color: #2d7dba;
        }

        .form-group .row{
          margin-left: 23px;
        }

        .form-group .row .col-1{
          font-family: 'Poppins', sans-serif;
          padding-top: 6px;
          color: #404040;
        }

        .form-group input{
          width: 75%;
          border-radius: 0px;
          background-color: #e6e6e6;
          margin-left: 45px;
        }
    </style>
    
</head>
<body class="body-login">
    
  <section class="lg-index">
    <div class="box-login">
      <div class="box2-login">
          
        <div class="logo-image">
            <img src="{{ URL::asset('img/logosetur-png.png') }}" />
            <p style="letter-spacing:2px; font-weight:bold; margin-top:6px;">SETUR - Secretaria de Turismo</p>
        </div>
          
        <form action="/logar" method="GET" autocomplete="on">
          @csrf 
          <fieldset>
              
            <div class="" style="margin-top:10px;">
              <div class="row" style="width:90%; margin:0 auto;">
                <div class="" style="width:12%;">
                  <label for="campoUsuario"><button class="btn btn-primary" style="width:42px; background-color:#fbaa1d; border:none;"><i class="fa fa-user" aria-hidden="true"></i></button></label>
                </div> 
                <div class="" style="width:88%;">
                  <input class="form-control" type="text" name="name" placeholder="usuário" autocomplete="on">
                </div>
              </div>
            </div>
              
            <div class="" style="margin-top:10px;">
              <div class="row" style="width:90%; margin:0 auto;">
                <div class="" style="width:12%;">
                  <label for="campoUsuario"><button class="btn btn-primary" style="width:42px; background-color:#fbaa1d; border:none;"><i class="fa fa-key" aria-hidden="true"></i></button></label>
                </div> 
                <div class="" style="width:88%;">
                  <input class="form-control" type="password" name="password" placeholder="senha" autocomplete="on">
                </div>
              </div>
            </div>
              
              <div class="form-group">
              <div class="row" style="margin-left:7px;">
                <div class="col-3">
                  <label for="exampleInputPassword1">.</label>
                </div>
                <div class="col">
                    <?php if(isset($_GET['loginerror'])){ ?>
                        <small style="color:red;">*Usuário ou Senha incorreto!</small>
                    <?php } ?>
                </div>
              </div>
            </div>
            
            </fieldset>
            
            <div class="" style="text-align:center;">
              <button class="btn btn-outline-success" type="submit" style="width:140px;">Entrar</button>
            </div>
        </form>
          
        <div class="logo-image" style="margin-top:25px;">
            <hr>
        </div>
          
        <div class="row" style="width:89%; margin:0 auto; margin-top:25px;">
            <div class="col-6" style="text-align:center;">
                <small style="color:gray;"><i class="fa fa-user-o" aria-hidden="true"></i> Esqueceu sua login?</small> 
                <a href="#" data-toggle="modal" data-target="#exampleModal" style="text-decoration:none;"><small style="color:#fbaa1d;">Clique Aqui!</small></a> 
            </div>
            <div class="col-6" style="text-align:center;">
                <small style="color:gray;"><i class="fa fa-key" aria-hidden="true"></i> Esqueceu sua senha?</small> 
                <a href="#" data-toggle="modal" data-target="#exampleModal" style="text-decoration:none;"><small style="color:#fbaa1d;">Clique Aqui!</small></a> 
            </div>
        </div>
          
      </div>
    </div>
  </section>
    
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-exclamation-triangle" aria-hidden="true" style="color:red;"></i> Aviso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
          <div class="alert alert-primary" role="alert">
              Por favor, entrar em contato com o <b>Setor de TI</b> para alteração ou visualização de usuário/senha.
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>    
    
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>