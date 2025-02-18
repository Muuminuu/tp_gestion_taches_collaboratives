@extends('layout.app')

@section('title', 'Mes Tâches')

@section('content')
    <h1>Mes Tâches</h1>
    <a href="{{ route('tasks.create') }}" class="btn">Créer une nouvelle tâche</a>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <ul>
        @foreach ($tasks as $task)
            <li>
                <strong>{{ $task->title }}</strong> - {{ $task->status }}
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn">Modifier</a>
                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette tâche ?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn">Supprimer</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection