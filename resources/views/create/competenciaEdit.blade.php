@extends ('layouts.main')

@section('title', 'Editar Competencia')

@section('content')
<div class="paddingContainer">
    <form method="POST" action="/home/{{ $competencia->id }}" class="competenciaForm">
        @csrf
        @method('PUT')
        <h2>Editar competencia</h2>
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ $competencia->title }}" required>
        </div>
        <div>
            <label for="image_url">Image URL:</label>
            <input type="text" id="image_url" name="image_url" placeholder="Enter image URL" value="{{ $competencia->image_url }}">
        </div>
        <button type="submit">Guardar cambios</button>
    </form>
</div>
@endsection
