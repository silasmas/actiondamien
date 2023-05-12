<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="{{ __('miscellaneous.actiondamien_description') }}" name="description">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ asset('assets/img/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/styleLoader.css') }}">
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    @livewireStyles
    <title>
        @if (Route::current()->getName() == 'home')
            Action Damien / {{ __('miscellaneous.main_menu.home') }}
        @endif

        @if (Route::current()->getName() == 'vision')
            {{ __('miscellaneous.main_menu.who_are_we.our_vision') }}
        @endif

        @if (Route::current()->getName() == 'about')
            {{ __('miscellaneous.main_menu.who_are_we.about') }}
        @endif

        @if (Route::current()->getName() == 'support_us')
            {{ __('miscellaneous.main_menu.who_are_we.support_us') }}
        @endif

        @if (Route::current()->getName() == 'contact')
            {{ __('miscellaneous.main_menu.who_are_we.contact') }}
        @endif

        @if (Route::current()->getName() == 'news')
            {{ __('miscellaneous.main_menu.news') }}
        @endif

        @if (Route::current()->getName() == 'news_details')
            {{ __('miscellaneous.inner_page.news.details.title') }}
        @endif

        @if (Route::current()->getName() == 'testimonials')
            {{ __('miscellaneous.main_menu.testimonials.video_testimonials') }}
        @endif

        @if (Route::current()->getName() == 'sensibilization')
            {{ __('miscellaneous.main_menu.testimonials.sensibilization') }}
        @endif

        @if (Route::current()->getName() == 'projects')
            {{ __('miscellaneous.main_menu.projects') }}
        @endif

        @if (Route::current()->getName() == 'donate')
            {{ __('miscellaneous.main_menu.donate') }}
        @endif

        @if (Route::current()->getName() == 'hosp_map')
            {{ __('miscellaneous.hospitals.link2') }}
        @endif
    </title>
</head>

