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

// Get json data from local json file and log fetched data
fetch('http://localhost:63342/dutch-tackle/products.json')
.then(response=> {
    if(!response.ok) {
        throw new Error('HTTP Error! status:' . response.status);
    }
    console.log(response);
    return response.json();
})
.then(data => {
    console.log(data);
})
.catch(error => {
    console.error('Error:', error);
});

