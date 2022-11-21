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
                                <h3 class="h3 m-0 fw-normal">Kalamu I</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BONDEKO</h5>
                                    <h6 class="h6 mb-3">Kimbangu 2</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Bondo N°31, C/Kalamu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 997 926 490 / 811 365 466
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kalamu II</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">AKRAM  BONGOLO</h5>
                                    <h6 class="h6 mb-3">Yolo 3</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Bongolo
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 817 901 63
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CPKA-YOLO-SUD</h5>
                                    <h6 class="h6 mb-3">Yolo Sud 2</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Bankwandumu N°13/14, Q/Yolo Sud, C/Kalamu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 897 732 154
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kasa-Vubu</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">ANCIENS COMBATTANTS</h5>
                                    <h6 class="h6 mb-3"></h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Irebu N°43, Q/Anciens Combattants, C/Kasa-Vubu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 900 973 620
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CASOP</h5>
                                    <h6 class="h6 mb-3">Lodja</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Enseignement N°200, Q/Anciens Combattants, C/Kasa-Vubu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 818 792 972
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kikimi</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BOSEMBO</h5>
                                    <h6 class="h6 mb-3">Bosembo</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Nganakieti N°1781
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 995 126 121 / 812 978 718
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KIKIM CH</h5>
                                    <h6 class="h6 mb-3">Bosembo</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Mwene Ditu N°135
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 185 854
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KIKIM CS</h5>
                                    <h6 class="h6 mb-3">Kikimi</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Paroisse Sainte Croix
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 968 807
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">NGAPANI</h5>
                                    <h6 class="h6 mb-3">Ngapani</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 912 876 588
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MARECHAL</h5>
                                    <h6 class="h6 mb-3">Marechal</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Mikondo
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 161 223
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kimbanseke</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BOBOTO</h5>
                                    <h6 class="h6 mb-3">Mangana</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Masala N°49, C/Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 821 595 306
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BOYOKANI</h5>
                                    <h6 class="h6 mb-3">Mangana</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Route Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 813 758 903
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CH ELIKYA</h5>
                                    <h6 class="h6 mb-3">Salongo</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Lombe N°1, 2, 3, Q/Salongo, C/Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 996 806
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">HOP KIMBANGUISTE</h5>
                                    <h6 class="h6 mb-3">Bahumbu</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. de la 2ème République N°0100, Q/Kutu, C/Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 895 182 900 / 817 029 131
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">TOSALISANA</h5>
                                    <h6 class="h6 mb-3">Boma</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Matondo N°12, Q/Boma, C/Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 892 566 030
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kingabwa</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">AKRAM</h5>
                                    <h6 class="h6 mb-3"></h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Debonhomme
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 995 641 888
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CH LIZIBA</h5>
                                    <h6 class="h6 mb-3">Mayamba</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Bosuka N°27, Q/IZAM
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 999 407 717
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KIZITO</h5>
                                    <h6 class="h6 mb-3">Mbamu</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kulumba N°39, Q/IZAM-Kingabua, C/Limete
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 819 531 360
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KRIST MOBIKISI</h5>
                                    <h6 class="h6 mb-3">Mbamu</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Munga N°26-28, Q/Sans Fil-Kingabwa
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 821 163 877
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">LIBIKI</h5>
                                    <h6 class="h6 mb-3">Kingabwa 1</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Mulamba N°12, Q/IZAM
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 900 345 484
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MERE THERESA</h5>
                                    <h6 class="h6 mb-3">Kingabwa 2</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kimiala N°24, Q/Salongo, C/Limete
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 991 106 703 / 902 496 239
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SAINT BERNARD</h5>
                                    <h6 class="h6 mb-3">Ndanu 1</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Colonel N°278, Q/Ndanu, C/Limete
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 911 451 247
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kingasani</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CH KINGASANI</h5>
                                    <h6 class="h6 mb-3">Kingasani</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Kingasani
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 811 669 295
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MOLENDE</h5>
                                    <h6 class="h6 mb-3">Molende</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Route de Mokali
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 820 097 710
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">TATA MOSALA</h5>
                                    <h6 class="h6 mb-3">Kingasani</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kiapioka N°75, Q/Kingasani
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">TEMBO</h5>
                                    <h6 class="h6 mb-3">Mulie</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Tembo N°32, C/Kimbanseke
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 103 399
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kinshasa</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SAINT PIERRE</h5>
                                    <h6 class="h6 mb-3">Dialo</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Kinshasa
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 866 279
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kintambo</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CH NGANDA</h5>
                                    <h6 class="h6 mb-3">Lubudi</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Q/Jamaïque
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">HOPITAL DE KINTAMBO</h5>
                                    <h6 class="h6 mb-3">Lisala</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Kintambo
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 892 422 955
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KIMIA</h5>
                                    <h6 class="h6 mb-3">Lisala</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Kintambo
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 848 423 236
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">LUBUDI</h5>
                                    <h6 class="h6 mb-3">Lubudi</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Kintambo
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 999 984 389
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kisenso</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CH KINSENSO</h5>
                                    <h6 class="h6 mb-3">Mission</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Bukala N°43-44, Q/Mission, C/Kisenso
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 032 470
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">REVELATION</h5>
                                    <h6 class="h6 mb-3">Mbuku</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Malomba N°3, Q/Mbuku
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 068 990
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">REVOLUTION</h5>
                                    <h6 class="h6 mb-3">Révolution</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kitona N°7, C/Kisenso
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 810 253 097
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SAINT AMBROISE</h5>
                                    <h6 class="h6 mb-3">Kabila</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. de l'Eglise N°1, Q/Kabila, C/Kisenso
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 823 386 971
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Kokolo</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CETA</h5>
                                    <h6 class="h6 mb-3">CETA</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Camp CETA, C/Nsele
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 813 516 309
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">HMR-MOBIKISI (ex BOBILADAWA)</h5>
                                    <h6 class="h6 mb-3">Kokolo 2</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Camp Kokolo, C/Gombe
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 816 996 203
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KOKOLO</h5>
                                    <h6 class="h6 mb-3">Kokolo 1</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Camp Kokolo, C/Gombe
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 999 321 808
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">PRISON NDOLO</h5>
                                    <h6 class="h6 mb-3">Ndolo</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Flambeau, Q/Ndolo
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 999 920 070
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">TSHATSHI</h5>
                                    <h6 class="h6 mb-3">Tshatshi</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Camp Tshatshi
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 895 527 127
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Lemba</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CH MONT AMBA</h5>
                                    <h6 class="h6 mb-3">Plateau</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>CNPP
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 030 363
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CLINIQUES UNIVERSITAIRES DE KINSHASA</h5>
                                    <h6 class="h6 mb-3">Plateau</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>UNIKIN
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 851 503 647 / 816 902 425
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">ELIMU SANTU</h5>
                                    <h6 class="h6 mb-3">Livulu</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Q/Livulu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 371 915
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CH. KIMBANGUISTE</h5>
                                    <h6 class="h6 mb-3">Foire</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Luange N°2, Q/Foire, C/Lemba
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 991 555 027
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">LISANGA</h5>
                                    <h6 class="h6 mb-3">Molo</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Findi N°242, C/Lemba
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Limete</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CLINIQUE BONDEKO</h5>
                                    <h6 class="h6 mb-3">Résidentiel</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Yolo N°7259, Q/Résidentiel, C/Limete
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 180 011
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CLINIQUE RAPHA</h5>
                                    <h6 class="h6 mb-3">Industriel 2</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>17ème Rue, Q/Industriel
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 898 399 763
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">HÔPITAL SAINT JOSEPH</h5>
                                    <h6 class="h6 mb-3">Résidentiel</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>13/14ème Rue, Q/Motel Fikin
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 031 896
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">IIème RUE</h5>
                                    <h6 class="h6 mb-3">Industriel 1</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>IIème Rue, Q/Industriel
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 892 144
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">LIBOKE</h5>
                                    <h6 class="h6 mb-3">Mfumu Mvula</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Q/Mombele
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 810 549 736
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SAINT AMAND</h5>
                                    <h6 class="h6 mb-3">Mombele</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Q/Mombele
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 171 969
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Lingwala</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CTA KABINDA / MSF Belgique</h5>
                                    <h6 class="h6 mb-3">La Voix du Peuple</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kabinda N°43, C/Lingwala, Réf. : En Face de la RTNC
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 841 362 374
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CDT KABINDA</h5>
                                    <h6 class="h6 mb-3">La Voix du Peuple</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kabinda N°43, C/Lingwala, Réf. : En Face de la RTNC
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 899 149 585
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">HÔPITAL DE KALEMBELEMBE</h5>
                                    <h6 class="h6 mb-3">Ngunda Lokombe</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kabinda N°43, C/Lingwala, Réf. : En Face de la RTNC
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 033 396
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Makala</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">NGONDO MARIA</h5>
                                    <h6 class="h6 mb-3">Kisantu</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kizenga N°32bis, C/Makala
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 815 104 548 / 995 003 414
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SAINT CLEMENT</h5>
                                    <h6 class="h6 mb-3">Tampa</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Makala N°5, C/Makala
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 898 931 919
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Maluku I</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MAJOR LEKA</h5>
                                    <h6 class="h6 mb-3">Monaco</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Maluku I
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MALUKU CS</h5>
                                    <h6 class="h6 mb-3">Monaco</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Maluku I
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 823 845 101 / 994 682 862
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MENKAO</h5>
                                    <h6 class="h6 mb-3">Menkao</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Nganstieme N°61
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 990 119 129 / 821 828 234
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Maluku II</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MBANKANA</h5>
                                    <h6 class="h6 mb-3">Mbakana</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Maluku II
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 999 488 670
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Masina I</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">CH ROI BAUDOUIN</h5>
                                    <h6 class="h6 mb-3">Boba</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Roi Baudouin Ier, Masina I
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 812 422 976 / 896 574 662 / 900 428 880
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BOLINGO</h5>
                                    <h6 class="h6 mb-3">Imbali</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kimpoko N°14, C/Masina
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 947 474 / 896 157 208
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">BOO NSUBA</h5>
                                    <h6 class="h6 mb-3">Télévision</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Mbakana
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 681 022
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">ESENGO</h5>
                                    <h6 class="h6 mb-3">Nzuzi Wa Mbombo</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Maïndombe 1 N°1/3, Quartier 1, C/Masina
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 898 971 561
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KITOKO</h5>
                                    <h6 class="h6 mb-3">Kimbangu</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Ntunu N°37, Q/Petro Congo, C/Masina
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 990 039 677
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MUTOMBO DIKEMBE</h5>
                                    <h6 class="h6 mb-3">Boba</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Lumumba et Av. Victoire, Q/Baobab, C/Masina
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 854 256 134
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">NTOMBWA YA MARIA</h5>
                                    <h6 class="h6 mb-3">Sans Fil</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Lola N°1, Q/3 Sans Fil, C/Masina
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 856 402 221
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal">Masina II</h3>
                            </div>
                            <ul class="list-group list-group-flush rounded-0">
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">ELONGA</h5>
                                    <h6 class="h6 mb-3">Tshuenge</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Boulevard Lumumba
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 899 567 777
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">KIMBELA</h5>
                                    <h6 class="h6 mb-3">Mandiangu</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Kimbela N°115, Q/Mandiangu
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 898 686 283 / 996 265 247
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">LUNDA</h5>
                                    <h6 class="h6 mb-3">Congo Aire</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Quartier 3, C/Masina
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 998 382 480
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">MAPELA</h5>
                                    <h6 class="h6 mb-3">Mapela</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Ngulu N°25, Quartier 5, C/Masina
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 816 587 121
                                    </p>
                                </li>
                                <li class="list-group-item px-4 py-3">
                                    <h5 class="h5 mb-1 fw-bold text-green">SAINT HILAIRE</h5>
                                    <h6 class="h6 mb-3">Matadi</h6>
                                    <p class="mb-1 fw-light">
                                        <i class="fa fa-map-marker-alt me-2"></i>Av. Siforco, Quartier 3, C/Masina
                                    </p>
                                    <p class="m-0 fw-light">
                                        <i class="fa fa-phone me-2"></i>(+243) 818 270 957
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