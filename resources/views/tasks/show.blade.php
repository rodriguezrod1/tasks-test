@extends('layouts.app')

@section('title', 'Detail Task')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2>Detail Task</h2>

                <p><strong>ID:</strong> {{ $task->id }}</p>
                <p><strong>Títle:</strong> {{ $task->title }}</p>
                <p><strong>Description:</strong> {{ $task->description }}</p>
                <p><strong>Status:</strong> {{ $task->status ? 'Completado' : 'Pendiente' }}</p>

                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Return</a>
                <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
@endsection
