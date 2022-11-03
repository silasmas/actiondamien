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
                    <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.5s">
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
                    <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.7s">
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
                    <div class="col-lg-3 col-sm-6 col-12 wow fadeInUp" data-wow-delay="0.9s">
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

        <!-- Fourth Value Start -->
        <div class="container-xxl px-0 mx-0 mb-4">
            <div class="row g-0 bg-green border border-default overflow-hidden h-lg-25 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-5 overflow-hidden">
                    <div class="bg-image">
                        <img src="{{ asset('assets/img/photo/14.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.value.comment4.title') }}" class="d-lg-none d-md-none d-sm-none d-inline-block w-100">
                        <img src="{{ asset('assets/img/photo/14.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.value.comment4.title') }}" class="d-lg-none d-md-inline-block d-sm-inline-block d-none w-100">
                        <img src="{{ asset('assets/img/photo/14.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.value.comment4.title') }}" class="d-lg-inline-block d-md-none d-sm-none d-none" style="max-width: 40rem;">
                        <div class="mask"></div>
                    </div>
                </div>

                <div class="col-lg-7 pb-lg-2 p-4">
                    <p class="display-5 mb-4 wow fadeInUp" data-wow-delay="0.3s" style="color: #ffd58c">{{ __('miscellaneous.inner_page.our_vision.value.comment4.title') }}</p>
                    <p class="wow fadeInUp text-white" data-wow-delay="0.5s" style="font-size: 1.2rem;">{{ __('miscellaneous.inner_page.our_vision.value.comment4.paragraph1') }}<br>{{ __('miscellaneous.inner_page.our_vision.value.comment4.paragraph2') }}</p>
                    <p class="wow fadeInUp text-white" data-wow-delay="0.7s" style="font-size: 1.2rem;">{{ __('miscellaneous.inner_page.our_vision.value.comment4.paragraph3') }}</p>
                    <p class="wow fadeInUp text-white" data-wow-delay="0.9s" style="font-size: 1.2rem;">{{ __('miscellaneous.inner_page.our_vision.value.comment4.paragraph4') }}</p>
                </div>
            </div>
        </div>
        <!-- Fourth Value End -->

        <!-- Main activities Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="text-sm-start text-center mx-sm-4 mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">
                                <img src="{{ asset('assets/img/favicon/favicon.ico') }}" alt="" width="20" class="me-2 align-middle">
                                Action Damien
                            </div>
                            <h2 class="h2 fw-bold">{{ __('miscellaneous.inner_page.our_vision.activities.title') }}</h2>
                        </div>
                    </div>

                    <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="lead mb-4">{{ __('miscellaneous.inner_page.our_vision.activities.content') }}</p>
                        <p class="mb-2 text-green"><i class="fa fa-check me-2 text-yellow"></i>{{ __('miscellaneous.inner_page.our_vision.activities.list1') }}</p>
                        <p class="mb-2 text-green"><i class="fa fa-check me-2 text-yellow"></i>{{ __('miscellaneous.inner_page.our_vision.activities.list2') }}</p>
                        <p class="mb-2 text-green"><i class="fa fa-check me-2 text-yellow"></i>{{ __('miscellaneous.inner_page.our_vision.activities.list3') }}</p>
                        <p class="mb-2 text-green"><i class="fa fa-check me-2 text-yellow"></i>{{ __('miscellaneous.inner_page.our_vision.activities.list4') }}</p>
                        <p class="mb-2 text-green"><i class="fa fa-check me-2 text-yellow"></i>{{ __('miscellaneous.inner_page.our_vision.activities.list5') }}</p>
                        <p class="mb-2 text-green"><i class="fa fa-check me-2 text-yellow"></i>{{ __('miscellaneous.inner_page.our_vision.activities.list6') }}</p>
                        <p class="mb-2 text-green"><i class="fa fa-check me-2 text-yellow"></i>{{ __('miscellaneous.inner_page.our_vision.activities.list7') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 bg-light">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 12rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/9.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.activities.list1') }}" class="img-fluid" style="margin-top: -7rem;">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="h2 text-lg-start text-center fw-bold">{{ __('miscellaneous.inner_page.our_vision.activities.list1') }}</h2>
                        <p class="lead mb-0 text-lg-start text-center">{{ __('miscellaneous.inner_page.our_vision.activities.list_desc1') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-6 mb-4 order-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 12rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/10.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.activities.list2') }}" class="img-fluid" style="margin-top: -11rem;">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-1 wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="h2 text-lg-end text-center fw-bold">{{ __('miscellaneous.inner_page.our_vision.activities.list2') }}</h2>
                        <p class="lead mb-0 text-lg-end text-center">{{ __('miscellaneous.inner_page.our_vision.activities.list_desc2') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 bg-light">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 12rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/11.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.activities.list3') }}" class="img-fluid" style="margin-top: -9rem;">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="h2 text-lg-start text-center fw-bold">{{ __('miscellaneous.inner_page.our_vision.activities.list3') }}</h2>
                        <p class="lead mb-0 text-lg-start text-center">{{ __('miscellaneous.inner_page.our_vision.activities.list_desc3') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-6 mb-4 order-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 12rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/13.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.activities.list4') }}" class="img-fluid" style="margin-top: -7rem;">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-1 wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="h2 text-lg-end text-center fw-bold">{{ __('miscellaneous.inner_page.our_vision.activities.list4') }}</h2>
                        <p class="lead mb-0 text-lg-end text-center">{{ __('miscellaneous.inner_page.our_vision.activities.list_desc4') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 bg-light">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 12rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/12.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.activities.list5') }}" class="img-fluid" style="margin-top: -2.5rem;">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="h2 text-lg-start text-center fw-bold">{{ __('miscellaneous.inner_page.our_vision.activities.list5') }}</h2>
                        <p class="lead mb-0 text-lg-start text-center">{{ __('miscellaneous.inner_page.our_vision.activities.list_desc5') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-6 mb-4 order-lg-2 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 12rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/1.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.activities.list6') }}" class="img-fluid" style="margin-top: -7rem;">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-1 wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="h2 text-lg-end text-center fw-bold">{{ __('miscellaneous.inner_page.our_vision.activities.list6') }}</h2>
                        <p class="lead mb-0 text-lg-end text-center">{{ __('miscellaneous.inner_page.our_vision.activities.list_desc6') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 bg-light">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 12rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/5.webp') }}" alt="{{ __('miscellaneous.inner_page.our_vision.activities.list7') }}" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="h2 mb-0 text-lg-start text-center fw-bold">{{ __('miscellaneous.inner_page.our_vision.activities.list7') }}</h2>
                        <p class="lead mb-0 text-lg-start text-center">{{ __('miscellaneous.inner_page.our_vision.activities.list_desc7') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main activities End -->

        <!-- Donate Start -->
        <div class="container-fluid py-5" style="background-color: #d5e6eb;">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.donate.title') }}</div>
                        <h1 class="display-6 mb-4">{{ __('miscellaneous.donate.description') }}</h1>
                        <p class="lead mb-0">{{ __('miscellaneous.donate.content') }}</p>
                    </div>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-blue p-5" style="border-radius: 1.2rem;">
                            <form>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="name" placeholder="{{ __('miscellaneous.donate.form.name') }}">
                                            <label for="name">{{ __('miscellaneous.donate.form.name') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control bg-light border-0" id="email" placeholder="{{ __('miscellaneous.donate.form.email') }}">
                                            <label for="email">{{ __('miscellaneous.donate.form.email') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn-group d-flex justify-content-around">
                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                            <label class="btn btn-light py-3" for="btnradio1">$10</label>

                                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                            <label class="btn btn-light py-3" for="btnradio2">$20</label>

                                            <input type="radio" class="btn-check btn-danger" name="btnradio" id="btnradio3" checked>
                                            <label class="btn btn-light py-3" for="btnradio3"><i class="fa fa-plus"></i></label>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-danger mt-3 px-4" style="height: 60px;">
                                            {{ __('miscellaneous.donate.form.run') }}
                                            <div class="d-inline-flex btn-sm-square bg-white text-danger rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->

@endsection