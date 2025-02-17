<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Debit Card</title>
   <link rel="stylesheet" href="./assets/css/debitlogin.css">
</head>
<body>
    <div class="container">
        <h1>Virtual Debit Card</h1>
        <div class="card">
            <div class="card-info card-number">1234 5678 9012 3456</div>
            <div class="expiry-cvv">
                <div class="card-info">Exp: 12/24</div>
                <div class="card-info">CVV: 123</div>
            </div>
            <div class="card-info cardholder-name">Cardholder Name</div>
        </div>
        <form id="debit-card-form">
            <label for="input-card-number">Card Number:</label>
            <input type="text" id="input-card-number" name="card-number" placeholder="XXXX XXXX XXXX XXXX" required maxlength="19">
            <label for="input-expiry-date">Expiry Date (MM/YY):</label>
            <input type="text" id="input-expiry-date" name="expiry-date" placeholder="MM/YY" pattern="(0[1-9]|1[0-2])\/\d{2}" required>
            <label for="input-cvv">CVV:</label>
            <input type="text" id="input-cvv" name="cvv" placeholder="123" pattern="\d{3}" required maxlength="3">
            <label for="input-cardholder-name">Cardholder Name:</label>
            <input type="text" id="input-cardholder-name" name="cardholder-name" placeholder="John Doe" required>
            <button type="submit">Submit</button>
        </form>
        <div id="message"></div>
    </div>
    <script src="./assets/js/debitlogin.js"></script>
</body>
</html>
