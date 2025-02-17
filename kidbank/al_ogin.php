<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Kids Bank Account - Login</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="./assets/css/alogin.css">
</head>
<body>

<div class="container">
    <h1>Welcome to Kids Bank</h1>
    <div class="form-group">
        <label for="username"><i class="fas fa-user"></i></label>
        <input type="text" id="username" class="username-input" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="password"><i class="fas fa-lock"></i></label>
        <input type="password" id="password" class="password-input" placeholder="Password">
    </div>
    <button class="btn" onclick="login()">Login</button>
    <div id="error-message" class="error-message" style="display: none;"></div>
</div>

<script src="./assets/js/alogin.js"></script>


</body>
</html>

