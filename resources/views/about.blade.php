@extends('layouts.guest')

@section('guest-content')

        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                            <img class="position-absolute w-100 h-100 pt-5 pe-5" src="{{ asset('assets/img/photo/5.webp') }}" alt="" style="object-fit: cover;">
                            <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="{{ asset('assets/img/photo/13.webp') }}" alt="" style="width: 200px; height: 150px;">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <div class="d-inline-block rounded-pill bg-secondary text-danger py-1 px-3 mb-3">A propos</div>
                            <h1 class="display-6 mb-5">{{ __('miscellaneous.actiondamien_slogan') }}</h1>
                            <div class="bg-light border-bottom border-5 border-danger rounded p-4 mb-4">
                                <p class="text-dark mb-2">Ici, seront écrits quelques mots du (de la) fondateur(trice) de l'organisation pour dire, en bref, ce qu'est Action Damien</p>
                                <span class="text-danger">Nom Prénom, Fondateur(trice)</span>
                            </div>
                            <p class="mb-5">Action Damien est une ONG belge fondée en 1964. Une organisation forte du soutien de milliers de collaborateurs bénévoles, donateurs et sympathisants à travers le monde.</p>
                            <a class="btn btn-danger py-2 px-3 me-3" href="">
                                En savoir plus
                                <div class="d-inline-flex btn-sm-square bg-white text-danger rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                            <a class="btn btn-outline-danger py-2 px-3" href="">
                                Nous contacter
                                <div class="d-inline-flex btn-sm-square bg-danger text-white rounded-circle ms-2">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

@endsection