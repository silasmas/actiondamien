@extends('layouts.guest')

@section('guest-content')

    @if (Route::current()->getName() == 'news_details')
        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/1651170274.jpeg') }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.inner_page.news.details.title') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('news') }}">{{ __('miscellaneous.main_menu.news') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.inner_page.news.details.title') }}</li>
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
                            <iframe class="embed-responsive-item w-100" src="https://www.youtube.com/embed/8_8kEiiHLtw?rel=0" style="border-radius: 1.2rem;" allowfullscreen></iframe>
                        </div>
                        <h1 class="h1 mb-4 fw-bold">La visite du CEDA par Mr. Jo INDEKEU, diffusé à la RTNC</h1>
                        <div class="bg-image overflow-hidden mb-4" style="border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/1651170274.jpeg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                        <pre class="fs-5">
Visite de l'ambassadeur de la Belgique en RD Congo, Mr. Jo INDEKEU & du Ministre Conseiller Mr. Stefan MEERSCHAERT, à la remise officielle de la nouvelle ambulance au CEDA.

(Présence également du Bourgmestre de Ngaliema, du Représentant d'AD Congo, du Directeur Médical du CEDA, des Directeurs des deux programmes Lèpre & Tuberculose et du Ministre conseiller en charge de la Coopération au Développement.)
                        </pre>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="h4 mb-4 fw-bold">{{ __('miscellaneous.inner_page.news.details.other') }}</h4>

                        <div class="row mb-lg-4 mb-5">
                            <div class="col-lg-5 col-sm-4 col-12 mb-lg-0 mb-2">
                                <div class="bg-image">
                                    <img src="{{ asset('assets/img/photo/1651170274.jpeg') }}" alt="" class="img-fluid">
                                    <div class="mask"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-8 col-12 paragraph-ellipsis">
                                <a href="{{ route('news_details', ['id' => 1]) }}">
                                    <p class="m-0 small" style="color: #999;">28 Avr. 2022</p>
                                    <p class="m-0 fw-bold text-danger text-truncate">Visite de la nouvelle directrice de la DGD (Belgique) Mme Heidy Rombouts au CEDA - Kinshasa</p>
                                    <p class="m-0 paragraph2" style="color: #000;">En effet, lors de son passage en RD Congo, Mme Heidy Rombouts, la directrice de la direction générale de la coopération au développement Belge. Nous a fait l’honneur de venir voir le Centre d’Excellence Damien (CEDA). Cet hôpital qui soigne de manière prodigieuse les malades affectés par la tuberculose ultra résistante. Hôpital entièrement financé par Action Damien et la DGD.</p>
                                    <p class="mb-0 d-lg-none d-sm-inline-block">
                                        <a class="btn fw-bold pt-1 pb-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 1]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                            {{ __('miscellaneous.inner_page.news.link') }}
                                        </a>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="row mb-lg-4 mb-5">
                            <div class="col-lg-5 col-sm-4 col-12 mb-lg-0 mb-2">
                                <div class="bg-image">
                                    <img src="{{ asset('assets/img/photo/1646304344.jpeg') }}" alt="" class="img-fluid">
                                    <div class="mask"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-8 col-12 paragraph-ellipsis">
                                <a href="{{ route('news_details', ['id' => 2]) }}">
                                    <p class="m-0 small" style="color: #999;">3 Mars 2022</p>
                                    <p class="m-0 fw-bold text-danger text-truncate">Andy BIESE y a représenté Action Damien à la 1ère édition du Africell Congo River Marathon.</p>
                                    <p class="m-0 paragraph2" style="color: #000;">La 1ère édition du Africell Congo River Marathon a eu lieu à Kinshasa le week-end le 29 août 2021. Il s'agit d'un marathon complet, un semi-marathon, 10km Fun Run pour permettre au plus grand nombre de participer !</p>
                                    <p class="mb-0 d-lg-none d-sm-inline-block">
                                        <a class="btn fw-bold pt-1 pb-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 2]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                            {{ __('miscellaneous.inner_page.news.link') }}
                                        </a>
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="row mb-lg-4 mb-5">
                            <div class="col-lg-5 col-sm-4 col-12 mb-lg-0 mb-2">
                                <div class="bg-image">
                                    <img src="{{ asset('assets/img/photo/1646082394.jpeg') }}" alt="" class="img-fluid">
                                    <div class="mask"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-8 col-12 paragraph-ellipsis">
                                <a href="{{ route('news_details', ['id' => 3]) }}">
                                    <p class="m-0 small" style="color: #999;">8 Fév. 2022</p>
                                    <p class="m-0 fw-bold text-danger text-truncate">L'engagement du Ministre de la Santé - Lèpre.</p>
                                    <p class="m-0 paragraph2" style="color: #000;">Le ministre de la santé publique, hygiène et prévention, le docteur Jean-Jacques Mbungani a reçu en audience ce jeudi 20 Mai 2021, la coordinatrice de l’organisation des personnes affectées par la lèpre au Congo (OPALCO), Sandra Dongo et a promis la prise en charge de ces derniers.</p>
                                    <p class="mb-0 d-lg-none d-sm-inline-block">
                                        <a class="btn fw-bold pt-1 pb-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 3]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
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

        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(25, 29, 35, .7), rgba(25, 29, 35, .7)), url({{ asset('assets/img/photo/1287056904.jpg') }}) top center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.main_menu.news') }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                        <li class="breadcrumb-item text-yellow active" aria-current="page">{{ __('miscellaneous.main_menu.news') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row mx-0 align-items-center bg-danger" style=" border-radius: 1.2rem;">
                    <div class="col-sm-6 mb-3 px-5 py-4 wow fadeInUp" data-wow-delay="0.1s">

                        <h2 class="display-5 m-0 " style="color: #FFF; col">{{ __('miscellaneous.inner_page.news.title') }}</h2>

                        {{-- <h2 class="display-5 m-0 text-white">{{ __('miscellaneous.inner_page.news.title') }}</h2> --}}

                    </div>
                    <div class="col-sm-6 px-5 py-4 wow fadeInUp" data-wow-delay="0.3s">
                        <p class="m-0 text-white">{{ __('miscellaneous.inner_page.news.subtitle') }}</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Search info Start -->
        <div class="container-xxl pb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control" aria-label="{{ __('miscellaneous.inner_page.news.search') }}" placeholder="{{ __('miscellaneous.inner_page.news.search') }}" style="border-start-start-radius: 0.7rem; border-end-start-radius: 0.7rem;">
                            <span class="input-group-text d-sm-inline-block d-none p-0 border-0 bg-light overflow-hidden">
                                <select class="form-select rounded-0" aria-label="{{ __('miscellaneous.inner_page.news.choose_year') }}" style="background-color: transparent; padding-top: 1.15rem; padding-bottom: 1.1rem;">
                                    <option class="small" selected disabled>{{ __('miscellaneous.inner_page.news.choose_year') }}</option>
                                    <option>{{ __('miscellaneous.inner_page.news.all_year') }}</option>
        @for ($year = 2022; $year >= 1964; $year--)
                                    <option>{{ $year }}</option>
        @endfor
                                </select>
                            </span>
                            <span class="input-group-text p-0 border-danger overflow-hidden" style="border-end-end-radius: 0.7rem; border-start-end-radius: 0.7rem;">
                                <button class="btn btn-danger px-4 rounded-0" style="height: 60px;"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search info End -->

        <!-- News list Start -->
        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/1651170274.jpeg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.news.type1') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2"></i><span class="d-inline-block me-2">28 Avr. 2022</span>
                            <i class="fa fa-eye me-2"></i><span class="d-inline-block me-2">354 vues</span>
                        </p>
                        <h5 class="h5 text-danger fw-bold text-truncate">
                            <a href="{{ route('news_details', ['id' => 1]) }}" class="text-danger">Visite de la nouvelle directrice de la DGD (Belgique) Mme Heidy Rombouts au CEDA - Kinshasa</a>
                        </h5>
                        <p class="mb-0 paragraph">
                            En effet, lors de son passage en RD Congo, Mme Heidy Rombouts, la directrice de la direction générale de la coopération au développement Belge. Nous a fait l’honneur de venir voir le Centre d’Excellence Damien (CEDA). Cet hôpital qui soigne de manière prodigieuse les malades affectés par la tuberculose ultra résistante. Hôpital entièrement financé par Action Damien et la DGD.
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 1]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/1646304344.jpeg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.news.type1') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2"></i><span class="d-inline-block me-2">3 Mars 2022</span>
                            <i class="fa fa-eye me-2"></i><span class="d-inline-block me-2">277 vues</span>
                        </p>
                        <h5 class="h5 text-danger fw-bold text-truncate">
                            <a href="{{ route('news_details', ['id' => 2]) }}" class="text-danger">Andy BIESE y a représenté Action Damien à la 1ère édition du Africell Congo River Marathon.</a>
                        </h5>
                        <p class="mb-0 paragraph">
                            La 1ère édition du Africell Congo River Marathon a eu lieu à Kinshasa le week-end le 29 août 2021. Il s'agit d'un marathon complet, un semi-marathon, 10km Fun Run pour permettre au plus grand nombre de participer !
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 2]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/1646082394.jpeg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.news.type1') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2"></i><span class="d-inline-block me-2">8 Fév. 2022</span>
                            <i class="fa fa-eye me-2"></i><span class="d-inline-block me-2">345 vues</span>
                        </p>
                        <h5 class="h5 text-danger fw-bold text-truncate">
                            <a href="{{ route('news_details', ['id' => 3]) }}" class="text-danger">L'engagement du Ministre de la Santé - Lèpre.</a>
                        </h5>
                        <p class="mb-0 paragraph">
                            Le ministre de la santé publique, hygiène et prévention, le docteur Jean-Jacques Mbungani a reçu en audience ce jeudi 20 Mai 2021, la coordinatrice de l’organisation des personnes affectées par la lèpre au Congo (OPALCO), Sandra Dongo et a promis la prise en charge de ces derniers.
                            Cette structure locale est venue soumettre au Ministre de tutelle ses désidératas par rapport à la prise en charge des personnes souffrant de cette maladie sur l’ensemble du territoire national.

                            Nous avons expliqué au Ministre de la santé nos difficultés en termes d’accès aux soins de santé. Nous avons surtout insisté sur la discrimination dont les lépreux sont victimes en RDC. Et, pourtant notre traitement est très différent et spécifique. Beaucoup parmi les patients, à travers tout le pays se sentent discriminés et souhaitent l’implication du gouvernement à travers le ministère de la Santé, Hygiène et Prévention afin de répondre à nos cris d’alarme, a indiqué Sandra Dongo.


                            Par ailleurs, la coordonnatrice de l’OPALCO s’est dite très satisfaite de cette rencontre avec le patron de la Santé publique. « Le Ministre Jean-Jacques Mbungani s’est donné la peine de nous écouter. Ses paroles nous ont beaucoup rassuré et ont suscité une lueur d’espoir. Nous croyons que les lépreux congolais auront une suite favorable dans les tous prochains jours », a-t-elle déclaré.
                            Créée le 15 février 2017, l’OPALCO est une organisation non gouvernementale basée à Kinshasa qui œuvre pour la lutte contre la lèpre en RDC. La structure travaille avec l’appui des différents partenaires internationaux tels que TLM Congo (The Leprosy Mission), Action Damien et autres.
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 3]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/1646087603.jpeg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.news.type1') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2"></i><span class="d-inline-block me-2">6 Fév. 2022</span>
                            <i class="fa fa-eye me-2"></i><span class="d-inline-block me-2">286 vues</span>
                        </p>
                        <h5 class="h5 text-danger fw-bold text-truncate">
                            <a href="{{ route('news_details', ['id' => 4]) }}" class="text-danger">Formation "Gender"</a>
                        </h5>
                        <p class="mb-0 paragraph">
                            Isadora De Backer qui est venu expressément depuis la Belgique pour nous donner cours à ce sujet pendant pratiquement 10 jours
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 4]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/1646046826.jpeg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.news.type1') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2"></i><span class="d-inline-block me-2">9 Jan. 2022</span>
                            <i class="fa fa-eye me-2"></i><span class="d-inline-block me-2">431 vues</span>
                        </p>
                        <h5 class="h5 text-danger fw-bold text-truncate">
                            <a href="{{ route('news_details', ['id' => 5]) }}" class="text-danger">Projet Papoose</a>
                        </h5>
                        <p class="mb-0 paragraph">
                            Projet Papoose - Suite de distribution des vivres du mois d'aout, à Kinshasa. Mall de pott détécté chez une enfant de moins de 10 ans.
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 5]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/16463026882.jpeg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.news.type1') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2"></i><span class="d-inline-block me-2">26 Mai 2021</span>
                            <i class="fa fa-eye me-2"></i><span class="d-inline-block me-2">195 vues</span>
                        </p>
                        <h5 class="h5 text-danger fw-bold text-truncate">
                            <a href="{{ route('news_details', ['id' => 6]) }}" class="text-danger">Visite de l'Ambassadeur de Belgique en RDC, Mr Stefan INDEKEU au CEDA</a>
                        </h5>
                        <p class="mb-0 paragraph">
                            Visite de l'ambassadeur de la Belgique en RD Congo, Mr. Jo INDEKEU & du Ministre Conseiller Mr. Stefan MEERSCHAERT, à la remise officielle de la nouvelle ambulance au CEDA.
                            (Présence également du Bourgmestre de Ngaliema, du Représentant d'AD Congo, du Directeur Médical du CEDA, des Directeurs des deux programmes Lèpre & Tuberculose et du Ministre conseiller en charge de la Coopération au Développement.)
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 6]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('assets/img/photo/1646324165.jpeg') }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">{{ __('miscellaneous.inner_page.news.type1') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2"></i><span class="d-inline-block me-2">16 Mai 2021</span>
                            <i class="fa fa-eye me-2"></i><span class="d-inline-block me-2">197 vues</span>
                        </p>
                        <h5 class="h5 text-danger fw-bold text-truncate">
                            <a href="{{ route('news_details', ['id' => 7]) }}" class="text-danger">La visite du CEDA par Mr. Jo INDEKEU, diffusé à la RTNC</a>
                        </h5>
                        <p class="mb-0 paragraph">
                            Visite de l'ambassadeur de la Belgique en RD Congo, Mr. Jo INDEKEU & du Ministre Conseiller Mr. Stefan MEERSCHAERT, à la remise officielle de la nouvelle ambulance au CEDA.
                            (Présence également du Bourgmestre de Ngaliema, du Représentant d'AD Congo, du Directeur Médical du CEDA, des Directeurs des deux programmes Lèpre & Tuberculose et du Ministre conseiller en charge de la Coopération au Développement.)
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0" href="{{ route('news_details', ['id' => 7]) }}" style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-xxl pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                        <a href="#" class="btn btn-danger d-block shadow-0">
                            {{ __('miscellaneous.inner_page.news.see_more') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- News list End -->
    @endif

@endsection
