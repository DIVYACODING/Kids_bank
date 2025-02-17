document.addEventListener('DOMContentLoaded', function() {
    const expensesContainer = document.querySelector('.expenses-container');
    const categoriesContainer = document.querySelector('.categories-container');
    const checkBtn = document.getElementById('check-btn');
    const scoreDisplay = document.getElementById('score');
    let score = 0;
    
    const expenses = [
      { name: 'Groceries', category: 'food' },
      { name: 'Movie tickets', category: 'entertainment' },
      { name: 'Textbooks', category: 'education' },
      { name: 'Electricity bill', category: 'utilities' },
      { name: 'Restaurant meal', category: 'food' },
      { name: 'Concert tickets', category: 'entertainment' },
      { name: 'School fees', category: 'education' },
      { name: 'Internet bill', category: 'utilities' },
      // Additional expenses
      { name: 'Clothing', category: 'clothing' },
      { name: 'Gasoline', category: 'transportation' },
      { name: 'Doctor visit', category: 'healthcare' },
      { name: 'Haircut', category: 'personal care' },
      // Add more expenses if needed
    ];
    
    const categories = [
      'Food', 'Entertainment', 'Education', 'Utilities',
      'Clothing', 'Transportation', 'Healthcare', 'Personal Care',
      // Add more categories
    ];
  
    // Randomize expense order
    expenses.sort(() => Math.random() - 0.5);
  
    // Populate expenses
    expenses.forEach(expense => {
      const expenseDiv = document.createElement('div');
      expenseDiv.textContent = expense.name;
      expenseDiv.className = 'expense draggable';
      expenseDiv.dataset.category = expense.category;
      expenseDiv.draggable = true;
      expensesContainer.appendChild(expenseDiv);
    });
  
    // Populate categories in zig-zag layout
    let row = 0;
    for (let i = 0; i < categories.length; i++) {
      const categoryDiv = document.createElement('div');
      categoryDiv.textContent = categories[i];
      categoryDiv.className = 'category droppable';
      categoryDiv.dataset.category = categories[i].toLowerCase();
      categoryDiv.style.marginTop = row % 2 === 0 ? '0' : '20px';
      categoriesContainer.appendChild(categoryDiv);
      row++;
    }
  
    // Initialize drag and drop functionality
    const draggableElements = document.querySelectorAll('.draggable');
    const droppableElements = document.querySelectorAll('.droppable');
  
    draggableElements.forEach(draggable => {
      draggable.addEventListener('dragstart', () => {
        draggable.classList.add('dragging');
      });
  
      draggable.addEventListener('dragend', () => {
        draggable.classList.remove('dragging');
      });
    });
  
    droppableElements.forEach(droppable => {
      droppable.addEventListener('dragover', e => {
        e.preventDefault();
        const draggable = document.querySelector('.dragging');
        droppable.classList.add('dragover');
      });
  
      droppable.addEventListener('dragleave', () => {
        droppable.classList.remove('dragover');
      });
  
      droppable.addEventListener('drop', () => {
        const draggable = document.querySelector('.dragging');
        const category = droppable.dataset.category;
        if (draggable.dataset.category === category) {
          droppable.classList.remove('dragover');
          droppable.classList.add('correct');
          draggable.style.display = 'none';
          increaseScore();
        } else {
          droppable.classList.remove('dragover');
          droppable.classList.add('incorrect');
        }
      });
    });
  
    // Check Answers button functionality
    checkBtn.addEventListener('click', () => {
      const correctCategories = document.querySelectorAll('.correct').length;
      if (correctCategories === categories.length) {
        alert('Congratulations! All expenses are matched correctly.');
      } else {
        alert('Not all expenses are matched correctly. Keep trying!');
      }
    });
  
    // Add score counter
    function increaseScore() {
      score++;
      scoreDisplay.textContent = score;
      scoreDisplay.classList.add('score-animation');
      setTimeout(() => {
        scoreDisplay.classList.remove('score-animation');
      }, 1000);
    }
  
    

  });
  