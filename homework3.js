let cats = [
    { name: "Whiskers", isAdopted: false },
    { name: "Mittens", isAdopted: true },
    { name: "Shadow", isAdopted: false },
    { name: "Felix", isAdopted: true }
];

let availableCats = cats.filter(cat => !cat.isAdopted).map(cat => cat.name);
let adoptedCatsSentence = "Newly adopted cats: " + availableCats.join(", ") + ".";
console.log(adoptedCatsSentence);

let randomNum = Math.random() * 10;  // Generates a random number between 0 and 10
let result = randomNum > 5 ? "greater than five!" : "less than five!";
console.log(result);

cats.forEach(cat => {
    for (let prop in cat) {
        console.log(`${prop}: ${cat[prop]}`);
    }
});

if (1 == '1') {
    console.log("This is true");
}

if (1 === '1') {
    console.log("This is false");
}

let cuteCats = cats.map(cat => cat.name + " is cute!");
console.log(cuteCats);
