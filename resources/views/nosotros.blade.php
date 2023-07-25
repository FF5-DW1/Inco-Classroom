@extends('layouts.main')
@section('content')

<div class="nosotros paddingContainer">
    <div class="equipo">
        <h2>El equipo</h2>
        {{-- <img src="{{asset('media/equipo.png')}}" alt="equipo"> --}}
        <div class="personas">
            {{-- <div class="personas">
                <img src="{{asset('media/Ángel.jpg')}}" alt="">
                <img src="{{asset('media/Ana.jpg')}}" alt="">
                <img src="{{asset('media/Teresa.jpg')}}" alt="">
            </div> --}}
            <div class="datos">
                <div>
                    <img src="{{asset('media/Ángel.jpg')}}" alt="">
                    <h3>Ángel Cruz</h3>
                    <p>Facilitador IT</p>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/angelcruzgonzalez/">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>                       
                    </div>                   
                </div>
                <div>
                    <img src="{{asset('media/Ana.jpg')}}" alt="">
                    <h3>Ana de Miguel</h3>
                    <p>Program Manager</p>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/ana-de-miguel-49707b21/">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>   
                    </div>                    
                </div>
                <div>
                    <img src="{{asset('media/Teresa.jpg')}}" alt="">
                    <h3>Teresa Amézola</h3>
                    <p>Formadora Empleabilidad</p>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/teresa-amézola-del-alcázar-b6126b12/">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>   
                    </div>                    
                </div>  
            </div>
            {{-- <div class="personas">
                <img src="{{asset('media/Marina.jpg')}}" alt="">
                <img src="{{asset('media/Patricia.jpg')}}" alt="">
            </div> --}}
            <div class="datos">
                <div>
                    <img src="{{asset('media/Marina.jpg')}}" alt="">
                    <h3>Marina Díaz</h3>
                    <p>Formadora Empleabilidad</p>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/marinadiazgrimalt/">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>   
                    </div>                   
                </div>
                <div>
                    <img src="{{asset('media/Patricia.jpg')}}" alt="">
                    <h3>Patricia Hidalgo</h3>
                    <p>Formadora Empleabilidad</p>
                    <div class="social">
                        <a href="https://www.linkedin.com/in/patriciahidalgob/">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>   
                    </div>                   
                </div>  
            </div>
        </div>
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