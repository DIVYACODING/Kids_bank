<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Include database connection
       /*main*/ require_once "config.php";

    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate username and password 
    if (strlen($username) < 4 || strlen($password) < 6) {
        echo "Username must be at least 4 characters long and password must be at least 6 characters long.";
        exit();
    }

    // Hash the password before saving it to the database
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert user data into the database
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$username, $hashedPassword])) {
        // Registration successful, redirect to login page
        header("Location: alogin.php");
        exit();
    } else {
        // Registration failed
        echo "Registration failed. Please try again.";
    }
}
?>
