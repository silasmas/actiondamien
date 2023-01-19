@extends('layouts.template')

@section('guest-content')
    @if (Route::current()->getName() == 'projects_details')
        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s"
            style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/Projet_Papoose_1.jpg') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.inner_page.projects.title') }}
                </h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('projects') }}">{{ __('miscellaneous.main_menu.projects') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">Papoose</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- News Details Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-lg-5">
                    <div class="col-lg-8 mb-4 border-bottom border-default wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="h1 mb-4 fw-bold">LE PROJET PAPOOSE EN APPUI POUR L'ELIMINATION DES MALADIES DE LEPRE ET TUBERCULOSE A KINSHASA</h1>
                        <p class="lead mb-sm-5 mb-4 fw-bold">
                            <pre class="fs-5">
La ville province de Kinshasa, capitale de la République Démocratique du Congo, bénéficie depuis 2018, auprès de la fondation Papoose, d'un financement d'appui au projet d'assistance sociale, aux personnes les plus démunies affectées par la lèpre et la tuberculose

Malheureusement, la population majoritaire y vivant en dessous du seuil de la pauvreté, constitue à l'un des facteurs principaux, déterminant les difficultés d'adhérence au traitement de certaines maladies. Ces derniers bénéficient, dès lors, du financement du projet Papoose afin d'améliorer l'adhérence au traitement des malades et contribuer à un bon succès thérapeutique.

La Coordination Provinciale Lèpre et Tuberculose de Kinshasa (CPLT KINSHASA), avait procédé en 2021 a une sélection des malades conformément à un critère d'éligibilité qui ont été bénéficiaires de l'appui alimentaire à travers la distribution de vivres aux malades atteints de lèpre et de tuberculose. La distribution s'était déroulée pendant une durée de trois mois en raison de quatre jours par mois.

