document.addEventListener('DOMContentLoaded', function() {
    const piggyBank = document.getElementById('piggy-bank');
    const totalDisplay = document.getElementById('total');
    const draggableCoins = document.querySelectorAll('.draggable');
    const resetBtn = document.getElementById('reset-btn');
  
    let totalAmount = 0;
  
    draggableCoins.forEach(coin => {
      coin.addEventListener('click', () => {
        const value = parseInt(coin.dataset.value);
        totalAmount += value;
        totalDisplay.textContent = `Total: $${totalAmount}`;
        piggyBank.classList.add('animate');
        setTimeout(() => {
          piggyBank.classList.remove('animate');
        }, 800);
      });
    });
  
    resetBtn.addEventListener('click', () => {
      totalAmount = 0;
      totalDisplay.textContent = `Total: $${totalAmount}`;
      piggyBank.classList.add('bounce');
      setTimeout(() => {
        piggyBank.classList.remove('bounce');
      }, 800);
    });
  
    piggyBank.addEventListener('animationend', () => {
      piggyBank.classList.remove('bounce');
    });
  });
  