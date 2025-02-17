
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Children's Bank Donation</title>
    <link rel="stylesheet" href="./assets/css/donat.css">
</head>
<body>
    <div class="donation-container">
        <h1>Children's Bank Donation</h1>
        <p>Contribute to make a difference!</p>
        <form action="donat.php" method="post" id="donationForm">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>

            <label for="id">ID (optional):</label>
            <input type="text" id="id" name="id">

            <label for="pan">PAN Card (optional):</label>
            <input type="text" id="pan" name="pan">

            <label for="remarks">Remarks:</label>
            <textarea id="remarks" name="remarks" rows="4" required></textarea>

            <label for="amount">Select Amount:</label>
            <select id="amount" name="amount">
                <option value="10">₹10</option>
                <option value="20">₹20</option>
                <option value="50">₹50</option>
                <option value="100">₹100</option>
            </select>
            
            <div class="button-container">
                <button type="submit">
                    <a href="thankyou.html" style="text-decoration: none; color: inherit;">Donate</a>
                </button>
            </div>
        </form>
    </div>
    <script src="./assets/js/donation.js"></script>
</body>
</html>
