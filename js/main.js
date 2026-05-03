"use strict";

//function to open/close nav-menu
//elements
const openBtn = document.getElementById("open-menu");

//eventlisteners
openBtn.addEventListener('click', toggleMenu);

// function to toggle the nav-menu
function toggleMenu() {
    const navMenuEl = document.getElementById("main-nav");

    navMenuEl.classList.toggle("is-open");
}