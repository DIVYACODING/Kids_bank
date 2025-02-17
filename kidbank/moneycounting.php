<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Counting Game</title>
    <link rel="stylesheet" href="./assets/css/money.css">
</head>
<body>
    <div class="game-container">
        <h1 class="game-title">Money Counting Game</h1>
        <div id="piggy-bank" class="piggy-bank"></div>
        <div class="coins">
          <img src="https://images.vexels.com/media/users/3/240601/isolated/preview/43782d2fd6bf079163c70f40a300c9df-25-money-label-cut-out.png" class="draggable" data-value="25">
          <img src="https://images.vexels.com/media/users/3/240600/isolated/preview/cf63828baa5d5ae749a8bf48b4905f80-10-label-cut-out.png" class="draggable" data-value="10">
          <img src="https://images.vexels.com/media/users/3/240597/isolated/preview/5082ef17d8d7788795aed2af4e419978-5-money-label-cut-out.png" class="draggable" data-value="5">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQcojIKS6981oSaGnU_Z-HoV0ae24vDRyKIDvVef8-PQk3_6ujsDF6Z16-_s9iGXGvkeyA&usqp=CAU" class="draggable" data-value="1">
        </div>
        <div id="total" class="total">Total: $0</div>
        <button class="reset-btn" id="reset-btn">Reset</button>
        <button class="back-btn"><a href="games.html"> Go Back </a></button>
      </div>
      
      <script src="./assets/js/money.js"></script>
</body>
</html>