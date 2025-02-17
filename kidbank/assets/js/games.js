// Define your games data
const gamesData = [
    { name: "Memory Game", url: "memory_game.html" },
    { name: "financial challenges", url: "puzzle.html" },
    // Add more games as needed
  ];
  
  // Function to create game cards dynamically
  function createGameCards() {
    const gameContainer = document.getElementById("game-container");
  
    gamesData.forEach(game => {
      const card = document.createElement("div");
      card.classList.add("game-card");
      
      const gameLink = document.createElement("a");
      gameLink.href = game.url;
      gameLink.textContent = game.name;
      
      card.appendChild(gameLink);
      gameContainer.appendChild(card);
    });
  }
  // Fetch savings account balance
fetch('get_savings_balance.php')
.then(response => response.json())
.then(data => {
    document.getElementById('savings-balance').innerText = data.balance.toFixed(2);
})
.catch(error => {
    console.error('Error fetching savings account balance:', error);
});

  // Call the function to create game cards when the page loads
  document.addEventListener("DOMContentLoaded", createGameCards);
  