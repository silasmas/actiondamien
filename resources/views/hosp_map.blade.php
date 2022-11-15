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
                <div class="row g-5">
                    <div class="col-lg-6 col-sm-12">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Bandalungwa</h3>
                                
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">LIBIKISI</h5>
                                    <h6 class="h6 mb-3">Bisengo</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kasa-Vubu N°87/BIS, Q/Bisengo, C/Bandalungwa
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 189 705
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">RIVIERA CLINIC</h5>
                                    <h6 class="h6 mb-3">Kasa-Vubu</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Nsenge N°5116, Q/Bakayau, C/Bandalungwa
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 579 586
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Barumbu</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BOYAMBI</h5>
                                    <h6 class="h6 mb-3">Bitshakutshaku</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kasai N°12, Q/Armée du Salut, C/Barumbu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 908 513
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MATERNITE KASAI</h5>
                                    <h6 class="h6 mb-3">Kasai</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>C/Barumbu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BRALIMA</h5>
                                    <h6 class="h6 mb-3">Ndolo</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Flambeau N° , C/Barumbu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 851 109 360 / 818 288 808
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Ngaliema</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KASA-VUBU (BAHUMBU)</h5>
                                    <h6 class="h6 mb-3">Kimpe</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kasa-Vubu N°36, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 999 921 215 / 822 147 303
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KINKENDA</h5>
                                    <h6 class="h6 mb-3">Kinkenda</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Ngowa N°44, Q/Camp Luka, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 038 007
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MWINDA</h5>
                                    <h6 class="h6 mb-3">Bumba</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Q/Sangamamba, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 177 395
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">NGOLO</h5>
                                    <h6 class="h6 mb-3">Lubudi</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Q/Bolikango, Camp Luka, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 812 250 461
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SAINT SACREMENT</h5>
                                    <h6 class="h6 mb-3">Binza Pigeon</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. de la Maternité N°4, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 575 786
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hospitals list End -->

@endsection