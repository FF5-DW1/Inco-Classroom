@extends('layouts.main')
@section('content')

<div class='homeContainer'>
  <x-search />
  <div class="compContainer">
    <section class='competencias'>
      <h2>Mis competencias</h2>
      <div class='grid'>
        @if (!empty($user->competencias))
          <x-card :competencias="$user->competencias" />
          
        @else
          <p>No competencias found.</p>
        @endif
        <x-plus />
      </div>
    </section>
    <section class='competencias'>
      <h2>Otros talleres disponibles</h2>
      <div class='grid'>
        @if (!empty($otherCompetencias))
          @foreach ($otherCompetencias as $competencia)
            <x-card :competencia="$competencia" />
          @endforeach
        @else
          <!-- Display a message when there are no other competencias -->
          <p>No other competencias found.</p>
        @endif
        <x-plus />
      </div>
    </section>
  </div>
</div>

@endsection
