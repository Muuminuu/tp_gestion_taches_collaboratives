@extends('layout.app')

@section('title', 'Créer une Tâche')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Créer une Tâche</h1>
            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Titre :</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="description">Description :</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="status">Statut :</label>
                    <select name="status" id="status" class="form-control" required>
                        <option value="{{ \App\Models\Task::STATUS_TODO }}">À faire</option>
                        <option value="{{ \App\Models\Task::STATUS_IN_PROGRESS }}">En cours</option>
                        <option value="{{ \App\Models\Task::STATUS_DONE }}">Terminé</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Créer</button>
            </form>
        </div>
    </div>
@endsection