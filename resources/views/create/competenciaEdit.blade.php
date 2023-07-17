@extends ('layouts.main')

@section('title', 'Editar Competencia')

@section('content')
<form method="POST" action="/home/{{ $competencia->id }}" class="competenciaForm">
    @csrf
    @method('PUT')
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $competencia->title }}" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ $competencia->description }}</textarea>
    </div>
    <div>
        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" placeholder="Enter image URL" value="{{ $competencia->image_url }}">
    </div>
    <button type="submit">Guardar cambios</button>
</form>
@endsection
