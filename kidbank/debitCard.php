<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Debit Card</title>
    <link rel="stylesheet" href="./assets/css/debit.css">
</head>
<body>
    <div class="container">
        <h1>Virtual Debit Card</h1>
        <div class="card">
            <div class="chip"></div> <!-- Chip sign -->
            <div class="card-info card-number" id="card-number"></div>
            <div class="expiry-cvv">
                <div class="card-info" id="expiry-date"></div>
                <div class="card-info" id="cvv"></div>
            </div>
            <div class="card-info cardholder-name" id="cardholder-name"></div>
        </div>
    </div>

    <script src="./assets/js/debitcard.js"></script>
</body>
</html>
