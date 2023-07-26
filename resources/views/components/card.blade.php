@foreach ($competencias as $competencia)
    <div class="card">
        <a href="/cursos">
            <img src="{{ asset('media/certificado-google.png') }}" alt="curso" />
        </a>
        <div>
            <div>
                <p>Curso</p>
                <h4>{{ $competencia["title"] }}</h4>
            </div>
            <div class="iconos">
                    <!-- <i class="fa-solid fa-circle-notch" style="font-size: 30px"></i>
                <span>60%</span> -->
                
                <i class="fa-solid fa-person-chalkboard"></i>
                <!-- <i class="fa-solid fa-video"></i> -->
                <i class="fa-solid fa-film"></i>
                <!-- <img src="{{asset('media/cropped-android-chrome-512x512-1.png')}}" alt=""> -->
                
                <!-- buttons -->
                <a href="/home/{{ $competencia->id }}/edit">
                    <x-editar :competencia="$competencia" />
                </a>
                <a href="{{ route('competencia.show', $competencia->slug )}}">
                    <x-ver :competencia="$competencia" />
                </a>
                <form action="/home/{{ $competencia->id }}" method="POST">
                    @csrf
                    @method("DELETE")
                        <x-eliminar :competencia="$competencia" />
                </form>
            </div>
        </div>
    </div>
@endforeach
