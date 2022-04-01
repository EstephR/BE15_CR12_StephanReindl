//Scroll Library Init
AOS.init();

// Scroll Events
window.onscroll = function() { scrollFunction(); };
let nav = document.getElementById("nav-main");
let navLogo = document.getElementById("navbar-logo");
let navFont = document.getElementById("nav-font");

function scrollFunction() {
    if (document.documentElement.scrollTop > 50) {
        nav.setAttribute("style", "height: 100px; background: #E8DCD0 !important");
        navLogo.setAttribute("style", "height: 50px; width: 50px");
        navFont.setAttribute("style", "font-size: 1.5em");


    } else {
        nav.setAttribute("style", "height: 150px; background: transparent !important");
        navLogo.setAttribute("style", "height: 70px; width: 70px");
        navFont.setAttribute("style", "font-size: 2em");
    }
}