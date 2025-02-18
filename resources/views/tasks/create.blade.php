@extends('layout.app')

@section('title', 'Créer une Tâche')

@section('content')
    <h1>Créer une Tâche</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" required>

        <label for="description">Description :</label>
        <textarea name="description" id="description"></textarea>

        <label for="status">Statut :</label>
        <select name="status" id="status" required>
            <option value="{{ \App\Models\Task::STATUS_TODO }}">À faire</option>
            <option value="{{ \App\Models\Task::STATUS_IN_PROGRESS }}">En cours</option>
            <option value="{{ \App\Models\Task::STATUS_DONE }}">Terminé</option>
        </select>

        <button type="submit">Créer</button>
    </form>
@endsection