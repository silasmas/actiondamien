@extends('layouts.template')

@section('guest-content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/2.webp') }}) center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.inner_page.projects.title') }}
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white"
                            href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                    <li class="breadcrumb-item text-yellow active" aria-current="page">
                        {{ __('miscellaneous.main_menu.projects') }}</li>
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

    <!-- Projects list Start -->
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-inline-block rounded-pill bg-light text-blue py-1 px-3 mb-3">Papoose</div>
                    <h3 class="h3 mb-4 text-blue fw-bold">
                        LE PROJET PAPOOSE EN APPUI POUR L???ELIMINATION DES MALADIES DE LEPRE ET TUBERCULOSE A KINSHASA
                    </h3>
                    <p class="mb-0">
                        <pre style="text-align: justify;">
                                <img src="{{ asset('assets/img/photo/Projet_Papoose_1.jpg') }}" alt="" class="project-image me-sm-4 mb-3 float-sm-start" style="border-radius: 1.2rem;">
La ville province de Kinshasa, capitale de la R??publique D??mocratique du Congo, b??n??ficie depuis 2018, aupr??s de la fondation Papoose, d???un financement d'appui au projet d'assistance sociale, aux personnes les plus d??munies affect??es par la l??pre et la tuberculose

Malheureusement, la population majoritaire y vivant en dessous du seuil de la pauvret??, constitue ?? l'un des facteurs principaux, d??terminant les difficult??s d???adh??rence au traitement de certaines maladies. Ces derniers b??n??ficient, d??s lors, du financement du projet Papoose afin d'am??liorer l'adh??rence au traitement des malades et contribuer ?? un bon succ??s th??rapeutique.

                                <img src="{{ asset('assets/img/photo/Projet_Papoose_3.png') }}" alt="" class="project-image ms-sm-4 mb-3 float-sm-end" style="border-radius: 1.2rem;">
La Coordination Provinciale L??pre et Tuberculose de Kinshasa (CPLT KINSHASA), avait proc??d?? en 2021 a une s??lection des malades conform??ment ?? un crit??re d'??ligibilit?? qui ont ??t?? b??n??ficiaires de l'appui alimentaire ?? travers la distribution de vivres aux malades atteints de l??pre et de tuberculose. La distribution s'??tait d??roul??e pendant une dur??e de trois mois en raison de quatre jours par mois.

                                <img src="{{ asset('assets/img/photo/Projet_Papoose_2.jpg') }}" alt="" class="project-image me-sm-4 mt-lg-2 mb-3 float-sm-start" style="border-radius: 1.2rem;">
Depuis 2020, la prison de Makala, la prison de Ndolo, ainsi que le camp militaire des commandos Mangengenge de Maluku b??n??ficient de l'appui de ce projet. Durant la p??riode de COVID-19, les b??n??ficiaires ont ??t?? particuli??rement pris en charge ?? cause de la persistance de la pand??mie de la COVID-19.
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
                        PROJET DE VENTE D???EAU ET DE BLOCS DE GLACE FINANCE PAR ACTION DAMIEN DANS LA PROVINCE DE L???EQUATEUR
                    </h3>
                    <p class="mb-0">
                        <pre style="text-align: justify;">
                                <img src="{{ asset('assets/img/photo/Projet_Vente_d_Eau_1.jpg') }}" alt="" class="project-image me-sm-4 mb-3 float-sm-start" style="border-radius: 1.2rem;">
Depuis 2018, Action Damien a cr???? et financ?? un projet de vente d'eau en sachet ainsi que des blocs de glace, dans le village de Lyonda qui se trouve dans la province de l???Equateur.

                                <img src="{{ asset('assets/img/photo/Projet_Vente_d_Eau_3.jpg') }}" alt="" class="project-image ms-sm-4 mb-3 float-sm-end" style="border-radius: 1.2rem;">
En effet, les revenus de cette activit?? permettent la prise en charge et le soutien de tous les anciens malades affect??s par la l??pre, parfois, pensionn??s et qui sont h??berg??s au pavillon de Lyonda.
                            </pre>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects list End -->

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
