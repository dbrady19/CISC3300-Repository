// Log to the console when the script is loaded
console.log("in-class-4.js loaded!");

// Create an array with the elements 1, 2, 3, 4, 5
const numbers = [1, 2, 3, 4, 5];

// Loop through the array
for (let i = 0; i < numbers.length; i++) {
    // Check if the number is odd or even using modulus (%)
    if (numbers[i] % 2 === 0) {
        // If even, log the number with "is even"
        console.log(`${numbers[i]} is even!`);
    } else {
        // If odd, log the number with "is odd"
        console.log(`${numbers[i]} is odd!`);
    }
}
