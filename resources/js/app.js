const menu = document.getElementById('collapseMenu');
const openBtn = document.getElementById('toggleOpen');
const closeBtn = document.getElementById('toggleClose');

function setMenu(isOpen) {
    menu.classList.toggle('hidden', !isOpen);
    openBtn.setAttribute('aria-expanded', String(isOpen));
}

if (menu && openBtn && closeBtn) {
    openBtn.addEventListener('click', () => setMenu(true));
    closeBtn.addEventListener('click', () => setMenu(false));
}