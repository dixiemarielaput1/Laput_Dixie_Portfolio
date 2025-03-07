export function mobileMenu() {

const menuIcon = document.querySelector("#menu-icon");
const navbarMobile = document.querySelector("#navbar-mobile");

menuIcon.addEventListener("click", () => {
    navbarMobile.classList.toggle("hidden");
});

}