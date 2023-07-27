@extends ('layouts.main')

@section('title', 'Crear Competencia')

@section ('content')
<form method="POST" action="{{ route('competencia.store') }}" class="competenciaForm">
    @csrf
    <h2>Crear competencia nueva</h2>
    <div>
        <label for="title">Title:</label>
        <!-- value should be empty for NEW -->
        <input type="text" id="title" name="title" value="" required>
        @error('title')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <!-- <div>
        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" value="">
        @error('image_url')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div> -->
    <div>
        <label for="presentaciones_url">Presentaciones URL:</label>
        <input type="text" id="presentaciones_url" name="presentaciones_url" value="">
        @error('presentaciones_url')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <div>
        <label for="grabaciones_url">Grabaciones URL:</label>
        <input type="text" id="grabaciones_url" name="grabaciones_url" value="">
        @error('grabaciones_url')
        <div class="form-error">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit">Crear</button>
</form>

@endsection