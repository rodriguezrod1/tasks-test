@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-end">
            <div class="col-md-4">
                <a href="{{ route('tasks.create') }}" class="mb-3 btn btn-primary">Create New Task</a>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <table class="table table-hover">
                    <thead class="table-info">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tasks as $task)
                            <tr>
                                <td>{{ $task->id }}</td>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->description }}</td>
                                <td>{{ $task->status ? 'Completed' : 'Pending' }}</td>
                                <td>
                                    <div class="mt-1 d-flex justify-content-center">
                                        <a href="{{ route('tasks.show', $task->id) }}" class="m-2 btn btn-secondary"
                                            title="View Detail">View</a>
                                        <a href="{{ route('tasks.edit', $task->id) }}" class="m-2 btn btn-primary"
                                            title="Edit">Editar</a>
                                        <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="m-2 btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <h3 class="text-danger">There are no tasks</h3>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
