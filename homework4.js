// Change the color of all list items to blue when any list item is clicked
const listItems = document.querySelectorAll("#color-list li");

listItems.forEach(item => {
    item.addEventListener("click", () => {
        listItems.forEach(li => li.style.color = "blue");
    });
});

// Load and display the cats from the provided array in the second unordered list
const catsList = document.getElementById('cats-list');

// Example cats array (from the GitHub file)
const cats = [
    { name: "Whiskers" },
    { name: "Fluffy" },
    { name: "Tom" },
    { name: "Garfield" }
];

cats.forEach(cat => {
    const li = document.createElement('li');
    li.textContent = cat.name;
    catsList.appendChild(li);
});

// Form submission handling
const form = document.getElementById('myForm');
const input = document.getElementById('textInput');
const message = document.getElementById('message');

form.addEventListener('submit', function (event) {
    event.preventDefault();  // Prevent the default form submission behavior
    const inputValue = input.value.trim();
    
    // Clear any previous message
    message.textContent = '';
    
    if (inputValue === '') {
        // Show error if the input is empty
        message.textContent = "Please Provide a Value";
        message.className = 'error';
    } else {
        // Show success if the input is not empty
        message.textContent = "Success";
        message.className = 'success';
        console.log(inputValue);
    }
});