<body class="pt-5">

    <!-- Donate Modal Start -->
    <div class="modal fade" id="donateModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0 border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3>@lang('miscellaneous.msgindisponible')</h3>
                                {{-- <div class="h-100 p-lg-3 p-sm-2 p-1 rounded">
                                    <form>
                                        <div
                                            class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">
                                            {{ __('miscellaneous.donate.title') }}</div>
                                        <h3 class="h3 mb-4 fw-bold text-danger">
                                            {{ __('miscellaneous.donate.description') }}</h3>

                                        <div class="row g-3">
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="name"
                                                        placeholder="{{ __('miscellaneous.donate.form.name') }}">
                                                    <label
                                                        for="name">{{ __('miscellaneous.donate.form.name') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-floating">
                                                    <input type="email" class="form-control" id="email"
                                                        placeholder="{{ __('miscellaneous.donate.form.email') }}">
                                                    <label
                                                        for="email">{{ __('miscellaneous.donate.form.email') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="btn-group d-flex justify-content-around">
                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio1">
                                                    <label class="btn btn-light py-3" for="btnradio1">$10</label>

                                                    <input type="radio" class="btn-check" name="btnradio"
                                                        id="btnradio2">
                                                    <label class="btn btn-light py-3" for="btnradio2">$20</label>

                                                    <input type="radio" class="btn-check btn-danger"
                                                        name="btnradio" id="btnradio3" checked>
                                                    <label class="btn btn-light py-3" for="btnradio3"><i
                                                            class="fa fa-plus"></i></label>
                                                </div>
                                            </div>
                                            <div class="col-12 px-0">
                                                <h5 class="h5 ms-2 mb-4">{{ __('miscellaneous.payment_method') }}</h5>
                                                <div class="row g-sm-0">
                                                    <div class="col-sm-6">
                                                        <div class="form-check form-check-inline mx-4 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="AfriMoney"
                                                                value="option1" />
                                                            <label class="form-check-label" for="AfriMoney">
                                                                <img src="{{ asset('assets/img/photo/services/AfriMoney.png') }}"
                                                                    alt="Afrimoney" height="30"> Afrimoney
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline mx-4 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="AirtelMoney"
                                                                value="option2" />
                                                            <label class="form-check-label" for="AirtelMoney">
                                                                <img src="{{ asset('assets/img/photo/services/AirtelMoney.png') }}"
                                                                    alt="Airtel money" height="30"> Airtel money
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline mx-4 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="Fyatu"
                                                                value="option2" />
                                                            <label class="form-check-label" for="Fyatu">
                                                                <img src="{{ asset('assets/img/photo/services/Fyatu.png') }}"
                                                                    alt="Fyatu" height="30"> Fyatu
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline mx-4 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="MasterCard"
                                                                value="option2" />
                                                            <label class="form-check-label" for="MasterCard">
                                                                <img src="{{ asset('assets/img/photo/services/MasterCard.png') }}"
                                                                    alt="MasterCard" height="30"> MasterCard
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="form-check form-check-inline mx-4 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="MPesa"
                                                                value="option2" />
                                                            <label class="form-check-label" for="MPesa">
                                                                <img src="{{ asset('assets/img/photo/services/MPesa.png') }}"
                                                                    alt="MPesa" height="30"> M-Pesa
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline mx-4 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="OrangeMoney"
                                                                value="option2" />
                                                            <label class="form-check-label" for="OrangeMoney">
                                                                <img src="{{ asset('assets/img/photo/services/OrangeMoney.png') }}"
                                                                    alt="Orange money" height="30"> Orange money
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline mx-4 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="PayPal"
                                                                value="option2" />
                                                            <label class="form-check-label" for="PayPal">
                                                                <img src="{{ asset('assets/img/photo/services/PayPal.png') }}"
                                                                    alt="PayPal" height="30"> PayPal
                                                            </label>
                                                        </div>

                                                        <div class="form-check form-check-inline mx-4 mb-3">
                                                            <input class="form-check-input" type="radio"
                                                                name="inlineRadioOptions" id="Visa"
                                                                value="option2" />
                                                            <label class="form-check-label" for="Visa">
                                                                <img src="{{ asset('assets/img/photo/services/Visa.png') }}"
                                                                    alt="Visa" height="30"> Visa
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer pt-2 pb-4 px-4 border-0 d-flex justify-content-between">
                    <button type="button" class="btn btn-light py-2 border border-default shadow-0"
                        data-bs-dismiss="modal">{{ __('miscellaneous.cancel') }}</button>
                    <button type="button" class="btn btn-danger shadow-0" data-bs-dismiss="modal">
                        {{ __('miscellaneous.donate.form.run') }}
                        <div class="d-inline-flex btn-sm-square bg-white text-danger rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate Modal Start -->
    <!-- View rapport Modal Start -->
    {{-- <div class="modal fade" id="ViewrapportModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0 border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row">
                        <div class="col-12">
                            <iframe src="https://player.flipsnack.com?hash=NTg1RjlGQ0M1QTgrdDNmNGlqOXpobQ=="
                             width="100%" height="480" seamless="seamless" scrolling="no" frameBorder="0"
                             allowFullScreen allow="autoplay; clipboard-read; clipboard-write"></iframe>
                                      </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="modal fade" id="ViewrapportModal2" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0 border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row">
                        <div class="col-12">
                            <iframe src="https://player.flipsnack.com?hash=NTg1RjlGQ0M1QTgrNzFrcXVodWJkYw=="
                             width="100%" height="500" seamless="seamless" scrolling="no" frameBorder="0"
                              allowFullScreen allow="autoplay; clipboard-read; clipboard-write"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- View rapport  Modal Start -->
    <!-- View QR Modal Start -->
    <div class="modal fade" id="ViewrQRtModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog  modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header pb-0 border-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    {{-- <div class="container"> --}}
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ asset('assets/img/qr2.jpeg') }}" alt="" class="img-fluid rounded">
                        </div>
                    </div>
                    {{-- </div> --}}
                </div>
                {{-- <div class="modal-footer pt-2 pb-4 px-4 border-0 d-flex justify-content-between">
                        <button type="button" class="btn btn-light py-2 border border-default shadow-0" data-bs-dismiss="modal">{{ __('miscellaneous.cancel') }}</button>

                    </div> --}}
            </div>
        </div>
    </div>
    <!-- View QR  Modal Start -->

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-danger" role="status"></div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar row gx-0 align-items-center d-none d-lg-flex overflow-hidden">
            <div class="col-lg-4 ps-5 text-start bg-danger text-white"
                style="padding-top: 0.7rem; padding-bottom: 0.8rem;">
                <small><i class="fa fa-map-marker-alt me-2"></i>{{ __('miscellaneous.actiondamien_address') }}</small>
            </div>

            <div class="col-lg-8 px-5 text-end"
                style="background-color: #fdd68f; padding-top: 0.7rem; padding-bottom: 0.8rem;">
                <!-- Social networks -->
                <small><a class="me-3" style="color:#58b8a7 !important" target="blank" href="mailto:secretaire@actiondamien-rdc.org"><i
                            class="fa fa-envelope me-2 align-middle"></i>secretaire@actiondamien-rdc.org</a></small>
                <a class="text-dark ms-2" target="_blank"
                    href="https://web.facebook.com/actiondamienrdcofficiel"style="color:#58b8a7 !important"><i
                        class="fab fa-facebook-f"></i></a>
                {{-- <a class="text-dark ms-3" target="_blank" href="#"style="color:#58b8a7 !important" ><i class="fab fa-twitter"></i></a> --}}
                 <a class="text-dark ms-2 me-2" target="_blank"
                    href="https://www.instagram.com/actiondamien_rdc/"style="color:#58b8a7 !important"><i
                        class="fab fa-instagram"></i></a>
                 <a class="text-dark ms-2 me-2" target="_blank"
                    href="https://bit.ly/3IzDWYw"style="color:#58b8a7 !important"><i
                        class="fab fa-twitter" aria-hidden="true"></i></a>
                 <a class="text-dark ms-2 me-2" target="_blank"
                    href=" https://bit.ly/3Y1fm8s"style="color:#58b8a7 !important"><i
                        class="fab fa-linkedin" aria-hidden="true"></i></a>
                        <a class="text-dark ms-2 me-2" target="_blank"
                    href="https://www.youtube.com/@actiondamienrdcongooffic-jp4lr" style="color:#58b8a7 !important"><i
                        class="fab fa-youtube" aria-hidden="true"></i></a>

                      {{--  @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="ms-2 text-green"
                        href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                        hreflang="{{ $localeCode }}"
                        data-mdb-toggle="tooltip" title="{{ $localeCode }}">
                        @switch($properties)
                            @case('en')
                                <span class="fi fi-us"></span>
                            @break
                            @case('ln')
                                <span class="fi fi-cd"></span>
                            @break
                            @default
                                <span class="fi fi-{{ $properties }}"></span>
                        @endswitch
                    </a> --}}
                        {{-- <p class="mb-0">
                            <a rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                                class="{{App::currentLocale() ===$localeCode?"active":""}}">
                                {{ $properties['native']}}
                            </a>
                        </p>
                        @endforeach--}}
                <!-- Language toggle -->

                @foreach ($available_locales as $locale_name => $available_locale)
                    @if ($available_locale != $current_locale)
                        <a class="ms-2 text-green"
                            href="{{ route('change_language', ['locale' => $available_locale]) }}"
                            data-mdb-toggle="tooltip" title="{{ $locale_name }}">
                            @switch($available_locale)
                                @case('ln')
                                    <span class="fi fi-cd"></span>
                                @break

                                @case('fr')
                                    <span class="fi fi-be"></span>
                                @break

                                @case('en')
                                    <span class="fi fi-us"></span>
                                @break

                                @default
                                    <span class="fi fi-{{ $available_locale }}"></span>
                            @endswitch
                        </a>
                    @endif
                @endforeach
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <a href="{{ route('home') }}" class="navbar-brand ms-4 ms-lg-0">
                <img src="{{ asset('assets/img/logo-01.png') }}" alt="Action Damien" class="" width="150">
            </a>

            <div id="languageToggle" class="dropdown drop-start d-lg-none d-inline-block">
                <a href="#" class="fs-2 text-dark" data-bs-toggle="dropdown"
                    title="{{ __('miscellaneous.your_language') }}"><i class="fa fa-language"></i></a>

                <!-- Language toggle -->
                <ul class="dropdown-menu" aria-labelledby="languageToggle">
                    @foreach ($available_locales as $locale_name => $available_locale)
                        @if ($available_locale === $current_locale)
                            <li>
                                <a class="dropdown-item disabled" href="#">
                                    @switch($available_locale)
                                        @case('en')
                                            <span class="fi fi-us me-2 align-middle"></span>
                                        @break
                                        @case('ln')
                                            <span class="fi fi-cd me-2 align-middle"></span>
                                        @break
                                        @default
                                        <span class="fi fi-be me-2 align-middle"></span>
                                            {{-- <span class="fi fi-{{ $available_locale }} me-2 align-middle"></span> --}}
                                    @endswitch
                                    {{ $locale_name }}
                                </a>
                            </li>
                        @else
                            <li>
                                <a class="dropdown-item"
                                    href="{{ route('change_language', ['locale' => $available_locale]) }}">
                                    @switch($available_locale)
                                        @case('en')
                                            <span class="fi fi-us me-2 align-middle"></span>
                                        @break

                                        @case('ln')
                                            <span class="fi fi-cd me-2 align-middle"></span>
                                        @break

                                        @default
                                        <span class="fi fi-be me-2 align-middle"></span>
                                            {{-- <span class="fi fi-{{ $available_locale }} me-2 align-middle"></span> --}}
                                    @endswitch

                                    {{ $locale_name }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0 text-uppercase">
                    <a href="{{ route('home') }}"
                        class="nav-item nav-link {{ Route::current()->getName() == 'home' ? 'active' : '' }}">{{ __('miscellaneous.main_menu.home') }}</a>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ Route::current()->getName() == 'vision' || Route::current()->getName() == 'about' || Route::current()->getName() == 'support_us' || Route::current()->getName() == 'contact' ? 'active' : '' }}"
                            data-bs-toggle="dropdown">{{ __('miscellaneous.main_menu.who_are_we.title') }}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('vision') }}"
                                class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.our_vision') }}</a>
                            <a href="{{ route('about') }}"
                                class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.about') }}</a>
                            <a href="{{ route('support_us') }}"
                                class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.support_us') }}</a>
                            <a href="{{ route('contact') }}"
                                class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.contact') }}</a>
                        </div>
                    </div>
                    <a href="{{ route('news') }}"
                        class="nav-item nav-link {{ Route::current()->getName() == 'news' ? 'active' : '' }}">{{ __('miscellaneous.main_menu.news') }}</a>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ Route::current()->getName() == 'testimonials' || Route::current()->getName() == 'sensibilization' ? 'active' : '' }}"
                            data-bs-toggle="dropdown">{{ __('miscellaneous.main_menu.testimonials.title') }}</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ route('testimonials') }}"
                                class="dropdown-item">{{ __('miscellaneous.main_menu.testimonials.video_testimonials') }}</a>
                            <a href="{{ route('sensibilization') }}"
                                class="dropdown-item">{{ __('miscellaneous.main_menu.testimonials.sensibilization') }}</a>
                        </div>
                    </div>
                    <a href="{{ route('projects') }}"
                        class="nav-item nav-link {{ Route::current()->getName() == 'projects' ? 'active' : '' }}">{{ __('miscellaneous.main_menu.projects') }}</a>
                </div>

                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-danger py-2 ps-2 pe-3" href="{{ route('donate') }}" data-bs-toggle="modal"
                        data-bs-target="#donateModal">
                        <div class="d-inline-flex btn-sm-square bg-white text-danger rounded-circle me-2 align-middle">
                            <img src="{{ asset('assets/img/favicon/favicon.ico') }}" alt="Action Damien">
                        </div>
                        {{ __('miscellaneous.main_menu.donate') }}
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    @yield('guest-content')

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <div class="bg-image mb-4">
                        <img src="{{ asset('assets/img/logo-02.png') }}" alt="Action Damien" class=""
                            width="200">
                        <div class="mask"></div>
                    </div>
                    <p class="small" style="text-align: justify;">{{ __('miscellaneous.actiondamien_description') }}
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square me-2" target="_blank"
                            href="https://web.facebook.com/actiondamienrdcofficiel"><i
                                class="fab fa-facebook-f"></i></a>
                        {{-- <a class="btn btn-square me-3" target="_blank" href="#"><i class="fab fa-twitter"></i></a> --}}
                        <a class="btn btn-square me-2" target="_blank"
                            href="https://www.instagram.com/actiondamien_rdc/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-square me-2" target="_blank"
                            href="https://bit.ly/3IzDWYw"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-2" target="_blank"
                            href=" https://bit.ly/3Y1fm8s"><i class="fab fa-linkedin"></i></a>
                        <a class="btn btn-square me-2" target="_blank"
                            href='https://www.youtube.com/@actiondamienrdcongooffic-jp4lr'><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">{{ __('miscellaneous.footer.contact_us') }}</h5>
                    <p class="small">
                        <i class="fa fa-map-marker-alt me-3"></i>{{ __('miscellaneous.footer.address1') }}<br>
                        <i class="fa fa-map-marker-alt me-3"
                            style="opacity: 0;"></i>{{ __('miscellaneous.footer.address2') }}
                    </p>
                    <p class="small"><i class="fa fa-phone-alt me-3"></i>+243 816 520 396</p>
                    <p class="small"><i class="fa fa-envelope me-3"></i>secretaire@actiondamien-rdc.net</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">{{ __('miscellaneous.footer.quick_links.title') }}</h5>
                    <a class="btn btn-link"
                        href="{{ route('about') }}">{{ __('miscellaneous.footer.quick_links.about') }}</a>
                    <a class="btn btn-link"
                        href="{{ route('vision') }}">{{ __('miscellaneous.footer.quick_links.our_vision') }}</a>
                    <a class="btn btn-link"
                        href="{{ route('support_us') }}">{{ __('miscellaneous.footer.quick_links.support_us') }}</a>
                    <a class="btn btn-link"
                        href="{{ route('testimonials') }}">{{ __('miscellaneous.footer.quick_links.testimonials') }}</a>
                    <a class="btn btn-link"
                        href="{{ route('projects') }}">{{ __('miscellaneous.footer.quick_links.projects') }}</a>
                    <a class="btn btn-link"
                        href="{{ route('contact') }}">{{ __('miscellaneous.footer.quick_links.contact') }}</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-light mb-4">{{ __('miscellaneous.footer.newsletter.title') }}</h5>
                    <p>{{ __('miscellaneous.footer.newsletter.description') }}.</p>
                    @livewire('newletter')
                </div>
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center mb-3 mb-md-0 mx-auto">
                        &copy; {{ date('Y') }} <a href="{{ route('about') }}">Action Damien
                            {{ __('miscellaneous.drc') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/parallax/parallax.min.js') }}"></script>
    <script src="{{ asset('assets/lib/autosize/autosize.min.js') }}"></script>
    <script src="{{ asset('assets/lib/ellipsis/jquery.ellipsis.min.js') }}"></script>

    <!-- Custom Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    @livewireScripts
</body>

</html>
