@extends ('layouts.main')

@section('title', 'Editar Competencia')

@section ('content')
<link rel="stylesheet" href="{{ asset('css/competenciaNew.css')}}" type="text/css">
<form method="post" action="{{ route('home') }}">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <!-- value="{{ old('title', $competencia["title"]) }}" -->
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
    </div>
    <div>
        <label for="image_url">Image URL:</label>
        <input type="text" id="image_url" name="image_url" placeholder="Enter image URL">
    </div>
    <button type="submit">Guardar</button>
</form>
@endsection