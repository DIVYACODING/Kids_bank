const words = ["MONEY", "SAVINGS", "BUDGET", "INVEST", "EARN", "SPEND", "SHARE", "GROW", "BANK", "CASH"];
const gridSize = 10;
const timeLimitSeconds = 60;
let wordSearchGrid = [];
let selectedWords = [];
let timerInterval;
let foundWords = [];
const wordColors = ['#ff6384', '#36a2eb', '#ffce56', '#9966ff', '#4bc0c0', '#ff9f40', '#8ced84', '#e83e8c', '#6890f0', '#f08080'];


function generateWordSearchGrid() {
    wordSearchGrid = [];
    // Create an empty grid
    for (let i = 0; i < gridSize; i++) {
        let row = [];
        for (let j = 0; j < gridSize; j++) {
            row.push("");
        }
        wordSearchGrid.push(row);
    }
    // Place words horizontally, vertically, or diagonally
    for (const word of words) {
        let placed = false;
        while (!placed) {
            const direction = getRandomDirection();
            const row = Math.floor(Math.random() * gridSize);
            const col = Math.floor(Math.random() * gridSize);
            placed = tryPlaceWord(word, row, col, direction);
        }
    }
    // Fill empty cells with random letters
    for (let i = 0; i < gridSize; i++) {
        for (let j = 0; j < gridSize; j++) {
            if (wordSearchGrid[i][j] === "") {
                wordSearchGrid[i][j] = getRandomLetter();
            }
        }
    }
}

function getRandomDirection() {
    const directions = ["horizontal", "vertical", "diagonal"];
    return directions[Math.floor(Math.random() * directions.length)];
}

function getRandomLetter() {
    return String.fromCharCode(65 + Math.floor(Math.random() * 26));
}

function displayWordSearchGrid() {
    const wordSearchGridElement = document.getElementById("word-search-grid");
    wordSearchGridElement.innerHTML = "";
    for (let i = 0; i < wordSearchGrid.length; i++) {
        for (let j = 0; j < wordSearchGrid[0].length; j++) {
            const cell = document.createElement("div");
            cell.textContent = wordSearchGrid[i][j];
            cell.classList.add("cell");
            cell.dataset.row = i;
            cell.dataset.col = j;
            cell.addEventListener("mousedown", cellMouseDownHandler);
            cell.addEventListener("mouseover", cellMouseOverHandler);
            wordSearchGridElement.appendChild(cell);
        }
    }
}

function tryPlaceWord(word, row, col, direction) {
    const len = word.length;
    let endRow = row;
    let endCol = col;
    if (direction === "horizontal") {
        endCol += len - 1;
    } else if (direction === "vertical") {
        endRow += len - 1;
    } else if (direction === "diagonal") {
        endRow += len - 1;
        endCol += len - 1;
    }
    if (endRow >= gridSize || endCol >= gridSize) {
        return false;
    }
    for (let i = 0; i < len; i++) {
        const cell = direction === "horizontal" ? wordSearchGrid[row][col + i] :
                     direction === "vertical" ? wordSearchGrid[row + i][col] :
                     wordSearchGrid[row + i][col + i];
        if (cell !== "" && cell !== word[i]) {
            return false;
        }
    }
    for (let i = 0; i < len; i++) {
        if (direction === "horizontal") {
            wordSearchGrid[row][col + i] = word[i];
        } else if (direction === "vertical") {
            wordSearchGrid[row + i][col] = word[i];
        } else if (direction === "diagonal") {
            wordSearchGrid[row + i][col + i] = word[i];
        }
    }
    return true;
}

function cellMouseDownHandler(event) {
    event.preventDefault();
    const cell = event.target;
    const row = parseInt(cell.dataset.row);
    const col = parseInt(cell.dataset.col);
    cell.classList.add("selected");
    selectedWords.push(getWordFromCell(row, col));
    document.addEventListener("mouseup", cellMouseUpHandler);
}

function cellMouseOverHandler(event) {
    event.preventDefault();
    if (event.buttons === 1) {
        const cell = event.target;
        const row = parseInt(cell.dataset.row);
        const col = parseInt(cell.dataset.col);
        if (!cell.classList.contains("selected")) {
            cell.classList.add("selected");
            selectedWords.push(getWordFromCell(row, col));
        }
    }
}

function cellMouseUpHandler(event) {
    document.removeEventListener("mouseup", cellMouseUpHandler);
    checkWords();
}

function getWordFromCell(row, col) {
    let word = "";
    for (const { r, c } of selectedWords) {
        if (r === row && c === col) {
            return word;
        }
        word += wordSearchGrid[r][c];
    }
    return word;
}

function checkWords() {
    const foundNewWords = [];
    for (const word of words) {
        if (selectedWords.includes(word) && !foundWords.includes(word)) {
            foundWords.push(word);
            foundNewWords.push(word);
            highlightWord(word);
        }
    }
    if (foundWords.length === words.length) {
        alert("Congratulations! You found all words.");
        clearInterval(timerInterval);
        resetGame();
    } else {
        if (foundNewWords.length > 0) {
            alert(`You found the following words: ${foundNewWords.join(", ")}`);
        } else {
            alert("You didn't find any new words. Try again!");
        }
        resetSelection();
    }
}

function highlightWord(word) {
    const color = wordColors[foundWords.length % wordColors.length];
    for (const { r, c } of selectedWords) {
        if (word === getWordFromCell(r, c)) {
            const cell = document.querySelector(`.cell[data-row="${r}"][data-col="${c}"]`);
            cell.style.color = color;
            break;
        }
    }
}

function resetSelection() {
    for (const { r, c } of selectedWords) {
        const cell = document.querySelector(`.cell[data-row="${r}"][data-col="${c}"]`);
        cell.classList.remove("selected");
    }
    selectedWords = [];
}

function startGame() {
    generateWordSearchGrid();
    displayWordSearchGrid();
    startTimer();
    document.getElementById("start-button").disabled = true;
    document.getElementById("reset-button").disabled = false;
}

function resetGame() {
    clearInterval(timerInterval);
    document.getElementById("time-left").textContent = timeLimitSeconds;
    wordSearchGrid = [];
    selectedWords = [];
    foundWords = [];
    document.getElementById("word-search-grid").innerHTML = "";
    document.getElementById("start-button").disabled = false;
    document.getElementById("reset-button").disabled = true;
}

function startTimer() {
    let timeLeft = timeLimitSeconds;
    timerInterval = setInterval(() => {
        timeLeft--;
        document.getElementById("time-left").textContent = timeLeft;
        if (timeLeft === 0) {
            clearInterval(timerInterval);
            if (foundWords.length === words.length) {
                alert("Congratulations! You found all the words.");
            } else {
                alert("Time's up! You failed to find all the words.");
            }
            resetGame();
        }
    }, 1000);
}

startGame();