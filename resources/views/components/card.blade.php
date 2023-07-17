@foreach ($competencias as $competencia)
    <div class="card">
        <img src="{{ asset('media/certificado-google.png') }}" alt="curso" />
        <div>
            <div>
                <p>Curso</p>
                <h4>{{ $competencia["title"] }}</h4>
            </div>
            <div class="iconos">
                <div>
                    <i class="fa-solid fa-circle-notch" style="font-size: 30px"></i>
                <span style="font-size: 16px;">60%</span>
                </div>
                    <div>
                        <a href="/home/{id}/edit"><x-editar /></a>
                <a href="/cursos"><x-ver /></a>
                <x-eliminar />
                    </div>
        </div>
    </div>
</div>
@endforeach
