@extends('layouts.admin-dashboard-layout')

@section('action')
    <section id="add-car" class="menu-section">
        <div class="container">
        <h3>Ajout d'une nouvelle voiture</h3>
        <form action="{{ route('car-add') }}" method="POST" class="newCar" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="marque">Marque de voiture</label>
                <input class="form-control" type="text" name="brand" id="marque" placeholder="Nom de la marque" required>
            </div>
            <div class="form-group col-md-6">
                <label for="modele">Nom du modèle</label>
                <input class="form-control" type="text" name="model" id="modele" placeholder="Nom du modèle" required>
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="price">Prix de location par heure</label>
                <input class="form-control" type="number" name="price" id="price" required placeholder="Prix de location par heure">
                </div>
                <div class="form-group col-md-6">
                <label for="mode">Mode de la voiture</label>
                <select class="form-control" name="mode" id="mode">
                    <option value="Manuelle">Manuelle</option>
                    <option value="Automatique">Automatique</option>
                </select>
                </div>
            </div>
            <div class="form-group">
            <label for="description">Description de la voiture</label>
            <textarea class="form-control" id="description" name="description" aria-describedby="descHelp" placeholder="Ajoutez une description" required></textarea>
            </div>
            <div class="form-group">
            <label for="carImage">Une image de la voiture</label>
            <input class="form-control-file" type="file" accept="image/*" name="carImage" id="carImage" required onchange="displayFile(event)">
            </div>
            <div class="imagePreview">
                <img src="{{ secure_asset('images/upload.png') }}" id="uploadImage" alt="Uploaded car's picture" srcset="">
            </div>
            <div class="button-container d-flex justify-content-end">
                <button type="submit" class="btn btn-success mb-5">Ajouter</button>
            </div>
        </form>
        </div>
    </section>
@endsection