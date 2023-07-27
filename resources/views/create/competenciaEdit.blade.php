@extends ('layouts.main')

@section('title', 'Editar Competencia')

@section('content')
<form method="POST" action="/home/{{ $competencia->id }}" class="competenciaForm">
    @csrf
    @method('PUT')
    <h2>Editar competencia</h2>
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ $competencia->title }}" required>
        @error('title')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <!-- <div>
        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" placeholder="Enter image URL" value="{{ $competencia->image_url }}">
    </div> -->
        <div>
        <label for="presentaciones_url">Presentaciones URL:</label>
        <input type="text" id="presentaciones_url" name="presentaciones_url" value="{{ $competencia->presentaciones_url }}">
        @error('presentaciones_url')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="grabaciones_url">Grabaciones URL:</label>
        <input type="text" id="grabaciones_url" name="grabaciones_url" value="{{ $competencia->grabaciones_url }}">
        @error('grabaciones_url')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Guardar cambios</button>
</form>
@endsection
