@extends('admin.globals.header-admin')

@section('title', 'SETUR - ADMIN')

@section('content2')

    <!-- /titulo -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <img src="{{URL::asset('img/logo-gov.png')}}" style="width:55px; margin-left:-11px;"/>
                </div>
                <div>Galeria de Imagens
                    <div class="page-title-subheading">Página para publicação de imagens extras para as notícias no - site da <b>setur.rn.gov.br</b>.</div>
                </div>
            </div>
            <div class="page-title-actions">
                <div class="ml-auto badge">Sites:</div>
                <div class="ml-auto badge badge-secondary">SETUR - RN</div>
                <div class="d-inline-block dropdown">
                    <!--<button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                        <span class="btn-icon-wrapper pr-2 opacity-7">
                            <i class="fa fa-business-time fa-w-20"></i>
                        </span>
                        Memorandos
                    </button>-->
                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-inbox"></i>
                                    <span>
                                        Todos:
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-book"></i>
                                    <span>
                                        Novos:
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-danger">5</div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:void(0);" class="nav-link">
                                    <i class="nav-link-icon lnr-picture"></i>
                                    <span>
                                        Gravados:
                                    </span>
                                    <div class="ml-auto badge badge-pill badge-secondary">3</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>  

    <!-- BOX.all -->
    <div class="tab-content">

        <!-- /form -->
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">

                    <h5 class="card-title" style="color:#3f6ad8;">1ª Imagem - Formulário</h5><br/>

                    <form role="form" method="POST" action="/form-noticias-galeria/update/{id}" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT') 
                        <div class="position-relative row form-group">
                            <label for="exampleEmail" class="col-sm-2 col-form-label">Numero Pregão:</label>
                            <div class="col-sm-3">
                                <select class="form-control" name="numero" id="exampleFormControlSelect1" style="width:500px; height:38px;">
                                  <option value="" selected disabled>..:SELECIONE:..</option>
                                  @foreach($tb_noticias as $table_noticias)
                                    <option value='{{$table_noticias->id}}'><b>{{date('d/m/Y', strtotime($table_noticias->datta))}}</b> - {{$table_noticias->titulo}}</option>
                                  @endforeach
                                </select>
                            </div>
                        </div><br/>

                        <div class="position-relative row form-group">
                            <label class="col-sm-2 col-form-label" for="exampleFormControlFile1"><i class="fas fa-images"></i> <B>1ª IMAGEM</B>:</label>
                            <div class="col-sm-10">
                                <input name="galeria01" type="file" />
                            </div>
                        </div><br/>

                        <button type="submit" class="btn btn-success" style="margin-top:30px;"><i class="fas fa-file-import"></i> Publicar</button> <br/>
                        
                    </form>

                </div>
            </div>
        </div>

    </div>

@endsection