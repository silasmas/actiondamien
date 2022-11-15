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
                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
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

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
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

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
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

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Binza Ozone</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">AKRAM NGALIEMA</h5>
                                    <h6 class="h6 mb-3">Joli-Parc</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Nguma, Q/Joli-Parc, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 896 012 315
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BOLINGO</h5>
                                    <h6 class="h6 mb-3">Museyi</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Mpangala N°26, Q/Museyi, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 895 749 683 / 896 157 208
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">LUKUNGA</h5>
                                    <h6 class="h6 mb-3">Lukunga</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Maternité N°2, Q/Binza-Ozone, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 895 488 107
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">LUYINDU</h5>
                                    <h6 class="h6 mb-3">Munganga</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. REGIDESO N°45, Q/Munganga, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 990 983 682 / 898 745 022
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MFINDA</h5>
                                    <h6 class="h6 mb-3">Mfinda</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Rue Kivuila N°43 Bis, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 813 402 068
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">NGALIEMA-CENTER</h5>
                                    <h6 class="h6 mb-3">Joli-Parc</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. de la Montagne N°4197, Q/Joli-Parc, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 898 289 124
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SAINT CHRISTOPHE</h5>
                                    <h6 class="h6 mb-3">Anciens Combattants</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Quartier 9 N°21, C/Ngaliema
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 138 754 / 901 791 314
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Biyela</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MABONDELI</h5>
                                    <h6 class="h6 mb-3">Luebo 2</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kwilu N°69/73, Q/Ngiesi, C/Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MOKALI</h5>
                                    <h6 class="h6 mb-3">Mokali</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Quartier Mokali, Réf. : Ngambu ya Pont, C/Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 376 987
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SAINT JOSEPH</h5>
                                    <h6 class="h6 mb-3">Luebo 1</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Misani, Q/Malonda, C/Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 896 096 863
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">TSHIMUNGU</h5>
                                    <h6 class="h6 mb-3">Malonda</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Bansima, Q/Malonda, C/Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 997 382 162
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Bumbu</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CME BUMBU</h5>
                                    <h6 class="h6 mb-3">Mbaki</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Maternité de Bumbu, C/Bumbu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 255 211
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">LIBONDI</h5>
                                    <h6 class="h6 mb-3">Matadi</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Tatamene N°117, C/Bumbu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 255 739
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SILOE</h5>
                                    <h6 class="h6 mb-3">Kasai 1</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kimbondo N°222, Q/Kasai, C/Bumbu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 899 900 419
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Gombe</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">AKRAM GOMBE</h5>
                                    <h6 class="h6 mb-3">Gare</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Boulevard du 30 Juin
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 833 954
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BCC</h5>
                                    <h6 class="h6 mb-3">Révolution</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Voir Polyclinique BCC
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CLINIQUE NGALIEMA</h5>
                                    <h6 class="h6 mb-3">Clinique</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. des Cliniques, B.P. 3089, Kinshasa/Gombe
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 039 607 / 990 314 303
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CM MONGALA</h5>
                                    <h6 class="h6 mb-3">Révolution</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Mongala, Près de l'Ambassade d'Italie
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 816 372 517
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CMK</h5>
                                    <h6 class="h6 mb-3">Gare</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Wagenia, C/Gombe
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">HGRK</h5>
                                    <h6 class="h6 mb-3">Golf</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Pavillon Mama Yemo
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 641 465
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Bumbu</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CME BUMBU</h5>
                                    <h6 class="h6 mb-3">Mbaki</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Maternité de Bumbu, C/Bumbu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 255 211
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