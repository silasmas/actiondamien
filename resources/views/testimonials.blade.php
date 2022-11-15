@extends('layouts.template')

@section('guest-content')

        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/index.jpg') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.main_menu.testimonials.video_testimonials') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.main_menu.testimonials.video_testimonials') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Videos List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <video class="w-100 rounded" controls>
                            <source src="{{ asset('assets/img/video/ANNEXE_13_TEMOIGNAGE_EN_VIDEO_1.mp4') }}" type=video/mp4>
                            <source src="{{ asset('assets/img/video/ANNEXE_13_TEMOIGNAGE_EN_VIDEO_1.ogg') }}" type=video/ogg>
                        </video>
                    </div>

                    <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                        <video class="w-100 rounded" controls>
                            <source src="{{ asset('assets/img/video/ANNEXE_13_TEMOIGNAGE_EN_VIDEO_2.mp4') }}" type=video/mp4>
                            <source src="{{ asset('assets/img/video/ANNEXE_13_TEMOIGNAGE_EN_VIDEO_2.ogg') }}" type=video/ogg>
                        </video>
                    </div>

                    <div class="col-lg-6 mb-4 wow fadeInUp" data-wow-delay="0.5s">
                        <video class="w-100 rounded" controls>
                            <source src="{{ asset('assets/img/video/ANNEXE_13_TEMOIGNAGE_EN_VIDEO_3.mp4') }}" type=video/mp4>
                            <source src="{{ asset('assets/img/video/ANNEXE_13_TEMOIGNAGE_EN_VIDEO_3.ogg') }}" type=video/ogg>
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <!-- Videos List End -->

@endsection