@extends ('layouts.main')

@section('title', 'Crear Competencia')

@section ('content')
<form method="POST" action="{{ route('home') }}" class="competenciaForm">
    @csrf
    <h2>Crear competencia nueva</h2>
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        @error('title')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" placeholder="Enter image URL">
        @error('image_url')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Crear</button>
</form>

@endsection