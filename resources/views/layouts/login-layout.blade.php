<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap.min.css') }}">
    <link rel="shortcut icon" href="{{ secure_asset('images/favicon.png') }}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/47280fe899.js" crossorigin="anonymous"></script>
=======
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
    <title>{{ config('app.name', 'Noleggio Auto') }}</title>
</head>
<body>

    <div class="login-form-container">
        @yield('connexion')
    </div>
    <div class="login-copyright">
        <span><small>&copy; Noleggio Auto. All Rights Reserved.</small></span>
    </div>
<<<<<<< HEAD
      <script src="{{ secure_asset('vendor/jquery-3.3.0.min.js') }}"></script>
      <script src="{{ secure_asset('vendor/bootstrap.bundle.min.js') }}"></script>
=======
      <script src="{{ asset('vendor/jquery-3.3.0.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap.bundle.min.js') }}"></script>
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
</body>
</html>