Depuis 2020, la prison de Makala, la prison de Ndolo, ainsi que le camp militaire des commandos Mangengenge de Maluku bénéficient de l'appui de ce projet. Durant la période de COVID-19, les bénéficiaires ont été particulièrement pris en charge à cause de la persistance de la pandémie de la COVID-19.
                            </pre>
                        </p>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="h4 mb-4 fw-bold">{{ __('miscellaneous.inner_page.projects.details.other') }}</h4>

                        <div class="row mb-lg-4 mb-5">
                            <div class="col-lg-5 col-sm-4 col-12 mb-lg-0 mb-2">
                                <div class="bg-image">
                                    <img src="{{ asset('assets/img/photo/Projet_Vente_d_Eau_1.jpg') }}" alt=""
                                        class="img-fluid">
                                    <div class="mask"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-8 col-12 paragraph-ellipsis">
                                <a href="{{ route('news_details', ['id' => 1]) }}">
                                    <p class="m-0 small" style="color: #999;">Vente d'eau</p>
                                    <p class="m-0 fw-bold text-danger text-truncate">PROJET DE VENTE D'EAU ET DE BLOCS DE GLACE FINANCE PAR ACTION DAMIEN DANS LA PROVINCE DE L'EQUATEUR</p>
                                    <p class="m-0 paragraph2" style="color: #000;">
                                        Depuis 2018, Action Damien a créé et financé un projet de vente d'eau en sachet ainsi que des blocs de glace, dans le village de Lyonda qui se trouve dans la province de l'Equateur.
                                        En effet, les revenus de cette activité permettent la prise en charge et le soutien de tous les anciens malades affectés par la lèpre, parfois, pensionnés et qui sont hébergés au pavillon de Lyonda.
                                    </p>
                                    <p class="mb-0 d-lg-none d-sm-inline-block">
                                        <a class="btn fw-bold pt-1 pb-2 ps-0 pe-3 rounded-0" href="{{ route('projects_details', ['id' => 1]) }}"
                                            style="color: black; border-bottom: 3px #6ba0af solid;">
                                            {{ __('miscellaneous.inner_page.news.link') }}
                                        </a>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <a class="btn btn-danger d-block" href="{{ route('projects') }}">
                                    {{ __('miscellaneous.inner_page.projects.see_more') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News Details End -->
    @else
        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s"
            style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/2.webp') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.inner_page.projects.title') }}
                </h1>
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
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-12 py-5 bg-blue wow fadeInUp" style="border-radius: 1.2rem;" data-wow-delay="0.1s">
                        <p class="lead m-0 text-center text-white">{{ __('miscellaneous.inner_page.projects.subtitle') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Subtitle End -->

        <!-- Projects list Start -->
        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 14rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/Projet_Papoose_1.jpg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-light text-blue py-1 px-3 mb-3">
                            Papoose
                        </div>
                        <h4 class="h4 text-blue fw-bold text-truncate">
                            <a href="{{ route('projects_details', ['id' => 1]) }}" class="text-blue">
                                LE PROJET PAPOOSE EN APPUI POUR L'ELIMINATION DES MALADIES DE LEPRE ET TUBERCULOSE A KINSHASA
                            </a>
                        </h4>
                        <p class="mb-0 paragraph2">
                            La ville province de Kinshasa, capitale de la République Démocratique du Congo, bénéficie depuis 2018, auprès de la fondation Papoose, d'un financement d'appui au projet d'assistance sociale, aux personnes les plus démunies affectées par la lèpre et la tuberculose
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0" href="{{ route('projects_details', ['id' => 1]) }}" style="color: black; border-bottom: 3px #6ba0af solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects list End -->
    @endif

    <!-- Search info Start -->
    {{-- <div class="container-xxl pb-5">
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
        </div> --}}
    <!-- Search info End -->

    {{-- <!-- Projects list Start -->
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-inline-block rounded-pill bg-light text-blue py-1 px-3 mb-3">Papoose</div>
                    <h3 class="h3 mb-4 text-blue fw-bold">
                        LE PROJET PAPOOSE EN APPUI POUR L'ELIMINATION DES MALADIES DE LEPRE ET TUBERCULOSE A KINSHASA
                    </h3>
                    <p class="mb-0">
                        <pre style="text-align: justify;">
                                <img src="{{ asset('assets/img/photo/Projet_Papoose_1.jpg') }}" alt="" class="project-image me-sm-4 mb-3 float-sm-start" style="border-radius: 1.2rem;">
La ville province de Kinshasa, capitale de la République Démocratique du Congo, bénéficie depuis 2018, auprès de la fondation Papoose, d'un financement d'appui au projet d'assistance sociale, aux personnes les plus démunies affectées par la lèpre et la tuberculose

Malheureusement, la population majoritaire y vivant en dessous du seuil de la pauvreté, constitue à l'un des facteurs principaux, déterminant les difficultés d'adhérence au traitement de certaines maladies. Ces derniers bénéficient, dès lors, du financement du projet Papoose afin d'améliorer l'adhérence au traitement des malades et contribuer à un bon succès thérapeutique.

                                <img src="{{ asset('assets/img/photo/Projet_Papoose_3.png') }}" alt="" class="project-image ms-sm-4 mb-3 float-sm-end" style="border-radius: 1.2rem;">
La Coordination Provinciale Lèpre et Tuberculose de Kinshasa (CPLT KINSHASA), avait procédé en 2021 a une sélection des malades conformément à un critère d'éligibilité qui ont été bénéficiaires de l'appui alimentaire à travers la distribution de vivres aux malades atteints de lèpre et de tuberculose. La distribution s'était déroulée pendant une durée de trois mois en raison de quatre jours par mois.

                                <img src="{{ asset('assets/img/photo/Projet_Papoose_2.jpg') }}" alt="" class="project-image me-sm-4 mt-lg-2 mb-3 float-sm-start" style="border-radius: 1.2rem;">
Depuis 2020, la prison de Makala, la prison de Ndolo, ainsi que le camp militaire des commandos Mangengenge de Maluku bénéficient de l'appui de ce projet. Durant la période de COVID-19, les bénéficiaires ont été particulièrement pris en charge à cause de la persistance de la pandémie de la COVID-19.
                            </pre>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5 border-top border-default">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-inline-block rounded-pill bg-light text-blue py-1 px-3 mb-3">Vente d'eau</div>
                    <h3 class="h3 mb-4 text-blue fw-bold">
                        PROJET DE VENTE D'EAU ET DE BLOCS DE GLACE FINANCE PAR ACTION DAMIEN DANS LA PROVINCE DE L'EQUATEUR
                    </h3>
                    <p class="mb-0">
                        <pre style="text-align: justify;">
                                <img src="{{ asset('assets/img/photo/Projet_Vente_d_Eau_1.jpg') }}" alt="" class="project-image me-sm-4 mb-3 float-sm-start" style="border-radius: 1.2rem;">
Depuis 2018, Action Damien a créé et financé un projet de vente d'eau en sachet ainsi que des blocs de glace, dans le village de Lyonda qui se trouve dans la province de l'Equateur.

                                <img src="{{ asset('assets/img/photo/Projet_Vente_d_Eau_3.jpg') }}" alt="" class="project-image ms-sm-4 mb-3 float-sm-end" style="border-radius: 1.2rem;">
En effet, les revenus de cette activité permettent la prise en charge et le soutien de tous les anciens malades affectés par la lèpre, parfois, pensionnés et qui sont hébergés au pavillon de Lyonda.
                            </pre>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects list End --> --}}

    <!-- Donate Start -->
    <div class="container-fluid py-5" style="background-color: #d5e6eb;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">
                        {{ __('miscellaneous.donate.title') }}</div>
                    <h1 class="display-6 mb-4">{{ __('miscellaneous.donate.description') }}</h1>
                    <p class="lead mb-0">{{ __('miscellaneous.donate.content') }}</p>
                </div>

                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-blue p-lg-5 p-sm-4 p-3 rounded">
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" id="name"
                                            placeholder="{{ __('miscellaneous.donate.form.name') }}">
                                        <label for="name">{{ __('miscellaneous.donate.form.name') }}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-light border-0" id="email"
                                            placeholder="{{ __('miscellaneous.donate.form.email') }}">
                                        <label for="email">{{ __('miscellaneous.donate.form.email') }}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-group d-flex justify-content-around">
                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio1">
                                        <label class="btn btn-light py-3" for="btnradio1">$10</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="btnradio2">
                                        <label class="btn btn-light py-3" for="btnradio2">$20</label>

                                        <input type="radio" class="btn-check btn-danger" name="btnradio" id="btnradio3"
                                            checked>
                                        <label class="btn btn-light py-3" for="btnradio3"><i
                                                class="fa fa-plus"></i></label>
                                    </div>
                                </div>
                                <div class="col-12 text-end">
                                    <button class="btn btn-danger mt-3 px-4" style="height: 60px;">
                                        {{ __('miscellaneous.donate.form.run') }}
                                        <div class="d-inline-flex btn-sm-square bg-white text-danger rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->
@endsection
