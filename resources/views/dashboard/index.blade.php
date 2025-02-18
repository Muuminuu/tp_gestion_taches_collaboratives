@extends('layout.app')

@section('title','Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <p>Vous êtes connecté</p>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Déconnexion</button>
    </form>
@endsection