@foreach ($modulos as $modulo)
<div class="leccion card2">
  <div class="titulo">
    <p>Módulo</p>
    <h4>{{ $modulo["title"] }}</h4>
    <p>Duración: 3 horas</p>
  </div>
  <div class="descripcion">
    <div>
      <p class="gris">Descripción</p>
    <p>{{ $modulo["description"] }}</p>
    </div>
    <div class="hecho gris">Hecho <span><i class="fa-solid fa-check"></i></span></div>
  </div>
</div>