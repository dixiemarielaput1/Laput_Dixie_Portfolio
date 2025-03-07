export function portfolioMenu() {

    const menuIcon2 = document.querySelector("#menu-icon2");
    const navbarMobile2 = document.querySelector("#navbar-mobile2");
    
    menuIcon2.addEventListener("click", () => {
        navbarMobile2.classList.toggle("hidden");
    });
    
    }