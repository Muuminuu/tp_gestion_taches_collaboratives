@extends('layout.app')

@section('title', 'Mes Tâches')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="text-center">Mes Tâches</h1>
            <a href="{{ route('tasks.create') }}" class="btn btn-success mb-3 mt-5">Créer une nouvelle tâche</a>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <ul class="list-group">
                @foreach ($tasks as $task)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div class="d-flex align-items-center">
                            <span class="badge badge-pill mr-3
                                @if ($task->status == 'À faire') badge-secondary
                                @elseif ($task->status == 'En cours') badge-warning
                                @elseif ($task->status == 'Terminé') badge-success
                                @endif">
                                &nbsp;
                            </span>
                            <strong>{{ $task->title }}</strong> - {{ $task->status }}
                        </div>
                        <div>
                            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning btn-sm">Modifier</a>
                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection