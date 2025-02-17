<?php
session_start();



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle deposit action
    if (isset($_POST["action"]) && $_POST["action"] == "deposit") {
         // Include database connection
       /*main*/ require_once "config.php";

        $amount = $_POST["amount"];
        $user_id = $_SESSION['user_id'];
        
        // Update savings account balance
        $update_balance_sql = "UPDATE accounts SET balance = balance + $amount WHERE user_id = $user_id";
        if ($conn->query($update_balance_sql) === TRUE) {
            // Deposit successful
            echo "Deposit successful!";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Handle withdraw action
    if (isset($_POST["action"]) && $_POST["action"] == "withdraw") {
        $amount = $_POST["amount"];
        $user_id = $_SESSION['user_id'];

        // Check if sufficient balance is available
        $check_balance_sql = "SELECT balance FROM accounts WHERE user_id = $user_id";
        $result = $conn->query($check_balance_sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $current_balance = $row["balance"];
            if ($current_balance >= $amount) {
                // Sufficient balance available, proceed with withdrawal
                $update_balance_sql = "UPDATE accounts SET balance = balance - $amount WHERE user_id = $user_id";
                if ($conn->query($update_balance_sql) === TRUE) {
                    // Withdrawal successful
                    echo "Withdrawal successful!";
                } else {
                    echo "Error: " . $conn->error;
                }
            } else {
                // Insufficient balance
                echo "Insufficient balance!";
            }
        } else {
            echo "Error: User account not found!";
        }
    }

    // Handle donation action
    if (isset($_POST["action"]) && $_POST["action"] == "donate") {
        $amount = $_POST["amount"];
        $user_id = $_SESSION['user_id'];

        // Update savings account balance
        $update_balance_sql = "UPDATE accounts SET balance = balance - $amount WHERE user_id = $user_id";
        if ($conn->query($update_balance_sql) === TRUE) {
            // Donation successful
            echo "Donation successful!";
        } else {
            echo "Error: " . $conn->error;
        }
    }

    // Handle goal setting action
    if (isset($_POST["action"]) && $_POST["action"] == "set_goal") {
        $goal_amount = $_POST["goal_amount"];
        $user_id = $_SESSION['user_id'];

        // Insert the goal into the database
        $insert_goal_sql = "INSERT INTO goals (user_id, goal_amount) VALUES ($user_id, $goal_amount)";
        if ($conn->query($insert_goal_sql) === TRUE) {
            // Goal setting successful
            echo "Goal set successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Close connection
$conn->close();
?>

