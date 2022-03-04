@extends('layouts.admin-dashboard-layout')

@section('action')
    <section id="add-admin" class="menu-section">
        <div class="container">
            <h3>Ajouter un admin</h3>
            <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <form method="POST" , action="{{ route('register-admin') }}">
            @csrf
            <div class="form-group">
            <label for="name">Nom & prénom(s)</label>
            <input type="text" class="form-control" id="name" name="username" aria-describedby="nameHelp" placeholder="Entre le nom et le(s) prénom(s)">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Adresse mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" :value="old('email')" aria-describedby="emailHelp" placeholder="Entrer votre mail" required>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Mot de Passe</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Mot de passe" required autocomplete="new-password">
            </div>
            <div class="form-group">
                <label for="confirmPwd">Confirmer mot de passe</label>
                <input type="password" class="form-control" id="confirmPwd" name="password_confirmation" placeholder="Confirmer mot de passe" required>
            </div>
            <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Ajouter</button></div>
        </form>
        </div>
    </section>
@endsection