let menuContainer = document.getElementById("menu");
let menuOpenButton = document.getElementById("menu-open");
let menuCloseButton = document.getElementById("menu-close");
let searchContainer = document.getElementById("search-mobile");
let navIcons = document.getElementById("nav-icons");


function toggleMenu () {
    menuContainer.classList.toggle("hidden");
    menuOpenButton.classList.toggle("hidden");
    menuCloseButton.classList.toggle("hidden");
    searchContainer.classList.toggle("hidden");
    navIcons.classList.toggle("hidden");

    if (menuContainer.classList.contains("hidden")) {
        // Todo: add tailwind classes to animate menu
        menuContainer.classList.add("")
    }

}



