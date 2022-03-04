<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rent-form.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Noleggio Auto') }}</title>
</head>
<body>
        <!-- ======= Header ======= -->
    <header id="header">
        <nav class="navbar navbar-expand-lg fixed-top bg-navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.svg') }}" alt="Logo Noleggio Auto"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                    <span class="fa fa-bars"></span>
                </button>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link">Accueil</a></li>
                        <li class="nav-item parc active"><a href="{{ url('/parc') }}" class="nav-link">Louer</a></li>
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

        <!--  Form Section  -->

    <div class="container">
        <div class="wrapper">
            <ul class="steps">
                <li class="is-active">Informations personnelles</li>
                <li>Finalisation</li>
                <li>Recap</li>
            </ul>
            <form action="{{ route('rental-add') }}" method="POST" class="form-wrapper">
                @csrf
                <fieldset class="section is-active">
                    <h3>Vos données personnelles</h3>
                    <input type="text" name="name" id="name" value="{{ Auth::user()->name }}" readonly>
                    <input type="email" name="email" id="email" value="{{ Auth::user()->email }}" readonly>
                    <div class="button">Suivant</div>
                </fieldset>
                <fieldset class="section">
                    <h3>Informations sur la location</h3>
                    <input class="input-hidden" type="hidden" name="id" value="{{ $car->id }}">
                    <input type="text" name="car" id="car" value="{{ $car->brand.'  '.$car->model }}" readonly>
                    <input type="text" name="price" id="price" value="{{ $car->price }}f/heure" readonly>
                    <input type="number" name="idCard" id="idCard" placeholder="Numero pièce d'identité" required>
                    <input type="datetime-local" name="rentDay" id="rent-day" value="" required>
                    <input type="datetime-local" name="returnDay" id="return-day" value="" required>
                    <div class="button particular-button">Suivant</div>
                </fieldset>
                <fieldset class="section">
                    <h3>Récapitulatif</h3>
                    <input class="nbreH-hidden" type="hidden" name="nbreH" value="">
                    <p><span class="info-title">Marque et modèle :</span> <span class="car-name">{{ $car->brand.'  '.$car->model }}</span></p>
                    <p><span class="info-title">Durée de location :</span> <span class="nbre-heure"></span> heure(s)</p>
                    <p><span class="info-title">Montant à payer :</span> <span class="prix-T"></span> FCFA</p>
                    <input class="submit button" type="submit" value="Valider">
                </fieldset>
                <fieldset class="section">
                    <h3>Location enregistrée !</h3>
                    <p>Votre code de paiement est : <span class="paiement-code"></span>.</p>
                    <p>Veuillez passser dans l'une de nos agences avec votre carte d'identité et votre permis pour entrer en possession de votre voiture</p>
                    <p>Merci de faire confiance à <span class="noleggio">Noleggio Auto</span> !</p>
                    <div class="button go-back">Retour</div>
                </fieldset>
            </form>
        </div>
    </div>

        <!-- End Form Section -->
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
    <script src="{{ asset('vendor/jquery-3.3.0.min.js') }}"></script>
    <script src="{{ asset('js/rent-form.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap.bundle.min.js') }}"></script>
</body>
</html>