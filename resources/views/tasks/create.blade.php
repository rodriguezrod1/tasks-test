<div class="container mt-5">
    <h1 class="mb-4">Crear Nueva Tarea</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf

        <div class="form-group">
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">Descripción:</label>
            <textarea name="description" id="description" rows="3" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="status">Estado:</label>
            <select name="status" id="status" class="form-select" required>
                <option value="">Seleccione un estado...</option>
                <option value="Y4:0">Pendiente</option>
                <option value="Y4:1">Completada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Tarea</button>
    </form>
</div>
