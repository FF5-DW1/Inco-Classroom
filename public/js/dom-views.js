const plegableCursos = document.querySelector('.plegableCursos');
const tarjetasCursos = document.querySelector('.contents');

const desplegarFaq = document.querySelectorAll('.desplegarFaq');
const plegarFaq = document.querySelectorAll('.plegarFaq');
const preguntas = document.querySelectorAll('.respuesta');


const desplegarweek = document.querySelectorAll('.desplegarweek');
const plegarweek = document.querySelectorAll('.plegarweek');
const calendario = document.querySelectorAll('.calendario');

if (plegableCursos == null || tarjetasCursos == null) {
    Array.from(plegarFaq).forEach(function (item) {
        item.addEventListener('click', function () {
            const index = Array.from(plegarFaq).indexOf(item);
            preguntas[index].classList.add('hidden');
            desplegarFaq[index].classList.remove('hidden');
            plegarFaq[index].classList.add('hidden');
        })
    });
    Array.from(desplegarFaq).forEach(function (item) {
        item.addEventListener('click', function () {
            const index = Array.from(desplegarFaq).indexOf(item);
            preguntas[index].classList.remove('hidden');
            desplegarFaq[index].classList.add('hidden');
            plegarFaq[index].classList.remove('hidden');
        })
    });
} else {
    function plegarCursos() {
        tarjetasCursos.classList.toggle('hidden');
    }

    plegableCursos.addEventListener('click', plegarCursos);
}

