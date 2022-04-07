//Scroll Library Init
AOS.init();

// Scroll Events
window.onscroll = function() { scrollFunction(); };
let nav = document.getElementById("nav-main");
let navLogo = document.getElementById("navbar-logo");
let navFont = document.getElementById("nav-font");
let navCollapse = document.getElementById("navbarNav");

function scrollFunction() {
    if (document.documentElement.scrollTop > 50) {
        nav.setAttribute("style", "height: 100px; background: #E8DCD0 !important");
        navLogo.setAttribute("style", "height: 50px; width: 50px");
        navFont.setAttribute("style", "font-size: 1.5em");
        navCollapse.setAttribute("style", "background: #E8DCD0 !important");


    } else {
        nav.setAttribute("style", "height: 150px; background: transparent !important");
        navLogo.setAttribute("style", "height: 70px; width: 70px");
        navFont.setAttribute("style", "font-size: 2em");
        navCollapse.setAttribute("style", "background: transparent !important");
    }
}

//Retrieve API
document.getElementById("btn-retrieve").addEventListener("click", retreiveData);

function retreiveData() {
    let url = "http://localhost:3000/api/displayAll.php";
    const request = new XMLHttpRequest();
    request.open("GET", url);
    request.onload = function() {
        //get only the data with .data property
        let result = JSON.parse(request.responseText).data;
        for (value of result) {
            document.getElementById("result").innerHTML += `<div class="card p-0 shadow border-0" data-aos="fade-up" data-aos-offset="300"
            data-aos-easing="ease-in-sine">
            <h5 class="card-title m-0 p-3 text-center">${value.name}</h5>
            <img src="img/${value.picture}" class="card-img-top rounded-0" alt="${value.name}">
            <div class="card-body">
                <p class="card-text">${value.description}</p>
                <p class="card-text">Price: ${value.price} EUR</p>
                <p class="card-text">Lat: ${value.latitude}</p>
                <p class="card-text">Lng: ${value.longitude}</p>
            </div>
        </div>`
        }
    }
    request.send();
}