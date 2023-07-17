@foreach ($competencias as $competencia)
    <div class="card">
        <img src="{{ asset('media/certificado-google.png') }}" alt="curso" />
        <div>
            <div>
                <p>Curso</p>
                <h4>{{ $competencia["title"] }}</h4>
            </div>
            <div class="iconos">
                    {{-- <i class="fa-solid fa-circle-notch" style="font-size: 30px"></i>
                <span>60%</span> --}}
                <i class="fa-solid fa-person-chalkboard"></i>
        <i class="fa-solid fa-video"></i>
        {{-- <i class="fa-solid fa-film"></i> --}}
        <img src="{{asset('media/cropped-android-chrome-512x512-1.png')}}" alt="">
        <a href="/home/{id}/edit"><x-editar /></a>
                <a href="/cursos"><x-ver /></a>
                <x-eliminar />
        </div>
    </div>
</div>
@endforeach
