<?php
include "connection_db.php";

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare and execute the SQL query
    if (isset($_POST['user'])) {
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    } else {
        $stmt = $conn->prepare("SELECT * FROM companies WHERE email = ? AND password = ?");
    }
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists in the database
    if ($result->num_rows == 1) {
        // User found, perform successful login actions
        session_start();
        $_SESSION['email'] = $email;
        echo "<script> alert('Login successful! Welcome, " . $email . "');
        location.href='';
        </script>";
    } else {
        // User not found, display error message
        echo "<script> alert('Incorrect email or password.');
        location.href='../index.php';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
