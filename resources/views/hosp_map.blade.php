@extends('layouts.template')

@section('guest-content')

        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/ANNEXE_3_PHOTO_DU_CEDA_1.jpg') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.hospitals.link2') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.hospitals.link2') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Search info Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="{{ __('miscellaneous.inner_page.hospitals.search') }}" placeholder="{{ __('miscellaneous.inner_page.hospitals.search') }}" style="border-start-start-radius: 0.7rem; border-end-start-radius: 0.7rem;">
                            <span class="input-group-text p-0 border-0 overflow-hidden" style="border-end-end-radius: 0.7rem; border-start-end-radius: 0.7rem;">
                                <button class="btn btn-green px-4 rounded-0" style="height: 60px;"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search info End -->

        <!-- Hospitals list Start -->
        <div class="container-xxl pb-5">
            <div class="container">
                <div class="row"></div>
            </div>
        </div>
        <!-- Hospitals list End -->

@endsection