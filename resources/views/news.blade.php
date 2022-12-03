@extends('layouts.template')

@section('guest-content')
    @if (Route::current()->getName() == 'news_details')
        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s"
            style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), 
            url({{ asset('assets/img/photo/1651170274.jpeg') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">
                    {{ __('miscellaneous.inner_page.news.details.title') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white"
                                href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item"><a class="text-white"
                                href="{{ route('news') }}">{{ __('miscellaneous.main_menu.news') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">
                            {{ __('miscellaneous.inner_page.news.details.title') }}</li>
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
                        <div class="ratio ratio-16x9 mb-4">
                            <iframe class="embed-responsive-item w-100"
                                src="https://www.youtube.com/embed/8_8kEiiHLtw?rel=0" style="border-radius: 1.2rem;"
                                allowfullscreen></iframe>
                        </div>
                        <h1 class="h1 mb-4 fw-bold">La visite du CEDA par Mr. Jo INDEKEU, diffusé à la RTNC</h1>
                        <div class="bg-image overflow-hidden mb-4" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/1651170274.jpeg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                        <pre class="fs-5">
                            
                        </pre>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="h4 mb-4 fw-bold">{{ __('miscellaneous.inner_page.news.details.other') }}</h4>

                        <div class="row mb-lg-4 mb-5">
                            <div class="col-lg-5 col-sm-4 col-12 mb-lg-0 mb-2">
                                <div class="bg-image">
                                    <img src="{{ asset('assets/img/photo/1651170274.jpeg') }}" alt=""
                                        class="img-fluid">
                                    <div class="mask"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-8 col-12 paragraph-ellipsis">
                                <a href="{{ route('news_details', ['id' => 1]) }}">
                                    <p class="m-0 small" style="color: #999;">28 Avr. 2022</p>
                                    <p class="m-0 fw-bold text-danger text-truncate">Visite de la nouvelle directrice de la
                                        DGD (Belgique) Mme Heidy Rombouts au CEDA - Kinshasa</p>
                                    <p class="m-0 paragraph2" style="color: #000;">En effet, lors de son passage en RD
                                        Congo, Mme Heidy Rombouts, la directrice de la direction générale de la coopération
                                        au développement Belge. Nous a fait l’honneur de venir voir le Centre d’Excellence
                                        Damien (CEDA). Cet hôpital qui soigne de manière prodigieuse les malades affectés
                                        par la tuberculose ultra résistante. Hôpital entièrement financé par Action Damien
                                        et la DGD.</p>
                                    <p class="mb-0 d-lg-none d-sm-inline-block">
                                        <a class="btn fw-bold pt-1 pb-2 ps-0 pe-3 rounded-0"
                                            href="{{ route('news_details', ['id' => 1]) }}"
                                            style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                            {{ __('miscellaneous.inner_page.news.link') }}
                                        </a>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="row mb-lg-4 mb-5">
                            <div class="col-lg-5 col-sm-4 col-12 mb-lg-0 mb-2">
                                <div class="bg-image">
                                    <img src="{{ asset('assets/img/photo/1646304344.jpeg') }}" alt=""
                                        class="img-fluid">
                                    <div class="mask"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-8 col-12 paragraph-ellipsis">
                                <a href="{{ route('news_details', ['id' => 2]) }}">
                                    <p class="m-0 small" style="color: #999;">3 Mars 2022</p>
                                    <p class="m-0 fw-bold text-danger text-truncate">Andy BIESE y a représenté Action Damien
                                        à la 1ère édition du Africell Congo River Marathon.</p>
                                    <p class="m-0 paragraph2" style="color: #000;">La 1ère édition du Africell Congo River
                                        Marathon a eu lieu à Kinshasa le week-end le 29 août 2021. Il s'agit d'un marathon
                                        complet, un semi-marathon, 10km Fun Run pour permettre au plus grand nombre de
                                        participer !</p>
                                    <p class="mb-0 d-lg-none d-sm-inline-block">
                                        <a class="btn fw-bold pt-1 pb-2 ps-0 pe-3 rounded-0"
                                            href="{{ route('news_details', ['id' => 2]) }}"
                                            style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                            {{ __('miscellaneous.inner_page.news.link') }}
                                        </a>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="row mb-lg-4 mb-5">
                            <div class="col-lg-5 col-sm-4 col-12 mb-lg-0 mb-2">
                                <div class="bg-image">
                                    <img src="{{ asset('assets/img/photo/1646082394.jpeg') }}" alt=""
                                        class="img-fluid">
                                    <div class="mask"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-8 col-12 paragraph-ellipsis">
                                <a href="{{ route('news_details', ['id' => 3]) }}">
                                    <p class="m-0 small" style="color: #999;">8 Fév. 2022</p>
                                    <p class="m-0 fw-bold text-danger text-truncate">L'engagement du Ministre de la Santé -
                                        Lèpre.</p>
                                    <p class="m-0 paragraph2" style="color: #000;">Le ministre de la santé publique, hygiène
                                        et prévention, le docteur Jean-Jacques Mbungani a reçu en audience ce jeudi 20 Mai
                                        2021, la coordinatrice de l’organisation des personnes affectées par la lèpre au
                                        Congo (OPALCO), Sandra Dongo et a promis la prise en charge de ces derniers.</p>
                                    <p class="mb-0 d-lg-none d-sm-inline-block">
                                        <a class="btn fw-bold pt-1 pb-2 ps-0 pe-3 rounded-0"
                                            href="{{ route('news_details', ['id' => 3]) }}"
                                            style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                            {{ __('miscellaneous.inner_page.news.link') }}
                                        </a>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-12">
                                <a class="btn btn-danger d-block" href="{{ route('news') }}">
                                    {{ __('miscellaneous.inner_page.news.see_more') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- News Details End -->
    @else
        @livewire('news')
    @endif
@endsection
