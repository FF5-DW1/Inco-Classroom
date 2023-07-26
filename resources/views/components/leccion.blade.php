@foreach ($modulos as $modulo)
<div class="leccion card2">
  <div class="titulo">
    <p>Módulo</p>
    <h4>{{ $modulo["title"] }}</h4>
    <p>Duración: {{ $modulo["duration"] }} horas</p>
  </div>
  <div class="descripcion">
    <div>
      <p class="gris">Descripción</p>
    <p>{{ $modulo["description"] }}</p>
    </div>

    <!-- buttons -->
    <div>
      <a href="{{ route('modulo.edit', $modulo->id) }}">
          <x-editar :modulo="$modulo" />
      </a>
      <form action="{{ route('modulo.destroy', $modulo->id) }}" method="POST">
      @csrf
      @method("DELETE")
          <x-eliminar :modulo="$modulo" />
      </form>
    </div>
    <div class="hecho gris">Hecho <span><i class="fa-solid fa-check"></i></span></div>
  </div>
</div>
@endforeach