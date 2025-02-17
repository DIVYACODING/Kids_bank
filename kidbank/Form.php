<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kids Bank - Saving Account Creation</title>
    <link rel="stylesheet" href="./assets/css/form.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Kids Bank!</h1>
        <h2>Let's Create Your Saving Account</h2>
        <div class="illustration">
            <img src="https://static-00.iconduck.com/assets.00/piggy-bank-illustration-2048x1515-5hfdjwby.png" alt="Piggy Bank Illustration">
        </div>
        <form id="registrationForm" method="POST"  action="form1.php">
            <div class="form-group">
                <label for="fullName">Your Full Name</label>
                <input type="text" id="fullName" name="fullName" required>
            </div>
            <div class="form-group">
                <label for="dob">Your Date of Birth</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-group">
                <label for="parentName">Parent/Guardian Full Name</label>
                <input type="text" id="parentName" name="parentName" required>
            </div>
            <div class="form-group">
                <label for="email">Parent/Guardian Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Parent/Guardian Phone Number</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="address">Your Home Address</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="username">Choose a Username</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Create a Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" id="confirmPassword" name="confirmPassword" required>
            </div>
            <div class="form-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I agree to the <a href="#" target="_blank">terms and conditions</a>.</label>
            </div>
            <div class="form-group">
                <button type="submit">Create Account</button>
            </div>
        </form>
        <div class="login-link">
            Already have an account? <a href="al_ogin.php">Login here</a>.
        </div>
    </div>

  
    <script src="./assets/js/form.js"></script>
</body>
</html>
