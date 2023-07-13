const plegable = document.querySelector('.fa-chevron-down');
const panel = document.querySelector('.user-panel');

function plegarPanel() {
    panel.classList.toggle('hidden');
}

plegable.addEventListener('click', plegarPanel);