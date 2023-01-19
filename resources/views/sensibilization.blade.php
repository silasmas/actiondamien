@extends('layouts.template')

@section('guest-content')
    @if (Route::current()->getName() == 'sensibilization_details')
        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/1.jpg') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.main_menu.testimonials.sensibilization') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('sensibilization') }}">{{ __('miscellaneous.main_menu.testimonials.sensibilization') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.inner_page.sensibilization.title') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Title Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-12 p-5 bg-green wow fadeInUp" style="border-radius: 1.2rem;" data-wow-delay="0.1s">
                        <h1 class="display-4 m-0 text-center text-white fw-normal">{{ __('miscellaneous.inner_page.sensibilization.title') }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Title End -->

        <!-- Content Start -->
        <div class="container-xxl py-5">
            <div class="container" style="text-align: justify;">
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4 fw-bold" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph1') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph2') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph3') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph4') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph5') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph6') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph7') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph8') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph9') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph10') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph11') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph12') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph13') }}</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead mb-sm-5 mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.sensibilization.paragraph14') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content End -->
    @else
        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/1.jpg') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.main_menu.testimonials.sensibilization') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.main_menu.testimonials.sensibilization') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Sensibilizations list Start -->
        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 14rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/index14.jpg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <h5 class="h5 text-danger fw-bold text-truncate">
                            <a href="{{ route('sensibilization_details', ['id' => 1]) }}" class="text-danger">
                                {{ __('miscellaneous.inner_page.sensibilization.title') }}
                            </a>
                        </h5>
                        <p class="mb-0 paragraph3">
                            {{ __('miscellaneous.inner_page.sensibilization.paragraph1') }}
                            {{ __('miscellaneous.inner_page.sensibilization.paragraph2') }}
                            {{ __('miscellaneous.inner_page.sensibilization.paragraph3') }}
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0" href="{{ route('sensibilization_details', ['id' => 1]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sensibilizations list End -->
    @endif

@endsection