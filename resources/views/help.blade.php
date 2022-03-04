<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
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
                        <li class="nav-item "><a href="{{ url('/parc') }}" class="nav-link">Louer</a></li>
                        <li class="nav-item active"><a href="{{ url('/help') }}" class="nav-link">Aide</a></li>
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
    <div class="intro-faq">
        <div class="hero-faq">
            <div class="title">
                <p>FAQ</p>
            </div>
            <div class="description">
                <p>
                    Retrouvez sur cette pages les questions
                    les plus fréquemment posées et les réponses à cellles-ci.
                </p>
            </div>
            <div class="btn-faq">
                <button class="faq-btn"><a href="#faq">Découvrir</a></button>
            </div>
        </div>
    </div>
        <!--  FAQ Section  -->
    <img class="img-faq" src="{{ asset('images/faq-1.jpg') }}" alt="Quiz">
    <div id="faq" class="faq-container-fluid">
        <div class="container">
            <h2>Foire aux questions</h2>
            <div class="section-divider">
                <img src="{{ asset('images/section-divider.svg') }}" alt="Section Divider">
            </div>
            <div class="accordion">
                @forelse ($faqs as $faq)
                    <div class="accordion-item">
                        <button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">{{ $faq->quiz }}</span><span class="icon" aria-hidden="true"></span></button>
                        <div class="accordion-content">
                            <p>{{ $faq->answer }}</p>
                        </div>
                    </div>
                @empty
                    <h3 class="no-record">La FAQ est vide !</h3>
                @endforelse
            </div>
        </div>
        <div class="img-solution">
            <img  src="{{ asset('images/faq-2.png') }}" alt="Quiz">
        </div>
    </div>

        <!-- End FAQ Section -->
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
      <script src="{{ asset('js/help.js') }}"></script>
      <script src="{{ asset('vendor/jquery-3.3.0.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap.bundle.min.js') }}"></script>
</body>
</html>