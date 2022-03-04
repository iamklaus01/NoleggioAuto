@extends('layouts.admin-dashboard-layout')

@section('action')
    <section id="available" class="menu-section">
        <div class="container">
        @isset($message)
            <div class="result-container">
                <p><span class="message bg-info">{{ $message }}</span><span class="btn-secondary close-popUp fa fa-times"></span></p>
            </div>
        @endisset
        <h3>Voitures marquées non disponibles</h3>
        <div class="row">
            <div class="table-responsive col-12">
            <table class="table table-image table-bordered">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Voiture</th>
                <th scope="col">Date de Location</th>
                <th scope="col">Date de Remise</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($rentedCar as $car)
                    <tr>
                        <th scope="row">{{ $car->brand.'  '.$car->model }}</th>
                        <td>{{ $car->registerOfRentals->last()->locationDate }}</td>
                        <td>{{ $car->registerOfRentals->last()->returnDate }}</td>
                        <td><button type="button" class="btn btn-success"><a class="car-action-link" href="{{ route('car-make-available' , ['id' => $car->id]) }}"><span class="fa fa-check"></span></a></button></td>
                    </tr>
                @empty
                    <h3 class="no-record">Toutes les voitures sont disponibles</h3>
                @endforelse
            </tbody>
            </table>   
            </div>
        </div>
        </div>
    </section>
@endsection