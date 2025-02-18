@extends('layout.app')

@section('title', 'Connexion')

@section('content')
    <div class="container">
        <h1>Bienvenue</h1>
        <p>Bienvenue sur notre application.</p>
        <a href="{{ url('/login') }}" class="btn">Se connecter</a>
        <a href="{{ url('/register') }}" class="btn">S'inscrire</a>
    </div>
@endsection