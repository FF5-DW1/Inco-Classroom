@foreach ($cursos as $curso)

  <div class="curso card2">
    <div class="titulo">
        <p>Curso 1</p>
        <h4>{{ $curso["title"] }}</h4>
        <div>
          <p>Duración: {{ $curso["duration"] }} semanas</p>
          <i class="fa-solid fa-circle-check"></i>
        </div>
    </div>
    <div class="descripcion">
        <div>
            <p class="azul">Descripción</p>
            <p>{{ $curso["description"] }}</p>
        </div>
        <div class="iconos">
          <div>
            <a href="https://www.coursera.org/learn/asistencia-tecnica/home/week/1">
                <img src="{{asset('media/cropped-android-chrome-512x512-1.png')}}" alt="coursera">
            </a>
          </div>
          <div>
          <x-editar :curso="$curso" />
          <a href="/cursos/1"><x-ver /></a>
          {{-- <x-eliminar :curso="$curso" /> --}}
          </div>
        </div>
    </div>
</div>
   
@endforeach
