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
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/img/favicon/android-icon-192x192.png') }}">
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
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom Stylesheet -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <title>
            Action Damien / {{ __('miscellaneous.main_menu.home') }}
        </title>
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-danger" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <small><i class="fa fa-map-marker-alt me-2"></i>{{ __('miscellaneous.actiondamien_address') }}</small>
                    <small class="ms-4"><i class="fa fa-envelope me-2"></i>secretaire@actiondamien-rdc.net</small>
                </div>

                <div class="col-lg-5 px-5 text-end">
                    <!-- Social networks -->
                    <small>{{ __('miscellaneous.follow_us') }}</small>
                    <a class="text-white-50 ms-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-3" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="text-white-50 ms-3" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="text-white-50 ms-3 me-5" href="#"><i class="fab fa-instagram"></i></a>

                    <!-- Language toggle -->
@foreach ($available_locales as $locale_name => $available_locale)
    @if ($available_locale != $current_locale)
                    <a class="text-white-50 ms-2" href="{{ route('change_language', ['locale' => $available_locale]) }}" title="{{ $locale_name }}" data-bs-toggle="tooltip">
                        <span class="fi fi-{{ $available_locale == 'en' ? 'us' : $available_locale }}"></span>
                    </a>
    @endif
@endforeach
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <a href="" class="navbar-brand ms-4 ms-lg-0">
                    <img src="{{ asset('assets/img/logo-02.png') }}" alt="Action Damien" class="" width="150">
                </a>

                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        <a href="" class="nav-item nav-link active">{{ __('miscellaneous.main_menu.home') }}</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('miscellaneous.main_menu.who_are_we.title') }}</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.our_vision') }}</a>
                                <a href="" class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.about') }}</a>
                                <a href="" class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.support_us') }}</a>
                                <a href="" class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.contact') }}</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">{{ __('miscellaneous.main_menu.news') }}</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('miscellaneous.main_menu.testimonials.title') }}</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">{{ __('miscellaneous.main_menu.testimonials.video_testimonials') }}</a>
                                <a href="" class="dropdown-item">{{ __('miscellaneous.main_menu.testimonials.sensitization') }}</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">{{ __('miscellaneous.main_menu.projects') }}</a>
                    </div>

                    <div class="d-none d-lg-flex ms-2">
                        <a class="btn btn-outline-primary py-2 ps-2 pe-3" href="">
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle me-2">
                                <img src="{{ asset('assets/img/favicon/favicon.ico') }}" alt="">
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
        <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="bg-image mb-4">
                            <img src="{{ asset('assets/img/logo-02.png') }}" alt="Action Damien" class="" width="200">
                            <div class="mask"></div>
                        </div>
                        <p class="small">{{ __('miscellaneous.actiondamien_description') }}</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square me-3" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square me-3" href="#"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">{{ __('miscellaneous.footer.contact_us') }}</h5>
                        <p class="small"><i class="fa fa-map-marker-alt me-3"></i>{{ __('miscellaneous.actiondamien_address') }}</p>
                        <p class="small"><i class="fa fa-phone-alt me-3"></i>+243 816 520 396</p>
                        <p class="small"><i class="fa fa-envelope me-3"></i>secretaire@actiondamien-rdc.net</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">{{ __('miscellaneous.footer.quick_links.title') }}</h5>
                        <a class="btn btn-link" href="">{{ __('miscellaneous.footer.quick_links.about') }}</a>
                        <a class="btn btn-link" href="">{{ __('miscellaneous.footer.quick_links.our_vision') }}</a>
                        <a class="btn btn-link" href="">{{ __('miscellaneous.footer.quick_links.support_us') }}</a>
                        <a class="btn btn-link" href="">{{ __('miscellaneous.footer.quick_links.testimonials') }}</a>
                        <a class="btn btn-link" href="">{{ __('miscellaneous.footer.quick_links.projects') }}</a>
                        <a class="btn btn-link" href="">{{ __('miscellaneous.footer.quick_links.contact') }}</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">{{ __('miscellaneous.footer.newsletter.title') }}</h5>
                        <p>{{ __('miscellaneous.footer.newsletter.description') }}</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre E-mail">
                            <button type="button"class="btn btn-danger py-2 position-absolute top-0 end-0 mt-2 me-2" title="{{ __('miscellaneous.register') }}"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#">Action Damien</a>, Tout droit réservé.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            Designed By <a href="https://silasmas.com">Silasmas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/lib/parallax/parallax.min.js') }}"></script>

        <!-- Custom Javascript -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>
</html>
