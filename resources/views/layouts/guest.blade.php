<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="description">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicon/apple-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicon/apple-icon-60x60.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicon/apple-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicon/apple-icon-76x76.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicon/apple-icon-114x114.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicon/apple-icon-120x120.png') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicon/apple-icon-144x144.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicon/apple-icon-152x152.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicon/apple-icon-180x180.png') }}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/img/favicon/android-icon-192x192.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicon/favicon-96x96.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicon/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('assets/img/favicon/manifest.json') }}">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicon/ms-icon-144x144.png') }}">
        <meta name="theme-color" content="#ffffff">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Website Stylesheet -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <title>Action Damien / Accueil</title>
    </head>

    <body>
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-danger" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
                <div class="col-lg-6 px-5 text-start">
                    <small><i class="fa fa-map-marker-alt me-2"></i>Avenue Pierre Mulele, 162 Kinshasa-Gombe</small>
                    <small class="ms-4"><i class="fa fa-envelope me-2"></i>secretaire@actiondamien-rdc.net</small>
                </div>

                <div class="col-lg-6 px-5 text-end">
                    <small>Follow us:</small>
                    <a class="text-white-50 ms-3" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white-50 ms-3" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-white-50 ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="text-white-50 ms-3" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <a href="" class="navbar-brand ms-4 ms-lg-0">
                    <img src="{{ asset('assets/img/logo-02.png') }}" alt="Action Damien" class="" width="150">
                </a>

                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        <a href="" class="nav-item nav-link active">Accueil</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Qui sommes-nous ?</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">Notre vision</a>
                                <a href="" class="dropdown-item">A propos</a>
                                <a href="" class="dropdown-item">Nous soutenir</a>
                                <a href="" class="dropdown-item">Contact</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Actualités</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Témoignages</a>
                            <div class="dropdown-menu m-0">
                                <a href="" class="dropdown-item">Témoignage en vidéo</a>
                                <a href="" class="dropdown-item">Sensibilisation</a>
                            </div>
                        </div>
                        <a href="" class="nav-item nav-link">Evénements</a>
                    </div>

                    <div class="d-none d-lg-flex ms-2">
                        <a class="btn btn-outline-danger py-2 px-3" href="">
                            Faire un don
                            <div class="d-inline-flex btn-sm-square bg-white text-danger rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar End -->

@yield('guest-content')

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="bg-image mb-4">
                            <img src="{{ asset('assets/img/logo-02.png') }}" alt="Action Damien" class="" width="200">
                            <div class="mask"></div>
                        </div>
                        <p class="small">Action Damien est une ONG médicale de développement qui participe depuis 1964 à la lutte mondiale contre la lèpre, la tuberculose et d'autres maladies typiquement liées à la pauvreté, comme la leishmaniose.</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square me-3" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Nous contacter</h5>
                        <p class="small"><i class="fa fa-map-marker-alt me-3"></i>Avenue Pierre Mulele, 162 Kinshasa-Gombe</p>
                        <p class="small"><i class="fa fa-phone-alt me-3"></i>+243 816 520 396</p>
                        <p class="small"><i class="fa fa-envelope me-3"></i>secretaire@actiondamien-rdc.net</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Liens rapide</h5>
                        <a class="btn btn-link" href="">A propos</a>
                        <a class="btn btn-link" href="">Notre vision</a>
                        <a class="btn btn-link" href="">Nous soutenir</a>
                        <a class="btn btn-link" href="">Témoignages</a>
                        <a class="btn btn-link" href="">Evénements</a>
                        <a class="btn btn-link" href="">Contact</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-light mb-4">Newsletter</h5>
                        <p>Vous pouvez souscrire à notre newsletter pour recevoir les actualités concernant Avtion Damien</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Votre E-mail">
                            <button type="button"class="btn btn-danger py-2 position-absolute top-0 end-0 mt-2 me-2">Enregistrer</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a href="#">Action Damien</a>, Tout droit réservé.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            Designed By <a href="">Silasmas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-danger btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/lib/parallax/parallax.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>
