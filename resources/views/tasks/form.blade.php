@extends('layouts.app')

@section('title', 'Crear/Editar Tarea')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $task ? 'Edit Task' : 'New Task' }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ $task ? route('tasks.update', $task->id) : route('tasks.store') }}">
                        @csrf
                        @if ($task)
                            @method('PUT')
                        @endif

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title', $task ? $task->title : '') }}" required>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $task ? $task->description : '') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" id="status"
                                name="status">
                                <option value="1"
                                    {{ old('status', $task ? $task->status : '') == 1 ? 'selected' : '' }}>Completed
                                </option>
                                <option value="0"
                                    {{ old('status', $task ? $task->status : '') == 0 ? 'selected' : '' }}>
                                    Pending</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <a href="{{ route('tasks.index') }}" class="mt-2 btn btn-secondary">Return</a>
                        <button type="submit" class="mt-2 btn btn-primary">{{ $task ? 'Update' : 'Store' }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
