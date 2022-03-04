@extends('layouts.login-layout')

@section('connexion')

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}" class="form" id="login">
        @csrf
        <h1 class="form__title">Login</h1>
        <div class="form__input-group">
            <input type="text" class="form__input" name="email"  :value="old('email')" placeholder="Email" required autofocus>
        </div>
        <div class="form__input-group">
            <input type="password" class="form__input" name="password" placeholder="Mot de passe" required autocomplete="current-password">
        </div>
        <button class="form__button" type="submit">Login</button>
        <p class="form__text">
            <a href="{{ route('password.request') }}" class="form__link">Mot de passe oublié?</a>
        </p>
        <p class="form__text">
            <a class="form__link" href="{{ route('register') }}" id="linkCreateAccount">Pas de compte? Créer un compte</a>
        </p>
    </form>
@endsection