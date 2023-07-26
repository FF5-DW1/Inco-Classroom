const plegableUser = document.querySelector('.plegableUser');
const panelUser = document.querySelector('.user-panel');
const hamburger = document.querySelector('.fa-bars');
const menu = document.querySelector('.menu');

function plegarPanelUsuario() {
    panelUser.classList.toggle('hidden');
}

function plegarMenu() {
    menu.classList.toggle('visible');
}

plegableUser.addEventListener('click', plegarPanelUsuario);
hamburger.addEventListener('click', plegarMenu);
