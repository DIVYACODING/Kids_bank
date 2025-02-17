<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['signup_submit'])) {
         // Include database connection
       /*main*/ require_once "config.php";

        // Sign-up process
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $kid_name = $_POST['kid_name'];

        if (empty($name) || empty($email) || empty($password) || empty($confirm_password) || empty($kid_name)) {
            echo "All fields are required";
            exit();
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
            exit();
        }

        if (strlen($password) < 6) {
            echo "Password must be at least 6 characters long";
            exit();
        }

        if ($password !== $confirm_password) {
            echo "Passwords do not match";
            exit();
        }

        $sql = "SELECT * FROM kids WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Kid with this email already exists";
            exit();
        }

        $sql = "SELECT * FROM parents WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Parent with this email already exists";
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert kid data into database
        $stmt =$conn->prepare("INSERT INTO kids (name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $kid_name, $email, $hashed_password);
        $stmt->execute();

        // Get kid id
        $kid_id = $stmt->insert_id;

        // Insert parent data into database
        $stmt = $conn->prepare("INSERT INTO parents (name, email, password, kid_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssis", $name, $email, $hashed_password, $kid_id);
        $stmt->execute();

        header("Location: success.php");
        exit();
    } elseif (isset($_POST['login_submit'])) {
        // Login process
        $login_email = $_POST['login_email'];
        $login_password = $_POST['login_password'];
        $kid_name = $_POST['kid_name'];

        if (empty($login_email) || empty($login_password) || empty($kid_name)) {
            echo "All fields are required";
            exit();
        }

        $sql = "SELECT * FROM kids WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $login_email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            echo "Kid with this email not found";
            exit();
        }

        $kid = $result->fetch_assoc();

        if (!password_verify($login_password, $kid['password'])) {
            echo "Incorrect password";
            exit();
        }

        $sql = "SELECT * FROM parents WHERE kid_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $kid['id']);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 0) {
            echo "Parent not found";
            exit();
        }

        $parent = $result->fetch_assoc();

        // Set session variables
        $_SESSION['parent_id'] = $parent['id'];
        $_SESSION['parent_name'] = $parent['name'];
        $_SESSION['kid_name'] = $kid['name'];

        header("Location: dashboard.php");
        exit();
    }
}


?>