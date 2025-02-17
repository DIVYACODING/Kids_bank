<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./assets/css/bank2.css">
<title>Kids Bank Account</title>

</head>
<body class="page">

<div class="container">
    <img src="https://i.pinimg.com/736x/fd/b4/ee/fdb4ee176d07383c45c0bd4855766ed5.jpg" alt="Piggy Bank">
    <h1>Welcome to Kids Bank</h1>
    <div class="form-group">
    <form id="contactForm" action="bank2.php" method="post">
        <label for="amount">Enter Amount:</label>
        <input type="number" id="amount" class="amount-input" placeholder="Enter amount">
    </div>
    <div class="btn-group">
        <button class="btn" onclick="confirmAction(deposit)">Deposit</button>
        <button class="btn" onclick="confirmAction(withdraw)">Withdraw</button>
    </div>
    <div class="balance">Balance: $<span id="balance-amount">0</span></div>
    <div class="additional-features">
        <h2>Additional Features:</h2>
        <ul class="features-list">
            <li class="features-list-item">Virtual piggy bank to save money</li>
            <li class="features-list-item">Financial education games and quizzes</li>
            <li class="features-list-item">Customizable savings goals</li>
            <li class="features-list-item">Interactive tutorials on money management</li>
            <li class="features-list-item">Monthly rewards for saving</li>
        </ul>
    </div>
</div>

<div class="container">
    <div class="donation-container">
        <h2>Help the Poor</h2>
        <p>Help make a difference in the lives of those less fortunate. Your small contribution can bring a smile to someone in need.</p>
        <label for="donation-amount">Enter Amount to Donate:</label>
        <input type="number" id="donation-amount" class="donation-input" placeholder="Enter amount">
        <button class="donation-button" onclick="confirmAction(donate)">Donate Now</button>
    </div>
</div>

<div class="container">
    <div class="monthly-donation">
        <h2>Monthly Fixed Donation</h2>
        <p>Make a monthly commitment to help the less fortunate. Select an amount to be automatically donated every month.</p>
        <label for="monthly-amount">Select Monthly Amount:</label>
        <select id="monthly-amount" class="monthly-input">
            <option value="10">$10</option>
            <option value="20">$20</option>
            <option value="50">$50</option>
            <option value="100">$100</option>
        </select>
        <button class="donation-button" onclick="confirmAction(donateMonthly)">Donate Monthly</button>
        <button class="cancel-button" onclick="confirmAction(cancelMonthlySubscription)">Cancel</button>
    </div>
</div>
<script src="bank2.js"></script>

</body>
</html>
<!--
    /*CREATE TABLE balances (
    user_id INT PRIMARY KEY,
    balance DECIMAL(10, 2) NOT NULL DEFAULT 0
);

*/
-->