@extends('admin.globals.header-admin')

@section('title', 'SETUR - ADMIN')

@section('content2')

    <!-- Titulo -->
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <img src="{{URL::asset('img/logo-gov.png')}}" style="width:55px; margin-left:-11px;"/>
                </div>
                <div>Listagem de Notícias
                    <div class="page-title-subheading">Exibição de todas as notícias cadastradas no site da <b>setur.rn.gov.br</b>.</div>
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

    <!-- BOX: -->
    <div class="tab-content">

        <!-- BOX: List -->
        <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
            <div class="main-card mb-3 card">
                <div class="card-body">

                    <h5 class="card-title" style="color:#3f6ad8;">Listagem de Notícia:</h5><br/>

                    <table class="table" style="width:90%; margin: 0 auto;">
                      <thead style="  background-image: linear-gradient(to right, #717a8e , #4286f4); color:white;">
                        <tr>
                          <th scope="col">Título</th>
                          <th scope="col">Descrição</th>
                          <th scope="col">Data</th>
                          <th scope="col">Editar</th>
                          <th scope="col" style="text-align:center;">Excluir</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($tb_noticias->sortByDesc('datta') as $table_noticias)
                            <tr>
                              <td style="width:25%;"><b>{{$table_noticias->titulo}}</b></td>
                              <td>{{$table_noticias->descricao}}</td>
                              <td>{{date('d/m/Y', strtotime($table_noticias->datta))}}</td>
                              <td style="text-align:center;"><a href="/list-noticias/edit/{{ $table_noticias->id }}"> <i class="fa fa-edit" style="font-size:20px; padding-top:6px;"></i> </a></td>
                              <td style="text-align:center;">
                                <form action="/noticiasdestroy/{{$table_noticias->id}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" style="font-size:23px; color:red; border:none; background-color:transparent;"><i class="fa fa-trash" aria-hidden="true" style="font-size:20px;"></i></button>
                                </form>
                              </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>

    </div>

@endsection