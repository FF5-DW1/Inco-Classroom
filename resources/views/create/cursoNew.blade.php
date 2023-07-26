@extends ('layouts.main')

@section('title', 'Crear nuevo Curso')

@section ('content')
<form method="POST" action="{{ route('home') }}" class="cursoForm">
    @csrf
    <h2>Crear Curso nuevo</h2>
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        @error('title')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="description">Descripcion:</label>
        <input type="text" id="description" name="description" required>
        @error('description')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="cursera_url">Cursera URL:</label>
        <input type="text" id="cursera_url" name="cursera_url" placeholder="Enter cursera URL">
        @error('cursera_url')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <!-- <div>
        <label for="presentacion_url">Image URL:</label>
        <input type="text" id="presentacion_url" name="presentacion_url" placeholder="Enter presentacion URL">
        @error('presentacion_url')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="grabacion_url">Image URL:</label>
        <input type="text" id="grabacion_url" name="grabacion_url" placeholder="Enter grabacion URL">
        @error('grabacion_url')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div> -->
    <button type="submit">Crear</button>
</form>

@endsection