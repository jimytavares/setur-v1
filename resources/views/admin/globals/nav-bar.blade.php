<div class="app-sidebar sidebar-shadow">

    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
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

    <!-- NAV BAR: MENU -->
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">

            <ul class="vertical-nav-menu">
               
                @if($getUserData['user_nivel'] == 'admin' || $getUserData['user_nivel'] == 'setur')
                {{-- ### Noticias ### --}}
                    <li class="app-sidebar__heading" style="padding-top:20px;"><i class="fas fa-globe" style="font-size:20px;"></i> Site: <b style="color:#ff8c1a;">Setur</b></li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-news-paper"></i>
                            Notícias
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('formNoticias')}}">
                                    <i class="pe-7s-note2" style="font-size:17px;"></i> Cadastrar Notícia
                                </a>
                            </li>
                            <li>
                                <a href="{{route('listNoticias')}}">
                                    <i class="pe-7s-display2" style="font-size:17px;"></i> Listar/Editar/Excluir
                                </a>
                            </li>
                            <li>
                                <a href="/indexAdmin">
                                    <i class="pe-7s-pen" style="font-size:17px;"></i> Galeria de Imagens
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/caixa-de-entrada">
                            <i class="metismenu-icon pe-7s-mail"></i>
                            Caixa de Entrada
                        </a>
                    </li>
                @endif
                
                @if($getUserData['user_nivel'] == 'admin' || $getUserData['user_nivel'] == 'blog')
                {{-- ### BLOG ### --}}
                    <li class="app-sidebar__heading" style="padding-top:20px;"><i class="fas fa-pen-square" style="font-size:20px;"></i> Blog: <small style="color:green;">master</small></li>
                    <li>
                        <a href="{{route('formBlog')}}">
                            <i class="metismenu-icon pe-7s-comment"></i>
                            Publicar
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Responsáveis
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                    </li>
                @endif
                
                @if($getUserData['user_nivel'] == 'admin' || $getUserData['user_nivel'] == 'setur')
                {{-- ### ADMIN ### --}}
                    <li class="app-sidebar__heading" style="padding-top:20px;"><i class="fas fa-globe" style="font-size:20px;"></i> Admin: <small style="color:red;">master</small></li>
                    <li>
                        <a href="#">
                            <i class="metismenu-icon pe-7s-id"></i>
                            Cadastro de Cargos
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul>
                            <li>
                                <a href="{{route('formCargos')}}">
                                    <i class="pe-7s-note2" style="font-size:17px;"></i> Cadastrar Cargo
                                </a>
                            </li>
                            <li>
                                <a href="{{route('listCargos')}}">
                                    <i class="pe-7s-note2" style="font-size:17px;"></i> Visualizar Cargos
                                </a>
                            </li>
                        </ul>
                    </li>
                @endif
                
                {{-- ### configurações### --}}
                <li class="app-sidebar__heading" style="padding-top:10px;"><i class="fas fa-sign-out-alt" style="font-size:19px;"></i> Configurações</li>
                <li>
                    <a href="/indexAdmin" data-bs-toggle="modal" data-bs-target="#mudarsenha">
                        <i class="metismenu-icon pe-7s-key"></i>
                        Mudar Senha
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button style="width:90%; letter-spacing:2px; height:30px; border-radius:5px; background-color:#489de4; border:none; color:white; margin-top:5px;" :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fas fa-sign-out-alt"></i> {{ __('Sair') }}</button>
                    </form>

                </li>
                
            </ul>

        </div>
    </div>

</div>