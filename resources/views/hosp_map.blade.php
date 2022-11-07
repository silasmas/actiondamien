@extends('layouts.guest')

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

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">

                </div>
            </div>
        </div>
        <!-- About End -->

@endsection