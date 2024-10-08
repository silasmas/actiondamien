<div>
    <!-- Page Header Start -->
    <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s"
        style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/ANNEXE_3_PHOTO_DU_CEDA_1.jpg') }}) center center no-repeat; background-size: cover;">
        <div class="container text-center">

            <h6 class="display-6 mb-4 text-white animated slideInDown">{{ __('miscellaneous.hospitals.link3') }}</h6>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white"
                            href="./">{{ __('miscellaneous.main_menu.home') }}</a></li>
                    <li class="breadcrumb-item text-yellow active" aria-current="page">
                        {{ __('miscellaneous.hospitals.link') }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Search info Start -->
    <div class="container-xxl py-4 bg-light">
        <div class="container">
            <div class="row align-items-center">
                @if (session()->has('message'))
                    <div class="col-12 wow fadeInUp">
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
                            aria-label="{{ __('miscellaneous.inner_page.hospitals.search') }}"
                            placeholder="{{ __('miscellaneous.inner_page.hospitals.search') }}"
                            style="border-start-start-radius: 0.7rem; border-end-start-radius: 0.7rem;"
                            autocomplete="off" wire:model.debounce.500ms="center">
                        <span class="input-group-text p-0 border-0 overflow-hidden"
                            style="border-end-end-radius: 0.7rem; border-start-end-radius: 0.7rem;">
                            <button class="btn btn-green px-4 rounded-0" style="height: 60px;"><i
                                    class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search info End -->

    <!-- Legend Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="text-center mx-auto mb-3 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="h1 m-0">{{ __('miscellaneous.inner_page.hospitals.legend.title') }}</h1>
            </div>

            <div class="row text-center align-items-center">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.3s">
                    <span class="d-inline-block me-4 mb-4"><i class="fa fa-circle fs-4 me-1 align-middle"
                            style="color: #DC3545;"></i>{{ __('miscellaneous.inner_page.hospitals.legend.data1') }}</span>
                    <span class="d-inline-block me-4 mb-4"><i class="fa fa-circle fs-4  me-1 align-middle"
                            style="color: #F5A348;"></i>{{ __('miscellaneous.inner_page.hospitals.legend.data2') }}</span>
                    <span class="d-inline-block me-4 mb-4"><i class="fa fa-circle fs-4  me-1 align-middle"
                            style="color: #4FB9A9;"></i>{{ __('miscellaneous.inner_page.hospitals.legend.data3') }}</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Legend End -->
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
    <!-- Hospitals list Start -->
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row g-5">
                @forelse ($tab as $ce)
                    <div class="col-lg-6 col-sm-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="card border border-default overflow-hidden shadow-0">
                            <div class="card-header bg-light">
                                <h3 class="h3 m-0 fw-normal" style="color: #DC3545;">{{ $ce->nom }}</h3>
                            </div>
                            @forelse ($ce->air as $r)
                            @forelse ($r->centre as $c)
                                <ul class="list-group list-group-flush rounded-0">
                                    <li class="list-group-item px-4 py-3">
                                        <h5 class="h5 mb-1 fw-bold " style="color: #F5A348;">{{ $r->nom }}</h5>
                                        {{-- <hr> --}}
                                            <h6 class="h6 mb-3 " style="color: #4FB9A9;">{{ $c->nom }}</h6>
                                            <p class="mb-1 fw-light">
                                                <i class="fa fa-map-marker-alt me-2"></i>
                                                {!! strip_tags($c->adresse)!!}
                                            </p>
                                            <p class="m-0 fw-light">
                                                <i class="fa fa-phone me-2"></i>{{ $c->phone }}
                                            </p>
                                        </li>
                                    </ul>
                                    @empty
                                    @endforelse
                            @empty
                            @endforelse
                        </div>
                    </div>
                @empty
                    <div class="col-12 wow fadeInUp">
                        <div class="alert alert-danger fade show">
                            @lang('miscellaneous.inner_page.hospitals.empty')
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </div>
    <!-- Hospitals list End -->
</div>
