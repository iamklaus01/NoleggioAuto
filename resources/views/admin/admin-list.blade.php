@extends('layouts.admin-dashboard-layout')

@section('action')
    <section id="liste-admin" class="menu-section">
        <div class="container">
        @isset($message)
            <div class="result-container">
                <p><span class="message bg-info">{{ $message }}</span><span class="btn-secondary close-popUp fa fa-times"></span></p>
            </div>
        @endisset
        <h3>Liste des administrateurs</h3>
        <div class="row">
            <div class="table-responsive col-12">
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">N&deg;</th>
                    <th scope="col">Nom d'Utilisateur</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                    @forelse ($list as $admin)
                        <tr>
                            <th scope="row">{{ $admin->id }}</th>
                            <td>{{ $admin->name }}</td>
                            <td>{{ $admin->email }}</td>
                        </tr>
                    @empty
                        <h3 class="no-record">Un problème serait survenu</h3>
                    @endforelse
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </section>
@endsection