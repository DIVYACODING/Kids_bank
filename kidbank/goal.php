<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goal Setting and Banking</title>
    <link rel="stylesheet" href="./assets/css/goals.css">
</head>
<body>
    <div class="wrapper">
        <div class="container">
            <h1>Goal Setting and Banking</h1>
            <h2>Dashboard</h2>
            <form action="goals.php" method="post">
      <div id="account-info">
        <p><strong>Account Balance:</strong> ₹<span id="account-balance">0.00</span></p>
      </div>
            <div class="goal-box">
                <div id="goalForm">
                    <label for="goalAmount">Enter your savings goal:</label>
                    <input type="number" id="goalAmount" min="1" step="0.01" required><br><br>
                    <label for="goal-date">Target Date:</label>
                    <input type="date" id="goal-date"><br><br>
                     <button onclick="setGoal()">Set Goal</button>
                    <button onclick="hideGoalForm()">Cancel</button>
                </div>
                <div id="goalProgress" style="display: none;">
                    <div class="progress-container">
                        <p>Your savings goal: ₹<span id="displayGoalAmount"></span></p>
                        <p>Your current savings: ₹<span id="currentAmount">0.00</span></p>
                        <div class="progress-bar-container">
                            <div id="progressBar" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="buttons-container">
                        <button onclick="deposit()">Deposit</button>
                        <button onclick="withdraw()">Withdraw</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./assets/js/goals.js"></script>
</form>
</body>
</html>
