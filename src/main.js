let menuContainer = document.getElementById("menu");
let nav = document.getElementById("nav");
let menuOpenButton = document.getElementById("menu-open");
let menuCloseButton = document.getElementById("menu-close");
let searchContainer = document.getElementById("search-mobile");
let navIcons = document.getElementById("nav-icons");

function animateMenu() {
    menuContainer.classList.toggle("invisible");
    menuContainer.classList.toggle("h-80");
    menuContainer.classList.toggle("h-0");
    menuOpenButton.classList.toggle("hidden");
    menuCloseButton.classList.toggle("hidden");
    // navIcons.classList.toggle("hidden");
}
