@extends('layouts.guest')

@section('guest-content')

        <!-- Carousel Start -->
        <div class="container-fluid p-0 mt-lg-5 mt-4 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="{{ asset('assets/img/photo/3.jpg') }}" alt="Image">
                        <div class="carousel-caption">
                            <div class="container">
                                <div class="row justify-content-sm-start justify-content-center text-sm-start">
                                    <div class="col-lg-7 pt-4 ps-sm-5">
                                        <h1 class="display-4 fw-normal text-white mb-4 animated slideInDown" style="font-weight: 1100;">
                                            {{ __('miscellaneous.slides.title_1a') }}<br>{{ __('miscellaneous.slides.title_1b') }}<span style="font-style: italic; color: #58b8a7;">{{ __('miscellaneous.slides.title_1c') }}</span>
                                        </h1>
                                        <p class="fs-6 text-white mb-5 animated slideInDown">{{ __('miscellaneous.slides.description_1') }}</p>
                                        <a class="btn btn-danger text-white py-2 px-3 animated slideInDown" href="{{ route('support_us') }}">
                                            {{ __('miscellaneous.slides.link_1') }}

                                            <div class="d-inline-flex btn-sm-square text-danger bg-white rounded-circle ms-2">
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
                                <div class="row justify-content-sm-end justify-content-center text-sm-end">
                                    <div class="col-lg-7 pt-4 pe-sm-5">
                                        <h1 class="display-4 fw-normal text-white mb-4 animated slideInDown" style="font-weight: 1100;">{{ __('miscellaneous.slides.title_2') }}</h1>
                                        <p class="fs-6 text-white mb-5 animated slideInDown">{{ __('miscellaneous.slides.description_2') }}</p>
                                        <a class="btn btn-light py-2 px-3 animated slideInDown"  href="{{ route('news') }}">
                                            {{ __('miscellaneous.slides.link_2') }}

                                            <div class="d-inline-flex btn-sm-square bg-danger text-white rounded-circle ms-2">
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
                                <div class="row justify-content-sm-start justify-content-center text-sm-start">
                                    <div class="col-lg-7 pt-4 ps-sm-5">
                                        <h1 class="display-4 fw-normal text-white mb-4 animated slideInDown" style="font-weight: 1100;">{{ __('miscellaneous.slides.title_3') }}</h1>
                                        <p class="fs-6 text-white mb-5 animated slideInDown">{{ __('miscellaneous.slides.description_3') }}</p>
                                        <a class="btn btn-green py-2 px-3 animated slideInDown" href="{{ route('testimonials') }}">
                                            {{ __('miscellaneous.slides.link_3') }}
                                            <div
                                                class="d-inline-flex btn-sm-square bg-white text-green rounded-circle ms-2">
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

        <!-- Videos Start -->
        <div class="container pt-3 pb-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.home_videos.main_title') }}</div>
                <h1 class="display-6 mb-5">{{ __('miscellaneous.home_videos.main_description') }}</h1>
            </div>

            <div class="row g-4 mb-5 justify-content-center">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-yellow rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-yellow text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>{{ __('miscellaneous.home_videos.badge_1') }}</small>
                            </div>
                            <h5 class="mb-3">{{ __('miscellaneous.home_videos.title_1') }}</h5>
                            <p>{{ __('miscellaneous.home_videos.description_1') }}</p>
                            <a class="btn btn-outline-yellow" href="{{ route('about') }}">
                                {{ __('miscellaneous.home_videos.link_1') }}
                                <div class="d-inline-flex btn-sm-square bg-yellow text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="position-relative mt-auto">
                            <video class="w-100 rounded" controls poster="{{ asset('assets/img/photo/ANNEXE_1_VIDEO_LEPRE.png') }}">
                                <source src="{{ asset('assets/img/video/ANNEXE_1_VIDEO_LEPRE.mp4') }}" type=video/mp4>
                                <source src="{{ asset('assets/img/video/ANNEXE_1_VIDEO_LEPRE.ogg') }}" type=video/ogg>
                            </video>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-danger rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-danger text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>{{ __('miscellaneous.home_videos.badge_2') }}</small>
                            </div>
                            <h5 class="mb-3">{{ __('miscellaneous.home_videos.title_2') }}</h5>
                            <p>{{ __('miscellaneous.home_videos.description_2') }}</p>
                            <a class="btn btn-outline-danger" href="{{ route('support_us') }}">
                                {{ __('miscellaneous.home_videos.link_2') }}
                                <div class="d-inline-flex btn-sm-square bg-danger text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                        <div class="position-relative mt-auto">
                            <video class="w-100 rounded" controls poster="{{ asset('assets/img/photo/ANNEXE_1_VIDEO_TUBERCULOSE.png') }}">
                                <source src="{{ asset('assets/img/video/ANNEXE_1_VIDEO_TUBERCULOSE.mp4') }}" type=video/mp4>
                                <source src="{{ asset('assets/img/video/ANNEXE_1_VIDEO_TUBERCULOSE.ogg') }}" type=video/ogg>
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Videos End -->

        <!-- Statistics Start -->
        <div class="container-xxl mb-4 p-0 bg-green">
            <div class="container-lg container-fluid px-sm-4 py-5">
                <div class="row g-0 text-sm-start text-center ">
                    <div class="col-sm-6 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="wow fadeInUp" data-wow-delay="0.5s" style="max-width: 600px;">
                                    <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.statistics.main_title') }}</div>
                                    <h1 class="display-6 mb-sm-5 mb-4">{{ __('miscellaneous.national_cover.description1') }} <span class="text-danger">{{ __('miscellaneous.national_cover.description2') }}</span></h1>
                                </div>
                            </div>
                            <div class="col-12 pe-sm-5 me-sm-5">
                                <h1 class="h1 text-white text-uppercase wow fadeInUp" data-wow-delay="0.9s">{{ __('miscellaneous.national_cover.year') }}</h1>
                                <div class="bg-image pe-sm-5 me-sm-5">
                                    <img src="{{ asset('assets/img/photo/map-legend-2022.png') }}" alt="legend" class="img-fluid">
                                    <div class="mask"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12 pt-sm-0 pt-4">
                        <div class="bg-image">
                            <img src="{{ asset('assets/img/photo/map-markers2-2022.png') }}" alt="markers" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="statistics" class="container">
            <div class="row">
                <div class="four col-sm-4 mb-4 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="counter-box px-4 bg-secondary border border-yellow">
                        <i class="fa fa-users text-yellow"></i>
                        <span class="counter text-green">6</span>
                        <p class="fw-bold text-green">{{ __('miscellaneous.statistics.title_1') }}</p>
                        <small>{{ __('miscellaneous.statistics.content_1') }}</small>
                    </div>
                </div>

                <div class="four col-sm-4 mb-4 wow fadeInUp" data-wow-delay="1.7s">
                    <div class="counter-box px-4 bg-secondary border border-yellow">
                        <i class="fa fa-microscope text-yellow"></i>
                        <span class="counter text-green">10</span>
                        <p class="fw-bold text-green">{{ __('miscellaneous.statistics.title_2') }}</p>
                        <small>{{ __('miscellaneous.statistics.content_2') }}</small>
                    </div>
                </div>

                <div class="four col-sm-4 wow fadeInUp" data-wow-delay="2.1s">
                    <div class="counter-box px-4 bg-secondary border border-yellow">
                        <i class="fa fa-stethoscope text-yellow"></i>
                        <span class="counter text-green">2</span>
                        <p class="fw-bold text-green">{{ __('miscellaneous.statistics.title_3') }}</p>
                        <small>{{ __('miscellaneous.statistics.content_3') }}</small>
                    </div>
                </div>
            </div>
        </div>
        <!-- Statistics End -->

        <!-- Cover Photo Start -->
        <section class="py-5">
            <div class="container p-4" style="background: #a3d7e6">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item bg-white text-center h-100 p-4 py-xl-5 px-xl-4">
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
                        <div class="service-item bg-white text-center h-100 p-4 py-xl-5 px-xl-4">
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
                        <div class="service-item bg-white text-center h-100 p-4 py-xl-5 px-xl-4">
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
        <section class="py-5">
            <div class="container">
                <div class="row g-5 ps-0">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100 rounded" style="left: -0.7rem; min-height: 400px; background: #a3d7e6">
                            <img class="position-absolute h-100 pe-5 rounded" src="{{ asset('assets/img/photo/ANNEXE_3_PHOTO_DU_CEDA_1.jpg') }}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.hospitals.title') }}</div>
                            <h1 class="display-6 mb-4 text-danger">{{ __('miscellaneous.hospitals.ceda_name') }}</h1>
                            <p class="mb-5">{{ __('miscellaneous.hospitals.ceda_description') }}</p>
                            {{-- <a class="btn btn-danger py-2 px-3 me-3 mb-2" href="{{ asset('assets/doc/LISTE_DES_HOPITAUX.pdf') }}">
                                <div class="d-inline-flex btn-sm-square bg-white align-middle text-danger rounded-circle me-2">
                                    <i class="fa fa-list"></i>
                                </div>
                                {{ __('miscellaneous.hospitals.link1') }}
                            </a> --}}
                            <a class="btn btn-danger py-2 px-3 me-3" href="{{ route('hosp_map') }}">
                                <div class="d-inline-flex btn-sm-square bg-white align-middle text-danger rounded-circle me-2">
                                    <i class="fa fa-location-arrow"></i>
                                </div>
                                {{ __('miscellaneous.hospitals.link2') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Hospitals End -->

        <!-- Support Start -->
        <div class="container-xxl py-5 bg-light" data-parallax="scroll">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-inline-block rounded-pill bg-secondary text-yellow py-1 px-3 mb-3">{{ __('miscellaneous.support.title') }}</div>
                            <h1 class="display-6 mb-4">{{ __('miscellaneous.support.subtitle') }}</h1>
                            <h5 class="h5 mb-4 text-muted">{{ __('miscellaneous.support.comment') }}</h3>
                            <p class="lead mb-4 text-dark">{{ __('miscellaneous.support.description') }}</h5>
                            <p class="mb-4 text-dark">{{ __('miscellaneous.support.content') }}</p>
                            <a class="btn btn-yellow py-2 px-3 mb-2 me-3" href="{{ route('support_us') }}">
                                {{ __('miscellaneous.support.link_1') }}
                                <div class="d-inline-flex btn-sm-square bg-white text-yellow rounded-circle ms-2">
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
                            <div class="position-relative h-100 rounded overflow-hidden">
                                <img class="position-absolute h-100 pe-5" src="{{ asset('assets/img/photo/2.webp') }}" alt="" style="object-fit: cover;">
                            </div>
                            <div class="row g-0 position-absolute rounded overflow-hidden" style="width: 90%;bottom: -30px; left: -10px;">
                                <div class="col-sm-1 bg-dark py-2">
                                </div>
                                <div class="col-sm-11 bg-yellow p-2 clearfix">
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
        <div class="container-xxl py-5">
            <div class="container p-4 bg-green rounded">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="bg-image shadow">
                            <img src="{{ asset('assets/img/photo/report.png') }}" alt="" class="img-fluid rounded">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="p-4 h-100">
                            <h2 class="h2 text-uppercase mt-sm-5" style="color:#FFF !important">{{ __('miscellaneous.report.title') }}</h2>
                            <hr class="hr mb-4 border boder-default">
                            <p class="lead mb-4 text-width" style="color:#FFF !important">{{ __('miscellaneous.report.subtitle') }}</p>
                            <a class="btn btn-danger py-2 mb-2 px-3" target="blank"
                            href="https://www.flipsnack.com/585F9FCC5A8/action_damien_rapport_annuel_rd_congo_2020_24_sep_2021/full-view.html"
                            {{-- href="{{ asset('assets/doc/ACTION_DAMIEN_Rapport_Annuel_RD_Congo_2020_24_SEP_2021.pdf') }}" --}}
                            >
                                <i class="fa fa-file-pdf me-2 align-bottom fs-3"></i>{{ __('miscellaneous.report.read') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Report End -->


        <!-- Testimonial Start -->
        <div class="container-xxl pb-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">Actualité</div>
                    <h1 class="display-6 mb-5">Lisez nos derniers articles et conseils.</h1>
                </div>

                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item text-center">
                        <div class="bg-image d-inline-flex align-center" style="width: 240px; height: 250px;">
                            <img class="img-fluid rounded-circle bg-light p-2 mb-3 mx-auto" src="{{ asset('assets/img/photo/ANNEXE 11 IMAGE POUR LA PARTIE NOUS SOUTENIR.jpeg') }}">
                            <div class="mask"></div>
                        </div>

                        <div class="testimonial-text rounded px-4 py-3">
                            <h4 class="h4 fw-bold text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
                            <p class="small text-truncate">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <p class="mt-4 mb-0">
                                <a href="#">Lire l'article<i class="fa fa-arrow-right ms-2"></i></a>
                            </p>
                        </div>
                    </div>

                    <div class="testimonial-item text-center">
                        <div class="bg-image d-inline-flex align-center" style="width: 240px; height: 250px;">
                            <img class="img-fluid rounded-circle bg-light p-2 mb-3 mx-auto" src="{{ asset('assets/img/photo/W1A3398-copie-1.jpg') }}">
                            <div class="mask"></div>
                        </div>

                        <div class="testimonial-text rounded px-4 py-3">
                            <h4 class="h4 fw-bold text-truncate">Donec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida.</h4>
                            <p class="small text-truncate">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit.</p>
                            <p class="mt-4 mb-0">
                                <a href="#">Lire l'article<i class="fa fa-arrow-right ms-2"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

@endsection
