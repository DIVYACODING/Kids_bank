
<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // Include database connection
       /*main*/ require_once "config.php";

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $id = $_POST['id'] ?? ''; // Optional fields, use isset or ?? to handle if not set
    $pan = $_POST['pan'] ?? ''; // Optional fields, use isset or ?? to handle if not set
    $remarks = $_POST['remarks'];
    $amount = $_POST['amount'];
    $user_id = $_SESSION['user_id'];

    // Validate phone number (10 digits)
    if (!preg_match('/^[0-9]{10}$/', $phone)) {
        echo "<p>Invalid phone number. Please enter a 10-digit number.</p>";
        exit;
    }

    // Validate PAN card (format: ABCDE1234F)
    if (!preg_match('/^[A-Z]{5}[0-9]{4}[A-Z]{1}$/', $pan)) {
        echo "<p>Invalid PAN card number. Please enter a valid PAN card.</p>";
        exit;
    }

    // Prepare SQL insert statement
    $stmt = $conn->prepare("INSERT INTO donations (name, phone, id, pan, remarks, amount) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $phone, $id, $pan, $remarks, $amount);

     // Execute the statement
     if ($stmt->execute()) {
        // Close statement
        $stmt->close();
        
        // Close connection
        $conn->close();

        // Redirect to thankyou.html after successful donation
        
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
// Update savings account balance
$update_balance_sql = "UPDATE accounts SET balance = balance - $amount WHERE user_id = $user_id";
if ($conn->query($update_balance_sql) === TRUE) {
    // Donation successful, proceed to store donation details
    $insert_donation_sql = "INSERT INTO donations (user_id, name, phone, id, pan, remarks, amount) VALUES ($user_id, '$name', '$phone', '$id', '$pan', '$remarks', $amount)";
    if ($conn->query($insert_donation_sql) === TRUE) {
        // Donation details stored successfully
        echo "Donation successful!";
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    echo "Error: " . $conn->error;
}
}
   
?>

