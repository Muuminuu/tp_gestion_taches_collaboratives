@extends('layout.app')

@section('title', 'Connexion')

@section('content')
    <div class="container text-center">
        <h1>Bienvenue</h1>
        <p>Bienvenue sur notre application.</p>
        <a href="{{ route('login') }}" class="btn">Se connecter</a>
        <a href="{{ route('register') }}" class="btn">S'inscrire</a>
    </div>
@endsection