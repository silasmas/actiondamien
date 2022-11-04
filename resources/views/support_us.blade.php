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
        <div class="container-xxl py-5">
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
        <div class="container-xxl py-5 bg-light">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block rounded-pill bg-white text-green py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.support_us.ways_to_support.title') }}</div>
                    <h1 class="display-6 mb-5">{{ __('miscellaneous.inner_page.support_us.ways_to_support.content') }}</h1>
                </div>

                <div class="row text-center">
                    <div class="col-lg-4 col-sm-6 mb-4 mb-md-5 mb-lg-0 mx-auto py-4 wow fadeInUp" data-wow-delay="0.3s">
                        <i class="fa fa-map-marker-alt mb-4 display-3 text-green"></i>
                        <h4 class="h4 fw-bold mb-3">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way1_title') }}</h4>
                        <p class="fw-normal mb-0">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way1_content') }}</p>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4 mb-md-5 mb-lg-0 mx-auto py-4 border-start border-end border-default wow fadeInUp" data-wow-delay="0.3s">
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

                    <div class="col-lg-4 col-sm-6 mb-4 mb-md-0 mx-auto py-4 wow fadeInUp" data-wow-delay="0.5s">
                        <i class="fa fa-phone mb-4 display-3 text-green"></i>
                        <h4 class="h4 fw-bold mb-3">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way3_title') }}</h4>
                        <p class="fw-normal mb-1">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way3_content1') }}</p>
                        <p class="mb-0" style="color: #000; font-weight: 700;">{{ __('miscellaneous.inner_page.support_us.ways_to_support.way3_content2') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ways To Support End -->

        <!-- Join Us Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.support_us.join_us.title') }}</div>
                    <h1 class="display-6 mb-5">{{ __('miscellaneous.inner_page.support_us.join_us.description') }}</h1>
                </div>

                <div class="row text-center">
                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card mb-4 shadow-0 overflow-hidden" style="border-radius: 1.2rem;">
                            <div class="card-img-top overflow-hidden" style="max-height: 12rem;">
                                <img src="{{ asset('assets/img/photo/6.webp') }}" alt="{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.title1') }}" class="w-100" style="margin-top: -5rem;"/>
                            </div>
                            <div class="card-body">
                                <h4 class="h4 mb-3 fw-bold text-danger">{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.title1') }}</h4>
                                <p class="card-text m-0">{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.content1_a') }}</p>
                                <p class="card-text">{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.content1_b') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card mb-4 shadow-0 overflow-hidden" style="border-radius: 1.2rem;">
                            <div class="card-img-top overflow-hidden" style="max-height: 12rem;">
                                <img src="{{ asset('assets/img/photo/7.webp') }}" alt="{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.title2') }}" class="w-100" style="margin-top: -5rem;"/>
                            </div>
                            <div class="card-body">
                                <h4 class="h4 mb-3 fw-bold text-danger">{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.title2') }}</h4>
                                <p class="card-text">{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.content2') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="card mb-4 shadow-0 overflow-hidden" style="border-radius: 1.2rem;">
                            <div class="card-img-top overflow-hidden" style="max-height: 12rem;">
                                <img src="{{ asset('assets/img/photo/8.webp') }}" alt="{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.title3') }}" class="w-100" style="margin-top: -5rem;"/>
                            </div>
                            <div class="card-body">
                                <h4 class="h4 mb-3 fw-bold text-danger">{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.title3') }}</h4>
                                <p class="card-text">{{ __('miscellaneous.inner_page.support_us.join_us.how_to_join.content3') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="border border-default mb-5">

                <div class="row g-0 align-items-center">
                    <div class="col-lg-4 col-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image px-sm-0 px-3">
                            <img src="{{ asset('assets/img/photo/index.jpg') }}" alt="{{ __('miscellaneous.inner_page.support_us.join_us.form.title') }}" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-8 col-sm-7 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="h-100 bg-danger p-lg-5 p-sm-4 p-3" style="border-radius: 1.2rem;">
                            <form>
                                <h4 class="h4 mb-4 text-white fw-normal">{{ __('miscellaneous.inner_page.support_us.join_us.form.title') }}</h4>

                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="firstname" placeholder="{{ __('miscellaneous.inner_page.support_us.join_us.form.firstname') }}">
                                            <label for="name">{{ __('miscellaneous.inner_page.support_us.join_us.form.firstname') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="lastname" placeholder="{{ __('miscellaneous.inner_page.support_us.join_us.form.lastname') }}">
                                            <label for="email">{{ __('miscellaneous.inner_page.support_us.join_us.form.lastname') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="email" placeholder="{{ __('miscellaneous.inner_page.support_us.join_us.form.email') }}">
                                            <label for="name">{{ __('miscellaneous.inner_page.support_us.join_us.form.email') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="phone" placeholder="{{ __('miscellaneous.inner_page.support_us.join_us.form.phone') }}">
                                            <label for="email">{{ __('miscellaneous.inner_page.support_us.join_us.form.phone') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <p class="mb-2 text-white fw-bold">{{ __('miscellaneous.inner_page.support_us.join_us.form.commitment_title') }}</p>

                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="commitment" id="commitment1">
                                            <label class="form-check-label text-white" for="commitment1">{{ __('miscellaneous.inner_page.support_us.join_us.form.commitment_content1') }}</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="commitment" id="commitment2">
                                            <label class="form-check-label text-white" for="commitment2">{{ __('miscellaneous.inner_page.support_us.join_us.form.commitment_content2') }}</label>
                                        </div>
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="commitment" id="commitment3">
                                            <label class="form-check-label text-white" for="commitment3">{{ __('miscellaneous.inner_page.support_us.join_us.form.commitment_content3') }}</label>
                                        </div>
                                        <div class="form-check mb-4">
                                            <input class="form-check-input" type="radio" name="commitment" id="commitment4">
                                            <label class="form-check-label text-white" for="commitment4">{{ __('miscellaneous.inner_page.support_us.join_us.form.commitment_content4') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control bg-light border-0" id="question" rows="3" placeholder="{{ __('miscellaneous.inner_page.support_us.join_us.form.question') }}"></textarea>
                                            <label for="email">{{ __('miscellaneous.inner_page.support_us.join_us.form.question') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-light mt-4 px-4" style="height: 60px;">
                                    {{ __('miscellaneous.inner_page.support_us.join_us.form.button_send') }}

                                    <div class="d-inline-flex btn-sm-square bg-danger text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Join Us End -->

@endsection