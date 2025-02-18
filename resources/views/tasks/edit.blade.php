@extends('layout.app')

@section('title', 'Modifier une Tâche')

@section('content')
    <h1>Modifier une Tâche</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Titre :</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}" required>

        <label for="description">Description :</label>
        <textarea name="description" id="description">{{ $task->description }}</textarea>

        <label for="status">Statut :</label>
        <select name="status" id="status" required>
            <option value="{{ \App\Models\Task::STATUS_TODO }}" {{ $task->status == \App\Models\Task::STATUS_TODO ? 'selected' : '' }}>À faire</option>
            <option value="{{ \App\Models\Task::STATUS_IN_PROGRESS }}" {{ $task->status == \App\Models\Task::STATUS_IN_PROGRESS ? 'selected' : '' }}>En cours</option>
            <option value="{{ \App\Models\Task::STATUS_DONE }}" {{ $task->status == \App\Models\Task::STATUS_DONE ? 'selected' : '' }}>Terminé</option>
        </select>

        <button type="submit">Modifier</button>
    </form>
@endsection