@extends('layouts.guest')

@section('guest-content')

        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/2.webp') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.inner_page.projects.title') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.main_menu.projects') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Subtitle Start -->
        <div class="container-xxl py-5 bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="lead m-0 text-center text-white">{{ __('miscellaneous.inner_page.projects.subtitle') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subtitle End -->

        <!-- Search info Start -->
        <div class="container-xxl py-3 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="{{ __('miscellaneous.inner_page.projects.search') }}" placeholder="{{ __('miscellaneous.inner_page.projects.search') }}" style="border-start-start-radius: 0.7rem; border-end-start-radius: 0.7rem;">
                            <span class="input-group-text d-sm-inline-block d-none p-0 border-0 bg-light overflow-hidden">
                                <select class="form-select rounded-0" aria-label="{{ __('miscellaneous.inner_page.projects.choose_year') }}" style="background-color: transparent; padding-top: 1.15rem; padding-bottom: 1.1rem;">
                                    <option class="small" selected disabled>{{ __('miscellaneous.inner_page.projects.choose_year') }}</option>
                                    <option>{{ __('miscellaneous.inner_page.projects.all_year') }}</option>
        @for ($year = 2022; $year >= 1964; $year--)
                                    <option>{{ $year }}</option>
        @endfor
                                </select>
                            </span>
                            <span class="input-group-text p-0 border-blue overflow-hidden" style="border-end-end-radius: 0.7rem; border-start-end-radius: 0.7rem;">
                                <button class="btn btn-blue px-4 rounded-0" style="height: 60px;"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search info End -->

        <!-- Projects list Start -->
        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/13.webp') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-light text-blue py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.projects.type1') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2 fs-5 align-middle"></i><span class="d-inline-block me-2">07 Nov. 2022</span>
                            <i class="fa fa-clock me-2 fs-5 align-middle"></i><span class="d-inline-block me-2">14h00' - 18h00'</span>
                        </p>
                        <h3 class="h3 text-blue fw-bold text-truncate">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </h3>
                        <p class="mb-0 paragraph2">
                            Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida.
                        </p>
                        <p class="mb-0 roll-block">
                            <a href="#" class="card-link text-blue float-end down"><i class="fa fa-arrow-down"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/index14.jpg') }}" alt="" class="img-fluid" >
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.projects.type2') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2 fs-5 align-middle"></i><span class="d-inline-block me-2">06 Nov. 2022</span>
                            <i class="fa fa-clock me-2 fs-5 align-middle"></i><span class="d-inline-block me-2">08h00' - 16h00'</span>
                        </p>
                        <h3 class="h3 text-danger fw-bold text-truncate">
                            Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque.
                        </h3>
                        <p class="mb-0 paragraph2">
                            Cras dignissim elit et augue. Nullam non diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        </p>
                        <p class="mb-0 roll-block">
                            <a href="#" class="card-link text-danger float-end down"><i class="fa fa-arrow-down"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/11.webp') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-light text-green py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.projects.type3') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2 fs-5 align-middle"></i><span class="d-inline-block me-2">05 Nov. 2022</span>
                            <i class="fa fa-clock me-2 fs-5 align-middle"></i><span class="d-inline-block me-2">10h15' - 12h30'</span>
                        </p>
                        <h3 class="h3 text-green fw-bold text-truncate">
                            Fusce convallis, mauris imperdiet gravida bibendum, nisl turpis suscipit mauris, sed placerat ipsum urna sed risus.
                        </h3>
                        <p class="mb-0 paragraph2">
                            Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque.
                        </p>
                        <p class="mb-0 roll-block">
                            <a href="#" class="card-link text-green float-end down"><i class="fa fa-arrow-down"></i></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                        <a href="#" class="btn btn-blue d-block shadow-0">
                            {{ __('miscellaneous.inner_page.news.see_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects list End -->

@endsection