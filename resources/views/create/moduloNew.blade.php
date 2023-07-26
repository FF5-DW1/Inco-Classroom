@extends ('layouts.main')

@section('title', 'Crear nuevo Modulo')

@section ('content')
<form method="POST" action="{{ route('home') }}" class="moduloForm">
    @csrf
    <h2>Crear Modulo nuevo</h2>
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
    <button type="submit">Crear</button>
</form>

@endsection