<div class="app-header header-shadow">

        <div class="app-header__logo">
           
            <div class="row">
                <div class="col-md-auto">
                    <a href="{{route('index')}}"><h5 class="logo-src" style="color:#3f6ad8;"><b>SETUR</b></h5></a>
                </div>
                <div class="col">
                    <a href="{{route('index')}}"><i class="fas fa-home" style="font-size:21px; color:#3f6ad8; padding-top:2px;"></i></a>
                </div>
                <div class="col">
                    <div style="padding-top:4px;">
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <!--<h5 class="logo-src" style="color:#3f6ad8;"><b><i class="fas fa-tools"></i> IDIARN</b></h5>
            
            <div class="header__pane ml-auto">
                <div>
                    <i class="fas fa-home" style="font-size:22px; color:#3f6ad8;"></i>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>-->
        </div>
        
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>    

        <div class="app-header__content">

            <!-- Perfil -->
            <div class="app-header-left">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            
                            <!--<div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                        <button type="button" tabindex="0" class="dropdown-item">Foto</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Editar</button>
                                        <h6 tabindex="-1" class="dropdown-header">Ações</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Actions</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Sair</button>
                                    </div>
                                </div>
                            </div>-->
                            
                            <div class="widget-content-left  ml-3 header-user-info">
                                <div class="widget-heading" style="color:black;">
                                    <i class="fa fa-address-card"></i> {{$getUserData['user_name']}}
                                </div>
                                <div class="widget-subheading" style="color:black;">
                                    {{$getUserData['user_cargo']}} | {{$getUserData['user_matricula']}}
                                </div>
                            </div>
                            
                            <!--<div class="widget-content-right header-user-info ml-3">
                                <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                    <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                </button>
                            </div>-->
                            
                        </div>
                    </div>
                </div>        
            </div>
            
            <!-- ³Gray Buttons header --> 
            <div class="app-header-right">
                <ul class="header-menu nav">
                    <!--<li class="nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="nav-link-icon fa fa-database"> </i>
                            Graficos
                        </a>
                    </li>
                    <li class="btn-group nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            <i class="nav-link-icon fa fa-edit"></i>
                            Relatórios
                        </a>
                    </li>-->
                    <li class="dropdown nav-item">
                        <a href="javascript:void(0);" class="nav-link">
                            Version 2.0 / 2024
                        </a>
                    </li>
                </ul>        
            </div>

        </div>

</div>  