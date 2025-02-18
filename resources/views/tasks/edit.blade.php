@extends('layout.app')

@section('title', 'Modifier une Tâche')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Modifier une Tâche</h1>
            <form action="{{ route('tasks.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}" required>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea name="description" id="description" class="form-control">{{ $task->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="status">Statut :</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="{{ \App\Models\Task::STATUS_TODO }}" {{ $task->status == \App\Models\Task::STATUS_TODO ? 'selected' : '' }}>À faire</option>
                        <option value="{{ \App\Models\Task::STATUS_IN_PROGRESS }}" {{ $task->status == \App\Models\Task::STATUS_IN_PROGRESS ? 'selected' : '' }}>En cours</option>
                        <option value="{{ \App\Models\Task::STATUS_DONE }}" {{ $task->status == \App\Models\Task::STATUS_DONE ? 'selected' : '' }}>Terminé</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Modifier</button>
            </form>
        </div>
    </div>
@endsection