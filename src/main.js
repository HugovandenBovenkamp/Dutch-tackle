let menuContainer = document.getElementById("menu");
let menuOpenButton = document.getElementById("menu-open");
let menuCloseButton = document.getElementById("menu-close");

function animateMenu() {
    menuContainer.classList.toggle("invisible");
    menuContainer.classList.toggle("h-80");
    menuContainer.classList.toggle("h-0");
    menuOpenButton.classList.toggle("hidden");
    menuCloseButton.classList.toggle("hidden");
}