@extends('admin.globals.header-admin')

@section('title', 'SETUR - ADMIN')

@section('content2')

    @if($getUserData['user_nivel'] == 'setur' || $getUserData['user_nivel'] == 'admin') 
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <!--<i class="pe-7s-graph2 icon-gradient bg-amy-crisp">
                        </i>-->
                        <img src="{{URL::asset('img/logo-gov.png')}}" style="width:55px; margin-left:-11px;"/>
                    </div>
                    <div>Seja Bem Vindo
                        <div class="page-title-subheading">Área Administrativa da <b>Secretaria de Estado do Turismo do Rio Grande do Norte</b>.</div>
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

        <div class="container-fluid">

            <div class="row">

                <!-- contadores -->
                <div class="col-6">

                    <div class="row">
                            <div class="col-6">
                                <div class="card mb-3 widget-content" style="background-image: linear-gradient(to right, #1be2da, #5e7be9);">
                                    <div class="widget-content-wrapper text-white" style="opacity:1 !important;">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">NOTÍCIAS</div>
                                            <div class="widget-subheading">Cadastradas: <div class="ml-auto badge badge-secondary">SETUR</div></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers"><span>{{$countNews}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card mb-3 widget-content" style="background-image: linear-gradient(to right, #f5509f, #fe7373);">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left text-white">
                                            <div class="widget-heading">E-MAIL</div>
                                            <div class="widget-subheading">Recebidos: <div class="ml-auto badge badge-secondary">SETUR</div></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers"><span style="color:white !important;">{{$countContato}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card mb-3 widget-content" style="background-image: linear-gradient(to right, #41e297, #39b2b6);">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">POLOS</div>
                                            <div class="widget-subheading">Turísticos: <div class="ml-auto badge badge-secondary">SETUR</div></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers"><span>12</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card mb-3 widget-content" style="background-image: linear-gradient(to right, #ffda41, #ff8255);">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">USUÁRIOS</div>
                                            <div class="widget-subheading">Administrativos:</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers"><span>{{$countUsers}}</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-premium-dark">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading"></div>
                                            <div class="widget-subheading"></div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-warning"><span></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        </div>

                    <img src="{{ URL::asset('img/bg-login1.jpg') }}" style="width:100%; border-radius:10px;" />
                </div>

                <!--charts-->
                <div class="col-6">

                    <!-- .charts-bars.documentos -->
                    <div class="mb-3 card">

                        <div class="card-header-tab card-header-tab-animation card-header">
                            <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            SETUR - Relatório de Acesso Por Pais - Janeiro 2024
                            </div>
                            <ul class="nav">
                            <li class="nav-item"><a href="javascript:void(0);" class="active nav-link">setur.rn.gov.br</a></li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-eg-77">

                                    <div class="card mb-3 widget-chart widget-chart2 text-left w-100">

                                        <canvas id="meuGrafico"></canvas>

                                    </div>

                                    <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal"><i class="fas fa-globe-americas"></i> Acesso por Paises</h6>
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container ps ps--active-y">
                                            <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">

                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Brasil</div>
                                                                <div class="widget-subheading">85,53%</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1">.</small>
                                                                    <span></span>
                                                                    <small class="text-danger pl-2">
                                                                        <i class="fa fa-file-text" aria-hidden="true" style="color:#32e7e1 !important;"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Argentina</div>
                                                                <div class="widget-subheading">7,85%</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1"></small>
                                                                    <span></span>
                                                                    <small class="text-success pl-2">
                                                                        <i class="fa fa-file-text" aria-hidden="true" style="color:#4093aa !important;"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Noruega</div>
                                                                <div class="widget-subheading">3,64%</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1"></small>
                                                                    <span></span>
                                                                    <small class="text-warning pl-2">
                                                                        <i class="fa fa-file-text" aria-hidden="true" style="color:#f5509f !important;"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Alemanhã</div>
                                                                <div class="widget-subheading">1,56%</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1"></small>
                                                                    <span></span>
                                                                    <small class="text-warning pl-2">
                                                                        <i class="fa fa-file-text" aria-hidden="true" style="color:#f5509f !important;"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading">Reino Unido</div>
                                                                <div class="widget-subheading">1,42%</div>
                                                            </div>
                                                            <div class="widget-content-right">
                                                                <div class="font-size-xlg text-muted">
                                                                    <small class="opacity-5 pr-1"></small>
                                                                    <span></span>
                                                                    <small class="text-danger pl-2">
                                                                        <i class="fa fa-file-text" aria-hidden="true" style="color#39b2b6 !important;"></i>
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>

                                            </ul>
                                            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 200px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 139px;"></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    @else
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <!--<i class="pe-7s-graph2 icon-gradient bg-amy-crisp">
                        </i>-->
                        <img src="{{URL::asset('img/conectse/conectese-black2.png')}}" style="width:55px; margin-left:-11px;"/>
                    </div>
                    <div>Blog
                        <div class="page-title-subheading">Área de Publicação do <b>Conecte-se Rio Grande do Norte</b>.</div>
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
        
    @endif

{{-- .charts --}}
<script>
    var ctx = document.getElementById('meuGrafico').getContext('2d');
    var meuGrafico = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Brasil', 'Argentina', 'Noruega', 'Alemanhã', 'Reino Unido'],
            datasets: [{
                label: 'ACESSOS POR PAIS',
                data: [84, 8, 4, 2, 2],
                backgroundColor: [
                    '#32e7e1',
                    '#4093aa',
                    '#f5509f',
                    '#39b2b6',
                    '#ba4d4c',
                    '#ff8255'
                ],
                borderColor: 'rgb(255, 99, 132)',
                borderWidth: 1
            }]
        },
        options: {}
    });

    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
            datasets: [{
                label: '2022 E-Mails',
                data: [2, 6, 4, 6, 5, 9, 0, 0, 0, 5, 7, 3],
                borderColor: '#ff8255',
                borderWidth: 2
            },
            {
                label: '2023 E-Mails',
                data: [8, 2, 9, 3, 6, 4, 7, 16, 14, 14,13, 5],
                borderColor: '#0052cc',
                borderWidth: 2
            },
            {
                label: '2024 E-Mails',
                data: [2],
                borderColor: '#4093aa',
                borderWidth: 2
            }]
        },
        options: {}
    });
</script>   
@endsection