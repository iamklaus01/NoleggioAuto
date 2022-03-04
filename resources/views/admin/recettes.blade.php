@extends('layouts.admin-dashboard-layout')

@section('action')
    <section id="register" class="menu-section">
        <div class="container">
        <h3>Registre de location de voitures</h3>
        <div class="row">
            <div class="table-responsive col-12">
            <table class="table table-image table-bordered">
            <thead class="thead-dark">
                <tr>
                <th scope="col">N&deg;</th>
                <th scope="col">Id Voiture</th>
                <th scope="col">Date de Location</th>
                <th scope="col">Date de retour</th>
                <th scope="col">Durée en heures </th>
                <th scope="col">idCard User </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($records as $record)
                    <tr>
                        <th scope="row">{{ $record->id }}</th>
                        <td>{{ $record->car_id }}</td>
                        <td>{{ $record->locationDate }}</td>
                        <td>{{ $record->returnDate }}</td>
                        <td>{{ $record->nHours }}</td>
                        <td>{{ $record->card_id }}</td>
                    </tr>
                @empty
                    <h3 class="no-record">Aucune donnée de location de voitures</h3>
                @endforelse
            </tbody>
            </table>   
            </div>
        </div>
        </div>
    </section>
@endsection