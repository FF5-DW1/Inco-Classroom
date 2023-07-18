@extends('layouts.main')
@section('content')

<div class="nosotros paddingContainer">
    <div class="equipo">
        <h2>El equipo</h2>
        <img src="{{asset('media/equipo.png')}}" alt="equipo">
    </div>
    <div class="sobre-inco">
        <h2>Sobre INCO</h2>
        <div class="enlaces">
            <div>
                <a href="https://www.academy.inco-group.co/">
                    <img src="{{asset('media/inco-academy.jpg')}}" alt="inco">
                </a>
                <h3>INCO Academy</h3>
                <a href="https://www.academy.inco-group.co/">https://www.academy.inco-group.co/</a>
            </div>
            <div>
                <a href="http://incoacademy.es/">
                    <img src="{{asset('media/inco-spain.jpg')}}" alt="inco spain">
                </a>  
                <h3>INCO Academy Spain</h3>
                <a href="http://incoacademy.es/">http://incoacademy.es/</a>
            </div>

        </div>  
    </div>
</div>

@endsection