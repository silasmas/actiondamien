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
                        <div class="bg-image px-3 py-5">
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

@endsection