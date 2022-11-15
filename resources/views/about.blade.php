@extends('layouts.template')

@section('guest-content')

        <!-- Page Header Start  -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/about.webp') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.main_menu.who_are_we.about') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.main_menu.who_are_we.about') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Banner Start -->
        <div class="container-xxl pb-3 pt-5">
            <div class="container">
                <div class="row px-3">
                    <div class="col-12 p-5 bg-green text-center wow fadeInUp" style="border-radius: 1.2rem;" data-wow-delay="0.1s">
                        <p class="display-5 m-0 text-white">{{ __('miscellaneous.inner_page.about.banner_title1') }}<i>{{ __('miscellaneous.inner_page.about.banner_title2') }}</i></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <!-- Butterfly Start -->
        <div class="container-xxl py-5">
            <div class="container py-sm-3">
                <div class="row g-5">
                    {{-- <div class="col-lg-4 col-sm-5 col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image">
                            <img class="img-fluid" src="{{ asset('assets/img/photo/butterfly_logo.png') }}" alt="{{ __('miscellaneous.inner_page.about.butterfly.title') }}">
                        </div>
                    </div> --}}
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <h1 class="display-6 mb-4">{{ __('miscellaneous.inner_page.about.butterfly.title') }}<i class="text-green">{{ __('miscellaneous.inner_page.about.butterfly.title_exclam') }}</i></h1>
                        <p class="lead mb-4">{{ __('miscellaneous.inner_page.about.butterfly.text') }}</p>
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <p class="lead mb-1"><i class="fa fa-check me-2 text-danger"></i>{{ __('miscellaneous.inner_page.about.butterfly.list1') }}</p>
                                <p class="lead mb-1"><i class="fa fa-check me-2 text-danger"></i>{{ __('miscellaneous.inner_page.about.butterfly.list2') }}</p>
                                <p class="lead mb-1"><i class="fa fa-check me-2 text-danger"></i>{{ __('miscellaneous.inner_page.about.butterfly.list3') }}</p>
                                <p class="lead mb-4"><i class="fa fa-check me-2 text-danger"></i>{{ __('miscellaneous.inner_page.about.butterfly.list4') }}</p>
                            </div>
                            <div class="col-lg-8 col-sm-6">
                                <div class="bg-image">
                                    <img class="img-fluid" src="{{ asset('assets/img/photo/butterfly_logo.png') }}" alt="{{ __('miscellaneous.inner_page.about.butterfly.title') }}" width="140">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Butterfly End -->

        <!-- Description Start -->
        <div class="container-xxl py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="h2 fw-bold mb-4">{{ __('miscellaneous.inner_page.about.description.title1') }}</i></h2>
                        <p class="mb-4" style="color: #000;">{{ __('miscellaneous.inner_page.about.description.text1') }}</p>

                        <div class="card mb-4 bg-light border-top-0 border-bottom-0 border-end-0 border-3 border-danger rounded-0 shadow-0">
                            <div class="card-body py-0 pe-0">
                                <h3 class="h3 text-danger fw-bold">{{ __('miscellaneous.inner_page.about.description.title1_subtitle1') }}</i></h3>
                                <p class="m-0" style="color: #000;">{{ __('miscellaneous.inner_page.about.description.title1_content1') }}</p>
                            </div>
                        </div>

                        <div class="card mb-4 bg-light border-top-0 border-bottom-0 border-end-0 border-3 border-green rounded-0 shadow-0">
                            <div class="card-body py-0 pe-0">
                                <h3 class="h3 text-green fw-bold">{{ __('miscellaneous.inner_page.about.description.title1_subtitle2') }}</i></h3>
                                <p class="m-0" style="color: #000;">{{ __('miscellaneous.inner_page.about.description.title1_content2') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl pt-5">
            <div class="container">
                <div class="row px-3">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s" style="height: 14rem; background: transparent url({{ asset('assets/img/photo/11.webp') }}) center center no-repeat; background-size: cover; border-radius: 1.2rem;"></div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <h2 class="h2 fw-bold mb-4">{{ __('miscellaneous.inner_page.about.description.title2') }}<i class="text-green">{{ __('miscellaneous.inner_page.about.butterfly.title_exclam') }}</i></i></h2>
                        <p class="mb-4">{{ __('miscellaneous.inner_page.about.description.text2') }}</p>

                        <div class="card mb-4 border-top-0 border-bottom-0 border-end-0 border-3 border-danger rounded-0 shadow-0">
                            <div class="card-body py-0 pe-0">
                                <h3 class="h3 text-danger fw-bold">{{ __('miscellaneous.inner_page.about.description.title2_subtitle1') }}</i></h3>
                                <p class="m-0">{{ __('miscellaneous.inner_page.about.description.title2_content1') }}</p>
                            </div>
                        </div>

                        <div class="card mb-4 border-top-0 border-bottom-0 border-end-0 border-3 border-green rounded-0 shadow-0">
                            <div class="card-body py-0 pe-0">
                                <h3 class="h3 text-green fw-bold">{{ __('miscellaneous.inner_page.about.description.title2_subtitle2') }}</i></h3>
                                <p class="m-0">{{ __('miscellaneous.inner_page.about.description.title2_content2') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Description End -->

@endsection