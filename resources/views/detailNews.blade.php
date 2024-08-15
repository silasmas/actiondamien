@extends('layouts.template')

@section('guest-content')

        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s"
            style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)),
            url({{ asset('storage/'.$detail->image) }}) center center no-repeat; background-size: cover;">
            <div class="container text-center">
                <h1 class="display-4 mb-4 text-white animated slideInDown">
                    {{ $detail->titre }}</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a class="text-white"
                                href="/">{{ __('miscellaneous.main_menu.home') }}</a></li>
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
                       @if ($detail->video!="")
                       <div class="ratio ratio-16x9 mb-4">
                           <iframe class="embed-responsive-item w-100"
                               src="https://www.youtube.com/embed/8_8kEiiHLtw?rel=0" style="border-radius: 1.2rem;"
                               allowfullscreen></iframe>
                       </div>
                       @endif
                        {{-- <h1 class="h1 mb-4 fw-bold">{{ $detail->image }}</h1> --}}
                        <div class="bg-image overflow-hidden mb-4" style="border-radius: 1.2rem;">
                            <img src="{{ asset('storage/'.$detail->image) }}" alt="" class="img-fluid">
                            <div class="mask"></div>
                        </div>
                        <pre class="fs-5">
                            {!!$detail->description !!}
                        </pre>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="h4 mb-4 fw-bold">{{ __('miscellaneous.inner_page.news.details.other') }}</h4>

                        @forelse ($actus as $a)
                        <div class="row mb-lg-4 mb-5">
                            <div class="col-lg-5 col-sm-4 col-12 mb-lg-0 mb-2">
                                <div class="bg-image">
                                    <img src="{{ asset('storage/'.$a->image) }}" alt=""
                                        class="img-fluid">
                                    <div class="mask"></div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-sm-8 col-12 paragraph-ellipsis">
                                <a href="{{ route('news_details', ['id' => $a->id]) }}">
                                    <p class="m-0 small" style="color: #999;">
                                        {{-- {{ \Carbon\Carbon::parse($a->created_at)->isoFormat('LL')  }} --}}
                                        {{ $a->getAnneeAttribute($a->annee) }}
                                    </p>
                                    <p class="m-0 fw-bold text-danger text-truncate">{{ $a->titre }}</p>
                                    <p class="m-0 paragraph2" style="color: #000;">
                                    {!! strip_tags($a->description )!!}
                                    </p>
                                    <p class="mb-0 d-lg-none d-sm-inline-block">
                                        <a class="btn fw-bold pt-1 pb-2 ps-0 pe-3 rounded-0"
                                            href="{{ route('news_details', ['id' => $a->id]) }}"
                                            style="color: black; border-bottom: 3px rgb(214, 63, 63) solid;">
                                            {{ __('miscellaneous.inner_page.news.link') }}
                                        </a>
                                    </p>
                                </a>
                            </div>
                        </div>
                        @empty

                        @endforelse


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

@endsection
