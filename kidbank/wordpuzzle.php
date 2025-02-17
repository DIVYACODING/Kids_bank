<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Search Puzzle</title>
    <link rel="stylesheet" href="./assets/css/wordpuzz.css">
</head>
<body>
    <div class="container">
        <h1>Financial Word Search Puzzle</h1>
        <div id="word-search-grid" class="word-search-grid"></div>
        <button id="start-button" onclick="startGame()">Start Game</button>
        <button id="reset-button" onclick="resetGame()" disabled>Reset</button>
        <div id="timer">Time Left: <span id="time-left">60</span> seconds</div>
        
    </div>
    <script src="./assets/js/wordpuzzl.js"></script>
</body>
</html>
