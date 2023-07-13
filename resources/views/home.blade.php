@extends('layouts.main')
@section('content')

<div class='homeContainer'>
  <x-search />
  <div class="compContainer">
    <section class='competencias'>
      <h2>Mis competencias</h2>
      <div class='grid'>
        <x-card />
        <x-card />
        <x-card />
        <x-plus />
      </div>
    </section>
    <section class='competencias'>
      <h2>Otros talleres disponibles</h2>
      <div class='grid'>
        <x-card />
        <x-card />
        <x-card />
        <x-card />
      </div>
    </section>
  </div>
</div>

@endsection