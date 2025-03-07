export function mobileMenu2() {

    const menuIcon = document.querySelector("#menu-icon2");
    const navbarMobile = document.querySelector("#navbar-mobile2");
    
    menuIcon.addEventListener("click", () => {
        navbarMobile.classList.toggle("hidden");
    });
    
    }