@extends ('layouts.main')

@section('title', 'Editar Competencia')

@section ('content')
<form method="post" action="{{ route('home') }}" class="competenciaForm">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        {{-- value="{{ old('title', $competencia["title"]) }}" --}}
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