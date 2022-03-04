@extends('layouts.login-layout')

@section('connexion')
<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}" class="form form--hidden" id="createAccount">
        @csrf
        <h1 class="form__title">Créer un compte</h1>
        <div class="form__input-group">
            <input type="text" id="signupUsername" class="form__input"  name="name" :value="old('name')"  placeholder="Nom et prénom(s)" required autofocus>
        </div>
        <div class="form__input-group">
            <input type="text" class="form__input" name="email" :value="old('email')" placeholder="Adresse mail" required  >
        </div>
        <div class="form__input-group">
            <input type="password" class="form__input"  name="password" placeholder="Mot de passe" required autocomplete="new-password">
        </div>
        <div class="form__input-group">
            <input type="password" class="form__input" placeholder="Confirmer mot de passe" name="password_confirmation" required>
        </div>
        <button class="form__button" type="submit">S'enregistrer</button>
        <p class="form__text">
            <a class="form__link" href="{{ route('login') }}" id="linkLogin">Déjà un compte? Connectez-vous</a>
        </p>
    </form>
@endsection