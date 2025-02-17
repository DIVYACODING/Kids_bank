<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are provided
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Include database connection
       /*main*/ require_once "config.php";

        // Sanitize user input to prevent SQL Injection
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        // Query to check if the username and password match
        $query = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $storedPassword = $row['password'];

            // Verify password
            if (password_verify($password, $storedPassword)) {
                // Password is correct, set session variables
                $_SESSION['username'] = $username;
                // Redirect to bank2.php after successful login
                header("Location: bank2.php");
                exit();
            } else {
                // Password is incorrect
                echo "Invalid username or password.";
            }
        } else {
            // Username not found
            echo "Invalid username or password.";
        }

        // Close database connection
        mysqli_close($conn);
    } else {
        echo "Please provide both username and password.";
    }
}
?>
