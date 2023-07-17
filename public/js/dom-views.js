const plegableCursos = document.querySelector('.plegableCursos');
const tarjetasCursos = document.querySelector('.contents');

function plegarCursos() {
    tarjetasCursos.classList.toggle('hidden');
}

plegableCursos.addEventListener('click', plegarCursos);