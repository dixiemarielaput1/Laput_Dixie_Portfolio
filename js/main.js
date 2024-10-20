const menuIcon = document.querySelector('#menu-icon');
const mobileMenu = document.querySelector('#navbar-mobile');

menuIcon.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});