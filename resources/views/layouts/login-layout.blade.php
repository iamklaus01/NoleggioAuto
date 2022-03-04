<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ secure_asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="shortcut icon" href="{{ secure_asset('images/favicon.png') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Noleggio Auto') }}</title>
</head>
<body>

    <div class="login-form-container">
        @yield('connexion')
    </div>
    <div class="login-copyright">
        <span><small>&copy; Noleggio Auto. All Rights Reserved.</small></span>
    </div>
      <script src="{{ secure_asset('vendor/jquery-3.3.0.min.js') }}"></script>
      <script src="{{ secure_asset('vendor/bootstrap.bundle.min.js') }}"></script>
</body>
</html>