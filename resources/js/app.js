require("./bootstrap");

import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();

try {
    window.Popper = require('@popperjs/core');

    require('bootstrap');
} catch (e) {}

require('wowjs');

window.onscroll = function () {
    var header_navbar = document.querySelector(".navbar-area");
    var sticky = header_navbar.offsetTop;
    if (window.pageYOffset > sticky) {
        header_navbar.classList.add("sticky");
    } else {
        header_navbar.classList.remove("sticky");
    }
    var backToTo = document.querySelector(".scroll-top");
    if (
        document.body.scrollTop > 50 ||
        document.documentElement.scrollTop > 50
    ) {
        backToTo.style.display = "flex";
    } else {
        backToTo.style.display = "none";
    }
};
new WOW().init();
let filterButtons = document.querySelectorAll(
    ".portfolio-btn-wrapper button"
);
filterButtons.forEach((e) =>
    e.addEventListener("click", () => {
        let filterValue = event.target.getAttribute("data-filter");
        iso.arrange({ filter: filterValue });
    })
);
var elements = document.getElementsByClassName("portfolio-btn");
for (var i = 0; i < elements.length; i++) {
    elements[i].onclick = function () {
        var el = elements[0];
        while (el) {
            if (el.tagName === "BUTTON") {
                el.classList.remove("active");
            }
            el = el.nextSibling;
        }
        this.classList.add("active");
    };
}
var pageLink = document.querySelectorAll(".page-scroll");
pageLink.forEach((elem) => {
    elem.addEventListener("click", (e) => {
        e.preventDefault();
        document
            .querySelector(elem.getAttribute("href"))
            .scrollIntoView({ behavior: "smooth", offsetTop: 1 - 60 });
    });
});
let navbarToggler = document.querySelector(".mobile-menu-btn");
navbarToggler.addEventListener("click", function () {
    navbarToggler.classList.toggle("active");
});
