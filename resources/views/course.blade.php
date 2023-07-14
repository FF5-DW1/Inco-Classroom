@extends('layouts.main')
@section('content')

<div class="paddingContainer">
  <a href="/cursos"><< Competencias TI</a>
  <h2>Curso 1: Aspectos básicos de la Asistencia Técnica</h2>
  <div class="recursos">
    <h3>Recursos</h3>
    <div>
      <div>
        <i class="fa-solid fa-person-chalkboard"></i>
        <a href="">Presentaciones >></a>
      </div>
      <div>
        <i class="fa-solid fa-video"></i>
        {{-- <i class="fa-solid fa-film"></i> --}}
        <a href="">Grabaciones >></a>
      </div>
      <div>
        <img src="{{asset('media/cropped-android-chrome-512x512-1.png')}}" alt="">
        <a href="https://www.coursera.org/learn/asistencia-tecnica/home/week/1">Coursera >></a>
      </div>
    </div>
  </div>
  <div class="lecciones">
    <x-leccion />
    <x-leccion />
    <x-plus3 />
  </div>
</div>

@endsection