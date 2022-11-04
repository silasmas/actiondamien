@extends('layouts.guest')

@section('guest-content')

        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/soutenir_1.jpg') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.main_menu.who_are_we.support_us') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.main_menu.who_are_we.support_us') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Banner Start -->
        <div class="container-xxl py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-4 col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image px-3 pb-4">
                            <img src="{{ asset('assets/img/photo/ANNEXE_12_MAIN_AVEC_UN_COEUR_A_L_INTERIEUR.png') }}" alt="{{ __('miscellaneous.inner_page.support_us.title') }}" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-9 col-sm-8 col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="h1 mb-4 fw-bold">{{ __('miscellaneous.inner_page.support_us.comment') }}</h1>
                        <p class="lead mb-4">{{ __('miscellaneous.inner_page.support_us.description') }}</p>
                        <a class="btn btn-danger text-white py-2 px-3 animated slideInDown" href="{{ route('support_us') }}">
                            {{ __('miscellaneous.inner_page.support_us.link') }}

                            <div class="d-inline-flex btn-sm-square text-danger bg-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Ways To Support Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block rounded-pill bg-light text-green py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.support_us.ways_to_support.title') }}</div>
                    <h1 class="display-6 mb-5">{{ __('miscellaneous.inner_page.support_us.ways_to_support.content') }}</h1>
                </div>

                <div class="row text-center">
                    <div class="col-lg-4 col-sm-6 mb-4 mb-md-5 mb-lg-0 py-4 position-relative">
                        <i class="fa fa-map-marker-alt mb-4 display-3 text-green"></i>
                        <h4 class="h4 fw-bold mb-3">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way1_title') }}</h4>
                        <p class="fw-normal mb-0">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way1_content') }}</p>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4 mb-md-5 mb-lg-0 py-4 position-relative border-start border-end border-default">
                        <i class="fa fa-globe mb-4 display-3 text-green"></i>
                        <h4 class="h4 fw-bold mb-3">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way2_title') }}</h4>
                        <p class="fw-normal mb-3">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way2_content') }}</p>
                        <a class="btn border-green text-green py-2 px-3 animated slideInDown" href="{{ route('support_us') }}">
                            {{ __('miscellaneous.inner_page.support_us.ways_to_support.way2_link') }}

                            <div class="d-inline-flex btn-sm-square text-white bg-green rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4 mb-md-0 py-4 position-relative">
                        <i class="fa fa-phone mb-4 display-3 text-green"></i>
                        <h4 class="h4 fw-bold mb-3">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way3_title') }}</h4>
                        <p class="fw-normal mb-1">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way3_content1') }}</p>
                        <p class="mb-0" style="color: #000; font-weight: 700;">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way3_content2') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ways To Support End -->

@endsection