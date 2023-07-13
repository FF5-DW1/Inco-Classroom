@extends('layouts.main')
@section('content')

<div class="paddingContainer">
    <a href="/home"><< Mis competencias</a>
    <h1>Competencias TI <i class="fa-solid fa-chevron-down"></i></h1>
    <div class="contents">
        <x-curso />
        <x-curso />
        <x-plus2 />
    </div>
    <h2>Progreso</h2>
    <div class="progreso"></div>
    <h2>Acceso rápido</h2>
    <div class="accesoRapido">
        <div>
            <img src="{{ asset('media/zoom.png') }}" alt="zoom">
            <div>
                <h4>Enlace Zoom</h4>
            <p class="gris">Ver instrucciones</p>
            </div>   
        </div>
        <div>
            <img src="{{ asset('media/slack.png') }}" alt="slack">
            <div>
                <h4>Enlace Slack</h4>
            <p class="gris">Ver instrucciones</p>
            </div>  
        </div>
        <div>
            <img src="{{ asset('media/g-calendar.png') }}" alt="g-calendar">
            <div>
                <h4>Enlace Google Calendar</h4>
                <p class="gris">Ver instrucciones</p>   
            </div>
        </div>
    </div>
    <h2>Calendario</h2>
    <div class="calendario">
        <h3>Semana 1 <i class="fa-solid fa-chevron-down"></i></h3>
        <h3>Semana 2 <i class="fa-solid fa-chevron-down"></i></h3>
            <h3>Semana 3 <i class="fa-solid fa-chevron-down"></i></h3>
                <h3>Semana 4 <i class="fa-solid fa-chevron-down"></i></h3>
    </div>
</div>

@endsection