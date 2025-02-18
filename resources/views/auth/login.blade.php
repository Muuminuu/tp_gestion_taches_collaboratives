@extends('layout.app')

@section('title', 'Connexion')

@section('content')
    <h1>Connexion</h1>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <label for="email">eMail : </label>
        <input type="email" name="email" id="email" required>
        
        <label for="password">Mot de passe : </label>
        <input type="password" name="password" id="password" required>

        <button type="submit">Connexion</button>
    </form>
@endsection