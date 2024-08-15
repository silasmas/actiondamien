@extends('layouts.template')

@section('guest-content')
@if (Route::current()->getName() == 'sensibilization_details')
<!-- Page Header Start -->
<div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s"
    style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('storage/'.$detail_sen->photo) }}) center center no-repeat; background-size: cover;">
    <div class="container text-center">
        <h1 class="display-4 mb-4 text-white animated slideInDown">{{
            __('miscellaneous.main_menu.testimonials.sensibilization') }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a>
                </li>
                <li class="breadcrumb-item"><a class="text-white" href="{{ route('sensibilization') }}">{{
                        __('miscellaneous.main_menu.testimonials.sensibilization') }}</a></li>
                <li class="breadcrumb-item text-yellow active" aria-current="page">{{$detail_sen->titre }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Title Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row mx-0">
            <div class="col-12 p-5 bg-green wow fadeInUp" style="border-radius: 1.2rem;" data-wow-delay="0.1s">
                <h1 class="display-4 m-0 text-center text-white fw-normal">
                    {{$detail_sen->titre}}
                </h1>
            </div>
        </div>
    </div>
</div>
<!-- Title End -->

<!-- Content Start -->
<div class="container-xxl py-5">
    <div class="container" style="text-align: justify;">
        <div class="row">
            <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                <p class="lead mb-sm-5 mb-4 fw-bold" style="color: #000;">{!! $detail_sen->description !!}</p>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@else
<!-- Page Header Start -->
<div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s"
    style="background: linear-gradient(rgba(25, 29, 35, .5), rgba(25, 29, 35, .5)), url({{ asset('assets/img/photo/1.jpg') }}) center center no-repeat; background-size: cover;">
    <div class="container text-center">
        <h1 class="display-4 mb-4 text-white animated slideInDown">{{
            __('miscellaneous.main_menu.testimonials.sensibilization') }}</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="./">{{ __('miscellaneous.main_menu.home') }}</a>
                </li>
                <li class="breadcrumb-item text-yellow active" aria-current="page">{{
                    __('miscellaneous.main_menu.testimonials.sensibilization') }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->

<!-- Sensibilizations list Start -->
<div class="container-xxl py-5 border-top border-default">
    @forelse ($sensible as $sen)
    <div class="container py-3">
        <div class="row">
            <div class="col-lg-5 col-sm-6 mb-lg-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-image overflow-hidden h-100" style="max-height: 14rem; border-radius: 1.2rem;">
                    <img src="{{ asset('storage/'.$sen->photo) }}" alt="" class="img-fluid">
                    <div class="mask"></div>
                </div>
            </div>

            <div class="col-lg-7 col-sm-6 wow fadeInUp paragraph-ellipsis" data-wow-delay="0.3s">
                <h4 class="h4 mt-1 text-green fw-bold text-truncate">
                    <a href="{{ route('sensibilization_details', ['id' =>$sen->id]) }}" class="text-green">
                        {{$sen->titre}}
                    </a>
                </h4>
                <p class="mb-0 paragraph3 text-truncate">
                    {{-- {{$sen->titre}} --}}
                    {{-- {!! Str::limit($sen->description, 200, '...') !!} --}}
                    {{-- {{ __('miscellaneous.inner_page.sensibilization.paragraph3') }} --}}
                </p><br>
                <p class="mb-0">
                    <a class="btn fw-bold py-2 ps-0 pe-3 rounded-0"
                        href="{{ route('sensibilization_details', ['id' => $sen->id]) }}"
                        style="color: black; border-bottom: 3px #4cb4a5 solid;">
                        {{ __('miscellaneous.inner_page.news.link') }}
                    </a>
                </p>
            </div>
        </div>

    </div>
    @empty
    @endforelse
</div>
<!-- Sensibilizations list End -->
@endif

@endsection
