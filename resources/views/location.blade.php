<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/location.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ secure_asset('images/favicon.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/47280fe899.js" crossorigin="anonymous"></script>
=======
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/location.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
    <title>{{ config('app.name', 'Noleggio Auto') }}</title>
</head>
<body>
        <!-- ======= Header ======= -->
    <header id="header">
        <nav class="navbar navbar-expand-lg fixed-top bg-navbar">
            <div class="container-fluid">
<<<<<<< HEAD
                <a class="navbar-brand" href="#"><img src="{{ secure_asset('images/logo.svg') }}" alt="Logo Noleggio Auto"></a>
=======
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.svg') }}" alt="Logo Noleggio Auto"></a>
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                    <span class="fa fa-bars"></span>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Accueil</a></li>
                        <li class="nav-item active"><a href="{{ url('/parc') }}" class="nav-link">Louer</a></li>
                        <li class="nav-item"><a href="{{ url('/help') }}" class="nav-link">Aide</a></li>
                        @auth
                            <li class="nav-item"><a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a></li>
                        @endauth
                        @guest
                            <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
                        @endguest
                        <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
        <!-- End Header -->

        <!--  Cars Section  -->

    <div class="container-fluid car-section">
        <div class="main-title">
            <p>D??couvrez notre parc de voitures</p>
            <div class="section-divider">
<<<<<<< HEAD
                <img src="{{ secure_asset('images/section-divider.svg') }}" alt="Section Divider">
=======
                <img src="{{ asset('images/section-divider.svg') }}" alt="Section Divider">
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
            </div>
        </div>
        <div class="row col-sm-12">
            @forelse ($cars as $car)
                <div class="col-10 mx-auto col-md-6 col-lg-4 my-3">
                    <div class="card car-card">
<<<<<<< HEAD
                        <img src="{{ secure_asset('storage/'.$car->image_path) }}" alt="Car picture" class="card-img-top car-img">
=======
                        <img src="{{ asset('storage/'.$car->image_path) }}" alt="Car picture" class="card-img-top car-img">
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
                        <div class="card-body">
                            <a href="{{ route('single-car' , ['id' => $car->id]) }}">
                                <div class="car-info d-flex justify-content-between text-uppercase">
                                    <h6 class="font-weight-bold">{{ $car->brand }}</h6>
                                    <h6>{{ $car->model }}</h6>
                                </div>
                            </a>
                        </div>
                        <div class="card-footer d-flex justify-content-between text-capitalize">
                                <p><span><span class="fa fa-money"></span></span>{{ $car->price }} Fcfa</p>
                                <p><span><span class="fa fa-cogs"></span></span>{{ $car->mode }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <h3 class="no-record">Aucune voiture n'est disponible pour une location</h3>
            @endforelse
        </div>
    </div>

        <!-- End Cars Section -->
        <div class="container">

        </div>
    <footer class="footer-distributed container-fluid">
        <div class="row">
            <div class="footer-left">
                <div class="footer-title">
                    <h3><span class="first-name">NOLEGGIO </span> AUTO</h3>
                </div>
                <p class="footer-links">
                    <a href="{{ url('/') }}" class="link-1">Accueil</a>
                    <a href="{{ url('/parc') }}">Louer une voiture</a>
                    <a href="{{ url('/help') }}">FAQ</a>
                </p>
            </div>
            <div id="contact" class="footer-center">
                <div>
                    <span class="fa fa-map-marker"></span>
                    <p>1208 Avenue Les cocotiers <br> Cadj??houn, Cotonou-BENIN</p>
                </div>
                <div>
                    <span class="fa fa-phone"></span>
                    <p>+229 653-499-53</p>
                </div>
                <div>
                    <span class="fa fa-envelope"></span>
                    <p><a href="mailto:iamklaus01@gmail.com">iamklaus01@gmail.com</a></p>
                </div>
            </div>
            <div class="footer-right">
                <p class="footer-company-about">
                    <span>A propos de nous</span>
                    Noleggio Auto est une ??tablissement de location de voitures .<br>
                    Nos voitures sont s??res et ont une visite technique compl??te .<br>
                    La location peut se faire en ligne et vous avez la possibilit?? de <br>
                    vous faire livrer la voiture ou de la r??cup??rer dans l'une de nos <br>
                    agences.
                </p>
                <div class="footer-icons">
                    <a href="#"><span class="fa fa-whatsapp"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span><small>&copy; Noleggio Auto. All Rights Reserved.</small></span>
        </div>
    </footer>
<<<<<<< HEAD
      <script src="{{ secure_asset('vendor/jquery-3.3.0.min.js') }}"></script>
      <script src="{{ secure_asset('vendor/bootstrap.bundle.min.js') }}"></script>
=======
      <script src="{{ asset('vendor/jquery-3.3.0.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap.bundle.min.js') }}"></script>
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
</body>
</html>