@extends('layouts.admin-dashboard-layout')

@section('action')
    <section id="faq" class="menu-section">
        <div class="container">
        @isset($message)
            <div class="result-container">
                <p><span class="message bg-info">{{ $message }}</span><span class="btn-secondary close-popUp fa fa-times"></span></p>
            </div>
        @endisset
        <h3>Questions et Réponses</h3>
        <div class="row">
            <div class="table-responsive col-12">
            <table class="table table-image table-bordered">
            <thead class="thead-dark">
                <tr>
                <th scope="col">N&deg;</th>
                <th scope="col">Question</th>
                <th scope="col">Réponse</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($faqs as $faq)
                    <tr>
                        <th scope="row">{{ $faq->id }}</th>
                        <td>{{ $faq->quiz }}</td>
                        <td>{{ $faq->answer }}</td>
                        <td><button type="button" class="btn btn-danger" title="La supression sera bientot disponible"><span class="fa fa-trash"></span></button></td>
                    </tr>
                @empty
                    <h3 class="no-record">La FAQ est vide !</h3>
                @endforelse
            </tbody>
            </table>   
            </div>
        </div>
        </div>
    </section>
@endsection