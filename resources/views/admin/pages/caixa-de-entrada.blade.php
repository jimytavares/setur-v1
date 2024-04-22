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
                <div>Caixa de Entrada
                    <div class="page-title-subheading">Exibição dos E-Mails recebidos pelo - site da <b>setur.rn.gov.br</b>.</div>
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

                    <h5 class="card-title" style="color:#3f6ad8;">Listagem de E-Mails:</h5><br/>

                    <table class="table" style="width:90%; margin: 0 auto;">
                      <thead style="  background-image: linear-gradient(to right, #717a8e , #4286f4); color:white;">
                        <tr>
                          <th scope="col">Nome</th>
                          <th scope="col">Texto</th>
                          <th scope="col">E-Mail</th>
                          <th scope="col">Telefone</th>
                          <th scope="col">Data</th>
                        </tr>
                      </thead>
                      <tbody>
                          @foreach($tb_fale_conosco as $tb_faleConosco)
                            <tr>
                              <td style="width:20%;"><b>{{$tb_faleConosco->nome}}</b></td>
                              <td>{{$tb_faleConosco->texto}}</td>
                              <td>{{$tb_faleConosco->email}}</td>
                              <td>{{$tb_faleConosco->telefone}}</td>
                              <td>{{$tb_faleConosco->datta}}</td>
                            </tr>
                          @endforeach
                      </tbody>
                    </table>
                    
                </div>
            </div>
        </div>

    </div>

@endsection