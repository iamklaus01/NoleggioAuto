<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/car-detail.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{ secure_asset('images/favicon.png') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Noleggio Auto') }}</title>
</head>
<body>
        <!-- ======= Header ======= -->
    <header id="header">
        <nav class="navbar navbar-expand-lg fixed-top bg-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ secure_asset('images/logo.svg') }}" alt="Logo Noleggio Auto"></a>
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

        <!--  Car Section  -->

        <div class="detail-body">
            <div class="container py-4 my-4 mx-auto d-flex flex-column">
                <div class="header">
                    <div class="row r1">
                        <div class="col-md-9 abc">
                            <h3>{{ $car->brand.'  '.$car->model }}</h3>
                        </div>
                    </div>
                </div>
                <div class="container-body mt-4">
                    <div class="row r3">
                        <div class="col-md-5 p-0 klo">
                            <ul>
                                <li>Visite technique complète</li>
                                <li>{{ $car->mode }}</li>
                                <li>{{ $car->price }}f / heure</li>
                                <span class="description">Description</span>
                                <p>{{ $car->description }}</p>
                            </ul>
                        </div>
                        <div class="col-md-7"> <img src="{{ secure_asset('storage/'.$car->image_path) }}" width="90%" height="95%" alt="Car picture"></div>
                    </div>
                </div>
                <div class="footer-btn">
                    <div class="col-md-2 myt "><button type="button" class="btn btn-primary"><a href="{{ route('rental-add-form' , ['id' => $car->id]) }}">LOUER</a></button></div>
                </div>
            </div>
        </div>

        <!-- End Car Section -->
        <div class="separator">

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
                    <p>1208 Avenue Les cocotiers <br> Cadjèhoun, Cotonou-BENIN</p>
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
                    Noleggio Auto est une établissement de location de voitures .<br>
                    Nos voitures sont sûres et ont une visite technique complète .<br>
                    La location peut se faire en ligne et vous avez la possibilité de <br>
                    vous faire livrer la voiture ou de la récupérer dans l'une de nos <br>
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
      <script src="{{ secure_asset('vendor/jquery-3.3.0.min.js') }}"></script>
      <script src="{{ secure_asset('vendor/bootstrap.bundle.min.js') }}"></script>
</body>
</html>