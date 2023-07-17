@foreach ($cursos as $curso)
    <div class="curso card2">
        <div class="titulo">
            <p>Curso 1</p>
            <h4>{{ $curso["title"] }}</h4>
            <p>Duración: {{ $curso["duration"] }} semanas</p>
        </div>
        <div class="descripcion">
            <div>
                <p class="gris">Descripción</p>
                <p>{{ $curso["description"] }}</p>
            </div>
            <a href="/cursos/1"><x-ver /></a>
        </div>
    </div>
@endforeach
