
const objectGrid = document.getElementById("objectGrid");
const searchInput = document.getElementById("searchInput");
const filterButtons = document.querySelectorAll(".filter-button");
const resultCount = document.getElementById("resultCount");
const emptyMessage = document.getElementById("emptyMessage");

let celestialObjects = [];
let selectedCategory = "All";

// Get astronomy data from our JSON file
async function loadObjects() {
    try {
        const response = await fetch("../data/celestial-objects.json");

        if (!response.ok) {
            throw new Error("Could not load astronomy data.");
        }

        celestialObjects = await response.json();

        displayObjects(celestialObjects);

    } catch (error) {
        objectGrid.innerHTML =
            "<p class='loading-message'>Unable to load discoveries. Please refresh the page.</p>";

        resultCount.textContent = "Data unavailable";
        console.error(error);
    }
}

// Display object cards
function displayObjects(objects) {

    objectGrid.innerHTML = "";

    resultCount.textContent =
        objects.length + " discoveries found";

    emptyMessage.hidden = objects.length !== 0;

    objects.forEach(function (object) {

        const card = document.createElement("article");
        card.className = "object-card";

        const image = document.createElement("img");
        image.src = object.image;
        image.alt = object.name;
        image.loading = "lazy";

        const imageContainer = document.createElement("div");
        imageContainer.className = "object-image";
        imageContainer.appendChild(image);

        const info = document.createElement("div");
        info.className = "object-info";

        const category = document.createElement("span");
        category.className = "object-category";
        category.textContent = object.category;

        const title = document.createElement("h3");
        title.textContent = object.name;

        const description = document.createElement("p");
        description.textContent = object.description;

        const fact = document.createElement("div");
        fact.className = "object-fact";
        fact.textContent = "✦ " + object.fact;

        info.append(category, title, description, fact);
        card.append(imageContainer, info);

        objectGrid.appendChild(card);
    });
}

// Search and category filtering
function filterObjects() {

    const searchTerm = searchInput.value.toLowerCase().trim();

    const filteredObjects = celestialObjects.filter(function (object) {

        const matchesCategory =
            selectedCategory === "All" ||
            object.category === selectedCategory;

        const matchesSearch =
            object.name.toLowerCase().includes(searchTerm) ||
            object.description.toLowerCase().includes(searchTerm) ||
            object.category.toLowerCase().includes(searchTerm);

        return matchesCategory && matchesSearch;
    });

    displayObjects(filteredObjects);
}

// Search as the user types
searchInput.addEventListener("input", filterObjects);

// Category filter buttons
filterButtons.forEach(function (button) {

    button.addEventListener("click", function () {

        selectedCategory = button.dataset.category;

        filterButtons.forEach(function (item) {
            item.classList.remove("active");
        });

        button.classList.add("active");

        filterObjects();
    });

});

// Start loading the catalogue
loadObjects();
