<div>
    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(25, 29, 35, .7), rgba(25, 29, 35, .7)), url({{ asset('assets/img/photo/1287056904.jpg') }}) top center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 mb-4 text-white animated slideInDown">{{ __('miscellaneous.main_menu.news') }}</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white"
                            href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                    <li class="breadcrumb-item text-yellow active" aria-current="page">
                        {{ __('miscellaneous.main_menu.news') }}</li>
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

                    <h2 class="display-5 m-0 " style="color: #FFF; col">
                        {{ __('miscellaneous.inner_page.news.title') }}</h2>

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
            <div class="app-loader"><i class="icofont-spinner-alt-4 rotate"></i></div>

            <div class="row align-items-center">
                @if (session()->has('message'))
                    <div class="col-lg-12">
                        <div class="alert alert-{{ session()->get('type') }} alert-dismissible fade show">
                            {{ session()->get('message') }}
                            <button data-bs-dismiss="alert" aria-label="Close" class="btn-close"
                                type="button"></button>
                        </div>
                    </div>
                @endif
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">

                    <div class="input-group">
                        <input type="text" class="form-control"
                            aria-label="{{ __('miscellaneous.inner_page.news.search') }}"
                            placeholder="{{ __('miscellaneous.inner_page.news.search') }}"
                            style="border-start-start-radius: 0.7rem; border-end-start-radius: 0.7rem;"
                            autocomplete="off" wire:model.debounce.500ms="actualite">
                        <span class="input-group-text d-sm-inline-block d-none p-0 border-0 bg-light overflow-hidden">
                            <select class="form-select rounded-0" wire:model="annee"
                                aria-label="{{ __('miscellaneous.inner_page.news.choose_year') }}"
                                style="background-color: transparent; padding-top: 1.15rem; padding-bottom: 1.1rem;">
                                <option class="small" selected disabled value="">
                                    {{ __('miscellaneous.inner_page.news.choose_year') }}</option>
                                <option  value="">{{ __('miscellaneous.inner_page.news.all_year') }}</option>
                                @for ($year = date("Y"); $year >= 1964; $year--)
                                    <option value="{{ $year }}">{{ $year }}</option>
                                @endfor
                            </select>
                        </span>
                        <span class="input-group-text p-0 border-danger overflow-hidden"
                            style="border-end-end-radius: 0.7rem; border-start-end-radius: 0.7rem;">
                            <button class="btn btn-danger px-4 rounded-0" style="height: 60px;"><i class="fa fa-search"
                                    @disabled(!empty($existe)) wire:click.prevent="actualiser()"></i></button>
                        </span>
                    </div>
                    <span>{{ $t }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Search info End -->
    <div class="col col-lg-3" wire:loading>
        <div
            style="display: flex;justify-content: center;align-items:center;background-color:black;
    position : fixed; top:0px;left:0px;z-index:9999; width:100%;height: 100%; opacity: .75;">
            <div style="color: #64d6e2" class="la-ball-clip-rotate-multiple la-3x">
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <!-- News list Start -->
    @forelse ($tab as $n)
        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-image overflow-hidden h-100" style="max-height: 16rem; border-radius: 1.2rem;">
                            <img src="{{ asset('storage/' . $n->image) }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                        <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">
                            {{ __('miscellaneous.inner_page.news.type1') }}</div>
                        <p class="small text-muted">
                            <i class="fa fa-calendar-alt me-2"></i><span class="d-inline-block me-2">
                                {{ $n->annee }}
                                {{-- {{ \Carbon\Carbon::parse($n->annee)->isoFormat('LL') }} --}}
                                {{-- {{ $n->getAnneeAttribute($n->annee) }} --}}
                            </span>
                            {{-- <i class="fa fa-eye me-2"></i><span class="d-inline-block me-2">354 vues</span> --}}
                        </p>
                        <h5 class="h5 text-danger fw-bold text-truncate">
                            <a href="{{ route('news_details', ['id' => $n->id]) }}" class="text-danger">
                                {{ $n->titre }}
                            </a>
                        </h5>
                        <p class="mb-0 paragraph">
                            {!! Str::limit($n->description, 200, '...') !!}
                        </p>
                        <p class="mb-0">
                            <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0"
                                href="{{ route('news_details', ['id' => $n->id]) }}"
                                style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                {{ __('miscellaneous.inner_page.news.link') }}
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    @empty
        <div class="container-xxl py-5 border-top border-default">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="text-danger text-center">
                            @lang('miscellaneous.inner_page.hospitals.vide')
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 mx-auto wow fadeInUp" data-wow-delay="0.1s">
                    <div class="col-12 form-group text-center">

                        {{-- {{ $newss->links() }} --}}

                    </div>
                    {{-- <a href="#" class="btn btn-danger d-block shadow-0">
                      {{ __('miscellaneous.inner_page.news.see_more') }}</a> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- News list End -->
</div>
