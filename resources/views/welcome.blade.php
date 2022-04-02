<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ secure_asset('images/favicon.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/47280fe899.js" crossorigin="anonymous"></script>
=======
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
    <title>{{ config('app.name', 'Noleggio Auto') }}</title>
</head>
<body>
        <!-- ======= Header ======= -->
    <header id="header">
        <nav class="navbar navbar-expand-lg fixed-top ">
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
                        <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link">Accueil</a></li>
                        <li class="nav-item"><a href="{{ url('/parc') }}" class="nav-link">Louer</a></li>
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
      <!-- ======= Hero Section ======= -->
    <div id="hero" class="hero bg-image">
        <div class="hero-container">
            <div class="title">
                <h1><span class="first-name">NOLEGGIO </span> AUTO</h1>
            </div>
            <div class="description">
                <p>Agence de location de voitures. <br>
                    Louez ou réservez des véhicules en ligne de manière rapide sûre et flexible,<br>puis récupérez celles-ci dans une de nos agences</p>
                <p class="slogan"><span class="first-name">Noleggio</span> Auto , Luxe - Rapidité - Sûreté : le combo parfait</p>
            </div>
            <div class="btn-start">
                <button class="hero-btn"><a href="#cars">Louer une voiture </a></button>
            </div>
        </div>
    </div>
      <!-- End Hero Section -->
      <!-- Why us Section -->
    <div class="reason-container">
        <div class="section-title">
            <h2>Choisissez-nous</h2>
        </div>
        <div class="row col-sm-12">
            <div class="item">      
                <div class="img-container">
<<<<<<< HEAD
                    <img class="img-circle" src="{{ secure_asset('images/car-wash.png') }}" alt="Why-us image">
=======
                    <img class="img-circle" src="{{ asset('images/car-wash.png') }}" alt="Why-us image">
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
                </div>    
                <span class="item-title">Des voitures propres et sûres</span>
                <p>Nous travaillons pour mettre à votre disposition des voitures propres avec une visite technique complète.</p>
            </div>
            <div class="item">      
                <div class="img-container">
<<<<<<< HEAD
                    <img class="img-circle" src="{{ secure_asset('images/wallet.png') }}" alt="Why-us image">
=======
                    <img class="img-circle" src="{{ asset('images/wallet.png') }}" alt="Why-us image">
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
                </div>    
                <span class="item-title">Nous alignons nos tarifs</span>
                <p>Vous avez trouvé la même offre pour moins cher ? Nous ajusterons notre tarif en conséquence.</p>
            </div>
            <div class="item">
                <div class="img-container">
<<<<<<< HEAD
                    <img class="img-circle" src="{{ secure_asset('images/cost.png') }}" alt="Why-us image">
=======
                    <img class="img-circle" src="{{ asset('images/cost.png') }}" alt="Why-us image">
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
                </div>      
                <span class="item-title">Pas de frais cachés</span>
                <p>Vous savez exactement ce que vous payez et pourquoi vous le faites. Pas de frais supplémentaires non justifiés!</p>
            </div>
        </div>
    </div>
      <!-- End  -->
    <div id="cars" class="our-cars">
        <div class="section-title">
            <h2>Nos voitures</h2>
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
                            <a href="#">
                                <div class="car-info d-flex justify-content-between text-uppercase">
                                    <h6 class="font-weight-bold">{{ $car->brand }}</h6>
                                    <h6>{{ $car->model }}</h6>
                                </div>
                            </a>
                        </div>
                        <div class="card-footer d-flex justify-content-between text-capitalize">
                                <p><span><span class="fa fa-money"></span></span>{{ $car->price }} FCFA</p>
                                <p><span><span class="fa fa-cogs"></span></span>{{ $car->mode }}</p>
                        </div>
                    </div>
                </div>
                @break($loop->index >= ($loop->count/2))
            @empty
                <h3 class="no-record">Aucune voiture disponible pour une location</h3>
            @endforelse
        </div>
        <div class="see-more-button">
            <button class="more"><a href="{{ url('/parc') }}" class="see-more">Voir plus</a></button>
        </div>
    </div>
    <!-- End Cars Inventory -->
    
    <!-- Newsletter -->
    <div id="newsletter" class="newsletter">
        <div class="box">
            <h2>Souscrire à notre newsletter</h2>
            <p>Notre newsletter hebdomadaire vous informe des événements les plus récents et les plus importants de l'industrie automobile et de nos promotions</p>
            <form class="form-control">
              <input type="text" class="input" placeholder="Entrer votre adresse mail" />
              <button type="submit" class="btn-newsletter">Souscrire</button>
            </form>
          </div>
    </div>
    <footer class="footer-distributed container-fluid">
        <div class="row">
            <div class="footer-left">
                <div class="footer-title">
                    <h3><span class="first-name">NOLEGGIO </span> AUTO</h3>
                </div>
                <p class="footer-links">
                    <a href="#hero" class="link-1">Accueil</a>
                    <a href="{{ url('/parc') }}">Louer une voiture</a>
                    <a href="{{ url('/help') }}">FAQ</a>
                    <a href="#newsletter">Newsletter</a>
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
<<<<<<< HEAD
      <script src="{{ secure_asset('js/script.js') }}"></script>
      <script src="{{ secure_asset('vendor/jquery-3.3.0.min.js') }}"></script>
      <script src="{{ secure_asset('vendor/bootstrap.bundle.min.js') }}"></script>
=======
      <script src="{{ asset('js/script.js') }}"></script>
      <script src="{{ asset('vendor/jquery-3.3.0.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap.bundle.min.js') }}"></script>
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
</body>
</html>