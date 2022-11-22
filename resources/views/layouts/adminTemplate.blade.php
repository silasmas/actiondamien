<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }} | {{ isset($titre) ? $titre : '' }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('assets/admin/js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{asset('assets/img/favicon/android-icon-192x192.png') }}" type="image/rdp-icon">

    <!-- Styles -->

    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/js/sweetalert/sweetalert.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/summernote/summernote.css') }}" rel="stylesheet">
    @livewireStyles
    @yield('autres_style')
</head>

<body class="">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <span>
                                <img alt="image" class="img-circle" src="{{asset('assets/admin/img/default.png')}}"
                                    width="100" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold">{{ Auth::user()->prenom . '-' . Auth::user()->name }}</strong>
                                    </span> <span class="text-muted text-xs block">{{ Auth::user()->fonction }} <b
                                            class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="">Profile</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Déconnexion
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            PLA
                        </div>
                    </li>
                    <li class="{{ strpos($titre, 'G_') === 0 ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-home"></i> <span class="nav-label">Pages </span>
                            <span class="pull-right label label-primary">Gestion</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{ $titre == 'dashboard' ? 'active' : '' }}">
                                <a href="{{ route('dashboard') }}">
                                    <span class="nav-label">Accueil</span></a>
                            </li>
                            <li class="{{ $titre == 'G_Publication' ? 'active' : '' }}"> <a
                                    href="">
                                    <span class="nav-label">Publications</span></a>
                            </li>
                            <li class="{{ $titre == 'Slide' ? 'active' : '' }}"><a href="">Slides</a>
                            </li>
                            <li class="{{ $titre == 'G_accueil' ? 'active' : '' }}"><a
                                    href="">Accueil</a></li>
                            <li class="{{ $titre == 'G_about' ? 'active' : '' }}"><a href="">About</a>
                            </li>
                            <li class="{{ $titre == 'G_Bureau' ? 'active' : '' }}"><a
                                    href="">Bureaux</a></li>
                            <li class="{{ $titre == 'G_expertise' ? 'active' : '' }}"><a
                                    href="">Expertises</a></li>
                        </ul>
                    </li>

                    <li class="{{ $titre == 'news_letter' ? 'active' : '' }}"> <a href=""><i
                                class="fa fa-envelope-open"></i>
                            <span class="nav-label">News letter</span></a>
                    </li>

                    <li class="{{ strpos($titre, 'P_') === 0 ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Pages</span>
                            <span class="pull-right label label-primary">Publication</span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{ $titre == 'P_addPublication' ? 'active' : '' }}">
                                <a href="">
                                    <span class="nav-label">Publications</span></a>
                            </li>
                            <li class="{{ $titre == 'P_addAvocat' ? 'active' : '' }}">
                                <a href="">
                                    <span class="nav-label">Equipe</span></a>
                            </li>
                            <li class="{{ $titre == 'P_AddSlide' ? 'active' : '' }}"><a
                                    href="">Slides</a></li>
                            <li class="{{ $titre == 'P_AddHome' ? 'active' : '' }}"><a
                                    href="">Accueil</a></li>
                            <li class='{{ $titre == 'P_addAbout' ? 'active' : '' }}'><a
                                    href="">About</a></li>
                            <li class='{{ $titre == 'P_AddExpertise' ? 'active' : '' }}'><a
                                    href="">Expertises</a></li>
                            <li class='{{ $titre == 'P_addBureau' ? 'active' : '' }}'><a
                                    href="">Bureaux</a></li>
                        </ul>
                    </li>
                    <li class="{{ $titre == 'user' ? 'active' : '' }}">
                        <a href=""><i class="fa fa-users"></i>
                            <span class="nav-label">Gestion user</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i
                                class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            {{-- <div class="form-group">
                                        <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                                    </div> --}}
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Bienvenue dans l'espace Admin PLA.</span>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i> Déconnexion
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>{{ $titre }}</h2>
                </div>
            </div>

            @yield('content')

            <div class="footer">
                <div class="pull-right">

                </div>
                <div>
                    <a href='silasdev.com'> <strong>Copyright</strong> SDev &copy; 2020-2021 </a>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('assets/admin/js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/metisMenu/jquery.metisMenu.js') }}"></script>
    <script src="{{ asset('assets/admin/js/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Custom and plugin javascript -->
    <script src="{{ asset('assets/admin/js/inspinia.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pace/pace.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/pace/pace.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('assets/admin/js/summernote/summernote.min.js') }}"></script>

    @livewireScripts
    @yield('autres-script')
<script>
     window.addEventListener('swal:modal', event => {
            swal({
                title: event.detail.titre,
                text: event.detail.text,
                icon: event.detail.type,
            });
        });
        window.addEventListener('swal:confirm', event => {
            swal({
                title: event.detail.titre,
                text: event.detail.text,
                icon: event.detail.type,
                dangerMode: true,
                buttons: {
                    cancel: 'Non',
                    delete: 'OUI'
                }
            }).then(function(willDelete) {
                if (willDelete) {
                    switch (event.detail.from) {
                        case 'Monpanier':
                            window.livewire.emit('removeCardeMonPanier', event.detail.id);
                            break;
                        case 'panier':

                            window.livewire.emit('removeCarde', event.detail.id);
                            break;
                        case 'Detail':

                            window.livewire.emit('ajoutCardsDetail', event.detail.id);
                            break;

                        default:
                            break;
                    }
                }

            });
        });

</script>
</body>

</html>
