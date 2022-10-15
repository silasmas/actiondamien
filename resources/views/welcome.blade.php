@extends('layouts.guest')

@section('guest-content')

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('assets/img/photo/3.jpg') }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 pt-5">
                                        <h1 class="display-4 text-white mb-3 animated slideInDown">{{ __('miscellaneous.slides.title_1') }}</h1>
                                        <p class="fs-5 text-white-50 mb-5 animated slideInDown">{{ __('miscellaneous.slides.description_1') }}</p>
                                        <a class="btn btn-danger py-2 px-3 animated slideInDown" href="{{ route('support_us') }}">
                                            {{ __('miscellaneous.slides.link_1') }}
                                            <div
                                                class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('assets/img/photo/2.jpg') }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 pt-5">
                                        <h1 class="display-4 text-white mb-3 animated slideInDown">{{ __('miscellaneous.slides.title_2') }}</h1>
                                        <p class="fs-5 text-white-50 mb-5 animated slideInDown">{{ __('miscellaneous.slides.description_2') }}</p>
                                        <a class="btn btn-light py-2 px-3 animated slideInDown" href="{{ route('news') }}">
                                            {{ __('miscellaneous.slides.link_2') }}
                                            <div
                                                class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="{{ asset('assets/img/photo/1.jpg') }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-7 pt-5">
                                        <h1 class="display-4 text-white mb-3 animated slideInDown">{{ __('miscellaneous.slides.title_3') }}</h1>
                                        <p class="fs-5 text-white-50 mb-5 animated slideInDown">{{ __('miscellaneous.slides.description_3') }}</p>
                                        <a class="btn btn-success py-2 px-3 animated slideInDown" href="{{ route('testimonials') }}">
                                            {{ __('miscellaneous.slides.link_3') }}
                                            <div
                                                class="d-inline-flex btn-sm-square bg-white text-success rounded-circle ms-2">
                                                <i class="fa fa-arrow-right"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">{{ __('pagination.previous') }}</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">{{ __('pagination.next') }}</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Videos -->
        <div class="container pt-3 pb-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.home_videos.main_title') }}</div>
                <h1 class="display-6 mb-5">{{ __('miscellaneous.home_videos.main_description') }}</h1>
            </div>

            <div class="row g-4 mb-5 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-info rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-info text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>{{ __('miscellaneous.home_videos.badge_1') }}</small>
                            </div>
                            <h5 class="mb-3">{{ __('miscellaneous.home_videos.title_1') }}</h5>
                            <p>{{ __('miscellaneous.home_videos.description_1') }}</p>
                            <a class="btn btn-outline-info" href="{{ route('about') }}">
                                {{ __('miscellaneous.home_videos.link_1') }}
                                <div class="d-inline-flex btn-sm-square bg-info text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="position-relative mt-auto">
                            <video class="w-100 rounded" autoplay loop controls>
                                <source src="{{ asset('assets/img/video/ANNEXE_1_VIDEO_LEPRE.mp4') }}" type=video/mp4>
                                <source src="{{ asset('assets/img/video/ANNEXE_1_VIDEO_LEPRE.ogg') }}" type=video/ogg>
                            </video>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>{{ __('miscellaneous.home_videos.badge_2') }}</small>
                            </div>
                            <h5 class="mb-3">{{ __('miscellaneous.home_videos.title_2') }}</h5>
                            <p>{{ __('miscellaneous.home_videos.description_2') }}</p>
                            <a class="btn btn-outline-primary" href="{{ route('support_us') }}">
                                {{ __('miscellaneous.home_videos.link_2') }}
                                <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="position-relative mt-auto">
                            <video class="w-100 rounded" controls>
                                <source src="{{ asset('assets/img/video/ANNEXE_1_VIDEO_TUBERCULOSE.mp4') }}" type=video/mp4>
                                <source src="{{ asset('assets/img/video/ANNEXE_1_VIDEO_TUBERCULOSE.ogg') }}" type=video/ogg>
                            </video>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.9s" style="max-width: 600px;">
                <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.statistics.main_title') }}</div>
                <h1 class="display-6 mb-5">{{ __('miscellaneous.statistics.main_description') }}</h1>
            </div>

            <div class="row">
                <div class="four col-sm-4 mb-4 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="counter-box border border-defaultpx-4">
                        <i class="fa fa-users"></i>
                        <span class="counter">6</span>
                        <p class="fw-bold text-dark">{{ __('miscellaneous.statistics.title_1') }}</p>
                        <small>{{ __('miscellaneous.statistics.content_1') }}</small>
                    </div>
                </div>
                <div class="four col-sm-4 mb-4 wow fadeInUp" data-wow-delay="1.7s">
                    <div class="counter-box border border-defaultpx-4">
                        <i class="fa fa-microscope"></i>
                        <span class="counter">10</span>
                        <p class="fw-bold text-dark">{{ __('miscellaneous.statistics.title_2') }}</p>
                        <small>{{ __('miscellaneous.statistics.content_2') }}</small>
                    </div>
                </div>
                <div class="four col-sm-4 mb-4 wow fadeInUp" data-wow-delay="2.1s">
                    <div class="counter-box border border-defaultpx-4">
                        <i class="fa fa-stethoscope"></i>
                        <span class="counter">2</span>
                        <p class="fw-bold text-dark">{{ __('miscellaneous.statistics.title_3') }}</p>
                        <small>{{ __('miscellaneous.statistics.content_3') }}</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Videos End -->

        <!-- Cover Photo -->
        <section class="bg-light py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">{{ __('miscellaneous.national_cover.title') }}</div>
                    <h1 class="display-6 mb-5">{{ __('miscellaneous.national_cover.description') }}</h1>
                </div>
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/photo/lepre.png') }}" alt="">
                            <h4 class="mb-3">{{ __('miscellaneous.national_cover.disease_1') }}</h4>
                            <p class="mb-4">{{ __('miscellaneous.national_cover.countries_count_1') }}</p>
                            <a class="btn btn-outline-danger px-3" href="{{ route('about') }}">
                                {{ __('miscellaneous.national_cover.link') }}
                                <div class="d-inline-flex btn-sm-square bg-danger text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/photo/icone-maladie.png') }}" alt="">
                            <h4 class="mb-3">{{ __('miscellaneous.national_cover.disease_2') }}</h4>
                            <p class="mb-4">{{ __('miscellaneous.national_cover.countries_count_2') }}</p>
                            <a class="btn btn-outline-danger px-3" href="{{ route('about') }}">
                                {{ __('miscellaneous.national_cover.link') }}
                                <div class="d-inline-flex btn-sm-square bg-danger text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                            <img class="img-fluid mb-4" src="{{ asset('assets/img/photo/leishmaniasis.png') }}" alt="">
                            <h4 class="mb-3">{{ __('miscellaneous.national_cover.disease_3') }}</h4>
                            <p class="mb-4">{{ __('miscellaneous.national_cover.countries_count_3') }}</p>
                            <a class="btn btn-outline-danger px-3" href="{{ route('about') }}">
                                {{ __('miscellaneous.national_cover.link') }}
                                <div class="d-inline-flex btn-sm-square bg-danger text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Cover Photo End -->

        <!-- Hospitals Start -->
        <div class="container-xxl py-5">
            <div class="container my-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pe-5" src="{{ asset('assets/img/photo/ANNEXE_3_PHOTO_DU_CEDA_1.jpg') }}" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.hospitals.title') }}</div>
                            <h1 class="display-6 mb-4">{{ __('miscellaneous.hospitals.ceda_name') }}</h1>
                            <p class="mb-5">{{ __('miscellaneous.hospitals.ceda_description') }}</p>
                            <a class="btn btn-danger py-2 px-3 me-3" href="{{ asset('assets/doc/LISTE_DES_HOPITAUX.pdf') }}">
                                <div class="d-inline-flex btn-sm-square bg-white text-danger rounded-circle me-2">
                                    <i class="fa fa-file"></i>
                                </div>
                                {{ __('miscellaneous.hospitals.link') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hospitals End -->

        <!-- Support Start -->
        <div class="container-xxl py-5" data-parallax="scroll" data-image-src="{{ asset('assets/img/photo/back.jpg') }}" style="background-color: rgba(300, 300, 300, 0.96)">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">{{ __('miscellaneous.support.title') }}</div>
                            <h1 class="display-6 mb-4">{{ __('miscellaneous.support.subtitle') }}</h1>
                            <h5 class="h5 mb-4 text-muted">{{ __('miscellaneous.support.comment') }}</h3>
                            <p class="lead mb-4 text-dark">{{ __('miscellaneous.support.description') }}</h5>
                            <p class="mb-4">{{ __('miscellaneous.support.content') }}</p>
                            <a class="btn btn-primary py-2 px-3 mb-2 me-3" href="{{ route('support_us') }}">
                                {{ __('miscellaneous.support.link_1') }}
                                <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                            <a class="btn btn-outline-dark py-2 mb-2 px-3" href="{{ route('support_us') }}">
                                {{ __('miscellaneous.support.link_2') }}
                                <div class="d-inline-flex btn-sm-square bg-dark text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pe-5" src="{{ asset('assets/img/photo/2.webp') }}" alt="" style="object-fit: cover;">
                            <div class="row g-0 position-absolute bg-white" style="width: 90%;bottom: -30px; left: -10px;">
                                <div class="col-sm-1 bg-dark py-2">
                                </div>
                                <div class="col-sm-11 bg-primary p-2 clearfix">
                                    <h2 class="h2 float-start mt-2 me-2"><i class="fa fa-phone text-white"></i></h2>
                                    <div>
                                        <p class="m-0 text-white">{{ __('miscellaneous.support.call') }}</p>
                                        <h5 class="h5 m-0 fw-bold">+243 816 520 396</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support End -->

        <!-- Report Start -->
        <div class="container-xxl px-0 py-5">
            <div class="row g-0 overflow-hidden">
                <div class="col-sm-5">
                    <div class="bg-image">
                        <img src="{{ asset('assets/img/photo/a-02_1.jpg') }}" alt="" class="img-fluid">
                        <div class="mask"></div>
                    </div>
                </div>
                <div class="col-sm-7">
                    <div class="p-4 bg-light h-100">
                        <h2 class="h2 text-uppercase mt-sm-5">{{ __('miscellaneous.report.title') }}</h2>
                        <hr class="hr mb-4 border boder-default">
                        <p class="lead mb-4">{{ __('miscellaneous.report.subtitle') }}</p>
                        <a class="btn btn-outline-dark py-2 mb-2 px-3" href="{{ asset('assets/doc/ACTION_DAMIEN_Rapport_Annuel_RD_Congo_2020_24_SEP_2021.pdf') }}">
                            {{ __('miscellaneous.report.download') }}
                            <div class="d-inline-flex btn-sm-square bg-dark text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Report End -->

@endsection