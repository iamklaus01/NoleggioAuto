<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
        <meta name="msapplication-tap-highlight" content="no">
        <link rel="stylesheet" href="{{ secure_asset('css/dashboard-index.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('css/dashboard-index.min.css') }}">
        <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap.min.css') }}">
        <link rel="shortcut icon" href="{{ secure_asset('images/favicon.png') }}" type="image/x-icon">
        <script src="https://kit.fontawesome.com/47280fe899.js" crossorigin="anonymous"></script>
        <title>{{ config('app.name', 'Noleggio Auto') }}</title>
    </head>
    <body>
        <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
            <div class="app-header header-shadow">
                <div class="app-header__logo">
                    <div class="logo-name"><p><span class="firstname">Noleggio</span> Auto</p></div>
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
                <div class="app-header__content">
                    <div class="app-header-right">
                        <div class="header-btn-lg pr-0">
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left  ml-3 header-user-info">
                                        <div class="widget-heading">
                                            {{ Auth::user()->name }}
                                        </div>
                                        <div class="widget-subheading">
                                            Gérant du Parc
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>        
                    </div>
                </div>
            </div>               
            <div class="app-main">
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
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading">Gestion Admin</li>
                                <li>
                                    <a href="{{ route('admin-list') }}" class="">
                                        <i class="fa fa-list"></i>
                                         Liste des admins
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('admin-register') }}" class="">
                                        <i class="fa fa-user-plus"></i>
                                         Ajouter un admin
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Fonctionnalité en cours de développement">
                                        <i class="fa fa-pencil-square"></i>
                                         Modifier un admin
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Fonctionnalité en cours de développement">
                                        <i class="fa fa-user-times"></i>
                                         Supprimer un admin
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Gestion du parc</li>
                                <li>
                                    <a href="{{ route('car-list') }}">
                                        <i class="fa fa-list-alt"></i>
                                         Liste des voitures
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('car-add-form') }}">
                                        <i class="fa fa-car"></i>
                                         Ajouter voiture
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('car-unavailable') }}">
                                        <i class="fa fa-check"></i>
                                         Rendre disponible
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Gestion de la FAQ</li>
                                <li>
                                    <a href="{{ route('faq-list') }}">
                                        <i class="fa fa-quora"></i>
                                         Votre FAQ
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('faq-add-form') }}">
                                        <i class="fa fa-plus"></i>
                                         Ajouter question
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Registre de location</li>
                                <li>
                                    <a href="{{ route('rental-list') }}">
                                        <i class="fa fa-book">
                                        </i> Voir Registre
                                    </a>
                                </li>
                                <li class="app-sidebar__heading">Connexion</li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fa fa-sign-out">
                                        </i> Se déconnecter
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        @yield('action')
                    </div>    
                </div>
            </div>
        </div>
        <script src="{{ secure_asset('vendor/jquery-3.3.0.min.js') }}"></script>
        <script src="{{ secure_asset('vendor/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ secure_asset('js/dashboard-index.js') }}"></script>
        <script type="text/javascript" src="{{ secure_asset('js/dashboard-index.min.js') }}"></script>
    </body>
</html>
