@foreach ($competencias as $competencia)
    <div class="card">
        <img src="{{ asset('media/certificado-google.png') }}" alt="curso" />
        <div>
            <div>
                <p>Curso</p>
                <h4>{{ $competencia["title"] }}</h4>
            </div>
            <div class="prog-curso">
                <div>
                    {{-- <i class="fa-solid fa-circle-notch" style="font-size: 30px"></i>
                <span>60%</span> --}}
                <i class="fa-solid fa-person-chalkboard"></i>
        <i class="fa-solid fa-video"></i>
        {{-- <i class="fa-solid fa-film"></i> --}}
        <img src="{{asset('media/cropped-android-chrome-512x512-1.png')}}" alt="">
        <x-editar />
                <a href="/cursos"><x-ver /></a>
            </div>
        </div>
    </div>
@endforeach
