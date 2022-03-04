@extends('layouts.admin-dashboard-layout')

@section('action')
    <div class="greeting">
        <h3>Content de vous revoir Mr/Mme <span>{{ Auth::user()->name }}</span></h3>
    </div>
@endsection