const plegableUser = document.querySelector('.plegableUser');
const panelUser = document.querySelector('.user-panel');
const hamburger = document.querySelector('.fa-bars');
const menu = document.querySelector('.menu');

function plegarPanelUsuario() {
    panelUser.classList.toggle('hidden');
}

if (plegableUser == null || panelUser == null) {
    function plegarMenu() {
        menu.classList.toggle('visible');
    }
    hamburger.addEventListener('click', plegarMenu);
}

plegableUser.addEventListener('click', plegarPanelUsuario);

