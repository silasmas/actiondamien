<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
<<<<<<< HEAD
=======
        <!-- Donate Modal Start -->

        <!-- View rapport Modal Start -->
        <div class="modal fade" id="ViewrapportModal" tabindex="-1" aria-hidden="true" >
            <div class="modal-dialog  modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header pb-0 border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pt-0">
                        {{-- <div class="container"> --}}
                            <div class="row">
                                <div class="col-12">
                                    {{-- <iframe src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=71kquhubdc" width="100%" height="720" seamless="seamless" scrolling="no" frameBorder="0" allowFullScreen allow="autoplay; clipboard-read; clipboard-write"></iframe> --}}
                                    <iframe src="https://cdn.flipsnack.com/widget/v2/widget.html?hash=71kquhubdc" width="100%" height="700" seamless="seamless" scrolling="no" frameBorder="0" allowFullScreen allow="autoplay; clipboard-read; clipboard-write"></iframe>
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
        <!-- View rapport  Modal Start -->

        <!-- View QR Modal Start -->
        <div class="modal fade" id="ViewrQRtModal" tabindex="-1" aria-hidden="true" >
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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-danger" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="top-bar row gx-0 align-items-center d-none d-lg-flex overflow-hidden">
                <div class="col-lg-4 ps-5 text-start bg-danger text-white" style="padding-top: 0.7rem; padding-bottom: 0.8rem;">
                    <small><i class="fa fa-map-marker-alt me-2"></i>{{ __('miscellaneous.actiondamien_address') }}</small>
                </div>

                <div class="col-lg-8 px-5 text-end" style="background-color: #fdd68f; padding-top: 0.7rem; padding-bottom: 0.8rem;">
                    <!-- Social networks -->
                    <small ><a class="me-3" style="color:#58b8a7 !important"  href="#"><i class="fa fa-envelope me-2 align-middle"></i>secretaire@actiondamien-rdc.net</a></small>
                    <a class="text-dark ms-2" target="_blank" href="https://web.facebook.com/actiondamienrdcofficiel"style="color:#58b8a7 !important" ><i class="fab fa-facebook-f"></i></a>
                    {{-- <a class="text-dark ms-3" target="_blank" href="#"style="color:#58b8a7 !important" ><i class="fab fa-twitter"></i></a> --}}
                    <a class="text-dark ms-3 me-5" target="_blank" href="https://www.instagram.com/actiondamien_rdc/"style="color:#58b8a7 !important" ><i class="fab fa-instagram"></i></a>

                    <!-- Language toggle -->
@foreach ($available_locales as $locale_name => $available_locale)
    @if ($available_locale != $current_locale)
                    <a class="ms-2 text-green" href="{{ route('change_language', ['locale' => $available_locale]) }}" data-mdb-toggle="tooltip" title="{{ $locale_name }}">
        @switch($available_locale)
            @case('en')
                        <span class="fi fi-us"></span>
                @break
            @case('ln')
                        <span class="fi fi-cd"></span>
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
                <a href="" class="navbar-brand ms-4 ms-lg-0">
                    <img src="{{ asset('assets/img/logo-01.png') }}" alt="Action Damien" class="" width="150">
                </a>

                <div id="languageToggle" class="dropdown drop-start d-lg-none d-inline-block">
                    <a href="#" class="fs-2 text-dark" data-bs-toggle="dropdown" title="{{ __('miscellaneous.your_language') }}"><i class="fa fa-language"></i></a>

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
                                <span class="fi fi-{{ $available_locale }} me-2 align-middle"></span>
        @endswitch

                                {{ $locale_name }}
                            </a>
                        </li>
    @else
                        <li>
                            <a class="dropdown-item" href="{{ route('change_language', ['locale' => $available_locale]) }}">
        @switch($available_locale)
            @case('en')
                                <span class="fi fi-us me-2 align-middle"></span>
                @break
            @case('ln')
                                <span class="fi fi-cd me-2 align-middle"></span>
                @break
            @default
                                <span class="fi fi-{{ $available_locale }} me-2 align-middle"></span>
        @endswitch

                                {{ $locale_name }}
                            </a>
                        </li>
    @endif
@endforeach
                    </ul>
                </div>

                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0 text-uppercase">
                        <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::current()->getName() == 'home' ? 'active' : '' }}">{{ __('miscellaneous.main_menu.home') }}</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ Route::current()->getName() == 'vision' || Route::current()->getName() == 'about' || Route::current()->getName() == 'support_us' || Route::current()->getName() == 'contact' ? 'active' : '' }}" data-bs-toggle="dropdown">{{ __('miscellaneous.main_menu.who_are_we.title') }}</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('vision') }}" class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.our_vision') }}</a>
                                <a href="{{ route('about') }}" class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.about') }}</a>
                                <a href="{{ route('support_us') }}" class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.support_us') }}</a>
                                <a href="{{ route('contact') }}" class="dropdown-item">{{ __('miscellaneous.main_menu.who_are_we.contact') }}</a>
                            </div>
                        </div>
                        <a href="{{ route('news') }}" class="nav-item nav-link {{ Route::current()->getName() == 'news' ? 'active' : '' }}">{{ __('miscellaneous.main_menu.news') }}</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle {{ Route::current()->getName() == 'testimonials' || Route::current()->getName() == 'sensibilization' ? 'active' : '' }}" data-bs-toggle="dropdown">{{ __('miscellaneous.main_menu.testimonials.title') }}</a>
                            <div class="dropdown-menu m-0">
                                <a href="{{ route('testimonials') }}" class="dropdown-item">{{ __('miscellaneous.main_menu.testimonials.video_testimonials') }}</a>
                                <a href="{{ route('sensibilization') }}" class="dropdown-item">{{ __('miscellaneous.main_menu.testimonials.sensibilization') }}</a>
                            </div>
                        </div>
                        <a href="{{ route('projects') }}" class="nav-item nav-link {{ Route::current()->getName() == 'projects' ? 'active' : '' }}">{{ __('miscellaneous.main_menu.projects') }}</a>
                    </div>

                    <div class="d-none d-lg-flex ms-2">
                        <a class="btn btn-danger py-2 ps-2 pe-3" href="{{ route('donate') }}" data-bs-toggle="modal" data-bs-target="#donateModal">
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
                            <img src="{{ asset('assets/img/logo-02.png') }}" alt="Action Damien" class="" width="200">
                            <div class="mask"></div>
                        </div>
                        <p class="small" style="text-align: justify;">{{ __('miscellaneous.actiondamien_description') }}</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square me-3" target="_blank" href="https://web.facebook.com/actiondamienrdcofficiel"><i class="fab fa-facebook-f"></i></a>
                            {{-- <a class="btn btn-square me-3" target="_blank" href="#"><i class="fab fa-twitter"></i></a> --}}
                            <a class="btn btn-square me-0" target="_blank" href="https://www.instagram.com/actiondamien_rdc/"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">{{ __('miscellaneous.footer.contact_us') }}</h5>
                        <p class="small">
                            <i class="fa fa-map-marker-alt me-3"></i>{{ __('miscellaneous.footer.address1') }}<br>
                            <i class="fa fa-map-marker-alt me-3" style="opacity: 0;"></i>{{ __('miscellaneous.footer.address2') }}
                        </p>
                        <p class="small"><i class="fa fa-phone-alt me-3"></i>+243 816 520 396</p>
                        <p class="small"><i class="fa fa-envelope me-3"></i>secretaire@actiondamien-rdc.net</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">{{ __('miscellaneous.footer.quick_links.title') }}</h5>
                        <a class="btn btn-link" href="{{ route('about') }}">{{ __('miscellaneous.footer.quick_links.about') }}</a>
                        <a class="btn btn-link" href="{{ route('vision') }}">{{ __('miscellaneous.footer.quick_links.our_vision') }}</a>
                        <a class="btn btn-link" href="{{ route('support_us') }}">{{ __('miscellaneous.footer.quick_links.support_us') }}</a>
                        <a class="btn btn-link" href="{{ route('testimonials') }}">{{ __('miscellaneous.footer.quick_links.testimonials') }}</a>
                        <a class="btn btn-link" href="{{ route('projects') }}">{{ __('miscellaneous.footer.quick_links.projects') }}</a>
                        <a class="btn btn-link" href="{{ route('contact') }}">{{ __('miscellaneous.footer.quick_links.contact') }}</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">{{ __('miscellaneous.footer.newsletter.title') }}</h5>
                        <p>{{ __('miscellaneous.footer.newsletter.description') }}.</p>
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
                        <div class="col-md-6 text-center mb-3 mb-md-0 mx-auto">
                            &copy; {{ date('Y') }} <a href="{{ route('about') }}">Action Damien {{ __('miscellaneous.drc') }}</a>
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
>>>>>>> a089cddc096e8b61d4ed4464181bc10ab48e2b3f
    </body>
</html>
