<?php


// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// SQL query to insert data into database
$sql = "INSERT INTO contact_messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Message sent successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>
