export function mobileMenu3() {

    const menuIcon = document.querySelector("#menu-icon3");
    const navbarMobile = document.querySelector("#navbar-mobile3");
    
    menuIcon.addEventListener("click", () => {
        navbarMobile.classList.toggle("hidden");
    });
    
    }