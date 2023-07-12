@extends('layouts.main')
@section('content')

<div class="nosotros paddingContainer">
    <div class="enlaces">
        <div>
            <h2>INCO Academy</h2>
            <li>
                <a href="https://www.academy.inco-group.co/">https://www.academy.inco-group.co/</a>
            </li>
        </div>
        <a href="https://www.academy.inco-group.co/">
            <img src="{{asset('media/inco-academy.jpg')}}" alt="inco">
        </a> 
    </div>
    <div class="enlaces">
        <div>
            <h2>INCO Academy Spain</h2>
            <li>
                <a href="http://incoacademy.es/">http://incoacademy.es/</a>
            </li>
        </div>
        <a href="http://incoacademy.es/">
            <img src="{{asset('media/inco-spain.jpg')}}" alt="inco spain">
        </a>  
    </div>
    <div>
        <h2>El equipo</h2>
        <img src="{{asset('media/equipo.png')}}" alt="equipo">
    </div>
</div>

@endsection