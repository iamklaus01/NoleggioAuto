@extends('layouts.admin-dashboard-layout')

@section('action')
    <section id="all-cars" class="menu-section">
        <div class="container">
        @isset($message)
            <div class="result-container">
                <p><span class="message bg-info">{{ $message }}</span><span class="btn-secondary close-popUp fa fa-times"></span></p>
            </div>
        @endisset
            <h3>Parc de voitures</h3>
            <div class="row">
                <div class="table-responsive col-12">
                    <table class="table table-image table-bordered">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">N&deg;</th>
                            <th scope="col">Image</th>
                            <th scope="col">Marque & Modèle</th>
                            <th scope="col">Description</th>
                            <th scope="col">Prix/h</th>
                            <th scope="col">En location</th>
                            <th scope="col">Mode </th>
                            <th scope="col">Editer</th>
                            <th scope="col">Retirer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cars as $car)
                                <tr>
                                    <th scope="row">{{ $car->id }}</th>
                                    <td>
<<<<<<< HEAD
                                        <img src="{{ secure_asset('storage/'.$car->image_path) }}" class="img-fluid img-thumbnail" alt="Sheep">
=======
                                        <img src="{{ asset('storage/'.$car->image_path) }}" class="img-fluid img-thumbnail" alt="Sheep">
>>>>>>> d60d68d85b8d5cd769d2864b20d8c69fd4f9ffd4
                                    </td>
                                    <td>{{ $car->brand.'  '.$car->model }}</td>
                                    <td>{{ $car->description }}</td>
                                    <td>{{ $car->price }}</td>
                                    <td>{{ ($car->available == 1)?'NON':'OUI' }}</td>
                                    <td>{{ $car->mode }}</td>
                                    <td><button type="button" class="btn btn-primary"><a class="car-action-link" href="{{ route('car-edit-form' , ['id' => $car->id]) }}"><span class="fa fa-edit"></span></a></button></td>
                                    <td><button type="button" class="btn btn-danger"><a class="car-action-link" href="{{ route('car-remove' , ['id' => $car->id]) }}"><span class="fa fa-trash"></span></a></button></td>
                                </tr>
                            @empty
                                <h3 class="no-record">Aucune voiture enregistrée</h3>
                            @endforelse
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </section>
@endsection