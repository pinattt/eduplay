function startNumberGame() {
    alert("Let's learn numbers!");
}

function startColorGame() {
    alert("Let's learn colors!");
}

function startReadingGame() {
    alert("Let's learn to read!");
}

function startNumberGame() {
    alert("Let's learn numbers!");
}

function startColorGame() {
    alert("Let's learn colors!");
}

function startReadingGame() {
    alert("Let's learn to read!");
}

// Game Menghitung
let currentCount = 0;

function checkCountingAnswer() {
    const userAnswer = document.getElementById("countInput").value;
    const resultMessage = document.getElementById("countingResultMessage");
    if (parseInt(userAnswer) === currentCount) {
        resultMessage.textContent = "Jawaban benar!";
    } else {
        resultMessage.textContent = "Jawaban salah, coba lagi!";
    }
}

function nextCounting() {
    currentCount = Math.floor(Math.random() * 10) + 1; // Randomkan angka antara 1 dan 10
    document.getElementById("countingObjects").innerHTML = Array(currentCount).fill('🍎').join(' ');
    document.getElementById("countInput").value = '';
}

// Game Warna
let colors = ["red", "blue", "green", "yellow"];
let currentColor = '';

function checkAnswer(selectedColor) {
    const resultMessage = document.getElementById("colorResultMessage");
    if (selectedColor === currentColor) {
        resultMessage.textContent = "Jawaban benar!";
    } else {
        resultMessage.textContent = "Jawaban salah, coba lagi!";
    }
}

function nextColor() {
    currentColor = colors[Math.floor(Math.random() * colors.length)];
    document.getElementById("colorBox").style.backgroundColor = currentColor;
}

// Game Bentuk
let shapes = ["circle", "square", "triangle"];
let currentShape = '';

function checkShape(selectedShape) {
    const resultMessage = document.getElementById("shapeResultMessage");
    if (selectedShape === currentShape) {
        resultMessage.textContent = "Jawaban benar!";
    } else {
        resultMessage.textContent = "Jawaban salah, coba lagi!";
    }
}

function nextShape() {
    currentShape = shapes[Math.floor(Math.random() * shapes.length)];
    document.getElementById("shapeBox").className = `shape-box ${currentShape}`;
}

