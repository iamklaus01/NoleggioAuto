@extends('layouts.admin-dashboard-layout')

@section('action')
    <section id="add-faq" class="menu-section">
        <div class="container">
            <h3>Ajouter une question et sa réponse</h3>
        <form method="POST" , action="{{ route('faq-add') }}">
            @csrf
            <div class="form-group">
            <label for="name">Intitulé de la question</label>
            <input type="text" class="form-control" id="quiz" name="quiz" aria-describedby="nameHelp" placeholder="Entrer la question" required>
            </div>
            <div class="form-group">
                <label for="answer">Réponse correspondante</label>
                <textarea class="form-control" id="answer" name="answer" aria-describedby="ansHelp" placeholder="Saisissez la réponse" required></textarea>
            </div>
            <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary">Ajouter</button></div>
        </form>
        </div>
    </section>
@endsection