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
        <div class="iconos">
          <div>
            <i class="fa-solid fa-person-chalkboard"></i>
            <i class="fa-solid fa-video"></i>
            {{-- <i class="fa-solid fa-film"></i> --}}
            <a href="https://www.coursera.org/learn/asistencia-tecnica/home/week/1">
                <img src="{{asset('media/cropped-android-chrome-512x512-1.png')}}" alt="coursera">
            </a>
          </div>
          <div>
          <x-editar :curso="$curso" />
          <a href="{{ route('curso.show', $curso->slug )}}">
                    <x-ver :curso="$curso" />
                </a>
                <form action="{{ route('curso.destroy', $curso->id) }}" method="POST">
                  @csrf
                  @method("DELETE")
                    <x-eliminar :curso="$curso" />
                </form>

          </div>
        </div>
    </div>
</div>
   
@endforeach
