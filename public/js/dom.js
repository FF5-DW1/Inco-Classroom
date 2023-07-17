const plegableUser = document.querySelector('.plegableUser');
const panelUser = document.querySelector('.user-panel');

function plegarPanelUsuario() {
    panelUser.classList.toggle('hidden');
}

plegableUser.addEventListener('click', plegarPanelUsuario);