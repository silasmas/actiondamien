@extends('layouts.guest')

@section('guest-content')

        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/index14.jpg') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 text-white animated slideInDown mb-4">{{ __('miscellaneous.main_menu.who_are_we.our_vision') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.main_menu.who_are_we.our_vision') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Start -->
        <div class="container-xxl py-5" style="background-color: #fe0040;">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead m-0 fw-bold text-white">{{ __('miscellaneous.inner_page.our_vision.about') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Diseases Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead m-0 fw-bold" style="color: black;">{{ __('miscellaneous.inner_page.our_vision.diseases.title') }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-sm-2 mb-2 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card mb-4 shadow-0 overflow-hidden paragraph-ellipsis" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/lep.jpeg') }}" class="card-img-top" alt="{{ __('miscellaneous.inner_page.our_vision.diseases.subtitle1') }}"/>
                            <div class="card-body pb-0">
                                <h5 class="h5 mb-3 fw-bold text-danger">{{ __('miscellaneous.inner_page.our_vision.diseases.subtitle1') }}</h5>
                                <p class="card-text text-black paragraph">{{ __('miscellaneous.inner_page.our_vision.diseases.content1') }}</p>
                            </div>
                            <div class="card-body pt-0 roll-block">
                                <a href="#" class="card-link text-danger float-end down"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-sm-2 mb-2 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card mb-4 shadow-0 overflow-hidden paragraph-ellipsis" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/tub.jpeg') }}" class="card-img-top" alt="{{ __('miscellaneous.inner_page.our_vision.diseases.subtitle2') }}"/>
                            <div class="card-body pb-0">
                                <h5 class="h5 mb-3 fw-bold text-danger">{{ __('miscellaneous.inner_page.our_vision.diseases.subtitle2') }}</h5>
                                <p class="card-text text-black paragraph">{{ __('miscellaneous.inner_page.our_vision.diseases.content2') }}</p>
                            </div>
                            <div class="card-body pt-0 roll-block">
                                <a href="#" class="card-link text-danger float-end down"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-0 mb-2 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="card mb-4 shadow-0 overflow-hidden paragraph-ellipsis" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/ulcer01_1.jpg') }}" class="card-img-top" alt="{{ __('miscellaneous.inner_page.our_vision.diseases.subtitle3') }}"/>
                            <div class="card-body pb-0">
                                <h5 class="h5 mb-3 fw-bold text-danger">{{ __('miscellaneous.inner_page.our_vision.diseases.subtitle3') }}</h5>
                                <p class="card-text text-black paragraph">{{ __('miscellaneous.inner_page.our_vision.diseases.content3') }}</p>
                            </div>
                            <div class="card-body pt-0 roll-block">
                                <a href="#" class="card-link text-danger float-end down"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb-sm-0 mb-4 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="card mb-4 shadow-0 overflow-hidden paragraph-ellipsis" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/pian_1.jpg') }}" class="card-img-top" alt="{{ __('miscellaneous.inner_page.our_vision.diseases.subtitle4') }}"/>
                            <div class="card-body pb-0">
                                <h5 class="h5 mb-3 fw-bold text-danger">{{ __('miscellaneous.inner_page.our_vision.diseases.subtitle4') }}</h5>
                                <p class="card-text text-black paragraph">{{ __('miscellaneous.inner_page.our_vision.diseases.content4') }}</p>
                            </div>
                            <div class="card-body pt-0 roll-block">
                                <a href="#" class="card-link text-danger float-end down"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Diseases End -->

        <!-- Vision Description Start -->
        <div class="container-xxl py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.our_vision.vision_desc.title') }}</div>
                        <h1 class="display-6">{{ __('miscellaneous.inner_page.our_vision.vision_desc.description') }}</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="lead fw-bold" style="color: #000;">{{ __('miscellaneous.inner_page.our_vision.vision_desc.content.text') }}</p>
                    </div>

                    <div class="col-12 wow fadeInUp" data-wow-delay="0.5s">
                        <ul style="color: #000;">
                            <li>{{ __('miscellaneous.inner_page.our_vision.vision_desc.content.list1') }}</li>
                            <li>{{ __('miscellaneous.inner_page.our_vision.vision_desc.content.list2') }}</li>
                            <li>{{ __('miscellaneous.inner_page.our_vision.vision_desc.content.list3') }}</li>
                            <li>{{ __('miscellaneous.inner_page.our_vision.vision_desc.content.list4') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Vision Description End -->

        <!-- Values Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 50rem;">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">Action Damien</div>
                        <h1 class="display-6">{{ __('miscellaneous.inner_page.our_vision.value.title') }}</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card mb-4 shadow-0 overflow-hidden paragraph-ellipsis" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/nigeria-64-tim-dirven.jpg') }}" alt="{{ __('miscellaneous.inner_page.our_vision.value.subtitle1') }}" class="card-img-top"/>
                            <div class="card-body pb-0">
                                <h5 class="card-title">{{ __('miscellaneous.inner_page.our_vision.value.subtitle1') }}</h5>
                                <p class="card-text paragraph">{{ __('miscellaneous.inner_page.our_vision.value.content1') }}</p>
                            </div>
                            <div class="card-body pt-0 roll-block">
                                <a href="#" class="card-link text-danger float-end down"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card mb-4 shadow-0 overflow-hidden paragraph-ellipsis" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/W1A3398-copie-1.jpg') }}" alt="{{ __('miscellaneous.inner_page.our_vision.value.subtitle2') }}" class="card-img-top"/>
                            <div class="card-body pb-0">
                                <h5 class="card-title">{{ __('miscellaneous.inner_page.our_vision.value.subtitle2') }}</h5>
                                <p class="card-text paragraph">{{ __('miscellaneous.inner_page.our_vision.value.content2') }}</p>
                            </div>
                            <div class="card-body pt-0 roll-block">
                                <a href="#" class="card-link text-danger float-end down"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card mb-4 shadow-0 overflow-hidden paragraph-ellipsis" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/mailing_W1A3860-nepal_1.jpg') }}" alt="{{ __('miscellaneous.inner_page.our_vision.value.subtitle3') }}" class="card-img-top"/>
                            <div class="card-body pb-0">
                                <h5 class="card-title">{{ __('miscellaneous.inner_page.our_vision.value.subtitle3') }}</h5>
                                <p class="card-text paragraph">{{ __('miscellaneous.inner_page.our_vision.value.content3') }}</p>
                            </div>
                            <div class="card-body pt-0 roll-block">
                                <a href="#" class="card-link text-danger float-end down"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card mb-4 shadow-0 overflow-hidden paragraph-ellipsis" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/leishmaniasis_nicaragua.jpg') }}" alt="{{ __('miscellaneous.inner_page.our_vision.value.subtitle4') }}" class="card-img-top"/>
                            <div class="card-body pb-0">
                                <h5 class="card-title">{{ __('miscellaneous.inner_page.our_vision.value.subtitle4') }}</h5>
                                <p class="card-text paragraph">{{ __('miscellaneous.inner_page.our_vision.value.content4') }}</p>
                            </div>
                            <div class="card-body pt-0 roll-block">
                                <a href="#" class="card-link text-danger float-end down"><i class="fa fa-arrow-down"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Values End -->

@endsection