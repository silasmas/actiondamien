@extends('layouts.guest')

@section('guest-content')

        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/1.webp') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.main_menu.who_are_we.contact') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.main_menu.who_are_we.contact') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Form Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-6 p-5 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="display-6 mb-5">{{ __('miscellaneous.inner_page.contact.title') }}</h1>
                        <p class="lead mb-1 fw-bold" style="color: #000;"><i class="fa fa-map-marker-alt me-2 text-danger"></i>{{ __('miscellaneous.inner_page.contact.reference_title1') }}</p>
                        <p class="lead text-muted">{{ __('miscellaneous.inner_page.contact.reference_content1') }}</p>
                        <hr class="border border-default mb-4">
                        <p class="lead mb-1 fw-bold" style="color: #000;"><i class="fa fa-envelope me-2 text-danger"></i>{{ __('miscellaneous.inner_page.contact.reference_title2') }}</p>
                        <p class="lead text-muted">{{ __('miscellaneous.inner_page.contact.reference_content2') }}</p>
                        <hr class="border border-default mb-4">
                        <p class="lead mb-1 fw-bold" style="color: #000;"><i class="fa fa-phone me-2 text-danger"></i>{{ __('miscellaneous.inner_page.contact.reference_title3') }}</p>
                        <p class="lead text-muted">{{ __('miscellaneous.inner_page.contact.reference_content3') }}</p>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="h-100 bg-danger p-lg-5 p-sm-4 p-3" style="border-radius: 1.2rem;">
                            <form>
                                <h3 class="h3 mb-5 text-white fw-normal">{{ __('miscellaneous.inner_page.contact.form.title') }}</h3>

                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="complete_name" placeholder="{{ __('miscellaneous.inner_page.contact.form.complete_name') }}">
                                            <label for="name">{{ __('miscellaneous.inner_page.contact.form.complete_name') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="email" placeholder="{{ __('miscellaneous.inner_page.contact.form.email') }}">
                                            <label for="email">{{ __('miscellaneous.inner_page.contact.form.email') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="phone" placeholder="{{ __('miscellaneous.inner_page.contact.form.phone') }}">
                                            <label for="name">{{ __('miscellaneous.inner_page.contact.form.phone') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mb-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control bg-light border-0" id="subject" placeholder="{{ __('miscellaneous.inner_page.contact.form.subject') }}">
                                            <label for="email">{{ __('miscellaneous.inner_page.contact.form.subject') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control bg-light border-0" id="question" rows="3" placeholder="{{ __('miscellaneous.inner_page.contact.form.message') }}"></textarea>
                                            <label for="email">{{ __('miscellaneous.inner_page.contact.form.message') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-dark mt-4 px-4" style="height: 60px;">
                                    {{ __('miscellaneous.inner_page.contact.form.button_send') }}

                                    <div class="d-inline-flex btn-sm-square bg-white text-dark rounded-circle ms-2">
                                        <i class="fa fa-arrow-right"></i>
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Form End -->

        <!-- Google Map Start -->
        <div class="container-xxl py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                        <!--map-start-->
                        <div class="map-wrapper">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15914.124163426295!2d15.296249375207518!3d-4.310802721765198!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a33201f1aab05%3A0x2b7d7a52f744faa0!2sAction%20Damien%20Rdc!5e0!3m2!1sfr!2scd!4v1645982056098!5m2!1sfr!2scd" style="width: 100%; min-height: 20rem;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                        <!--map-end-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Google Map End -->

@endsection