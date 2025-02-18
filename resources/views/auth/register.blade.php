@extends('layout.app')

@section('title', 'Inscription')

@section('content')
    <h1>Inscription</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>

        <label for="email">eMail :</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        
        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password" required>

        <label for="password_confirmation">Confirmer le mot de passe :</label>
        <input type="password" name="password_confirmation" id="password_confirmation" required>

        <button type="submit">Inscription</button>
    </form>
@endsection