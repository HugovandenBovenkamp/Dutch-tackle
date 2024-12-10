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


// Get items from products.json and display the products by category
let resultSet = [];
fetch('http://localhost:63342/dutch-tackle/products.json')
    .then(response => {
        if (!response.ok) {
            throw new Error('HTTP Error! status:'.response.status);
        }
        return response.json();
    })
    .then(function (data) {
        for (let i = 0; i < data.products.length; i++) {
            resultSet.push(data.products[i]);
            console.log(resultSet)
        }
        jsonToHtml(resultSet);
    })
    .catch(error => console.error('Error:', error))

// Filter the categories, so the items are displayed per category
function filterByCategory(category) {
    let filteredResults = resultSet.filter(function (item) {
        return category === 'all' || item.category === category;
    });

    jsonToHtml(filteredResults)
    console.log(filteredResults);
}

// Show the json products data and turn it into html elements with css classes applied to each product
function jsonToHtml(resultSet) {
    if (resultSet.length === 0) {
        console.info('ResultSet is empty');
        return;
    }
    let container = document.getElementById("product-wrapper");
    container.innerHTML = "";
    for (let i = 0; i < resultSet.length; i++) {
        let div = document.createElement("div");
        div.classList.add("flex", "flex-col", "justify-center", "items-center", "lg:gap-y-3", "bg-white", "text-black", "mb-8");
        let twoDecimalsPrice = (resultSet[i].price / 100).toFixed(2).replace(".", ",");
        div.innerHTML = `
            <img class="w-72 h-72 object-contain mb-4 p-3" src="${resultSet[i].productImage}">
            <h4 class="font-bold">${resultSet[i].name}</h4>
            <span class="font-bold">€${twoDecimalsPrice}</span>
            <button class="rounded bg-yellow p-3 mt-4 mb-6 text-dark-gray transition ease-in-out duration-150 hover:bg-light-yellow font-bold">Add to cart</button>
            `
        container.appendChild(div);
    }
}
