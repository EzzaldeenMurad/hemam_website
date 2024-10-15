<?php
include "connection_db.php";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $companyName = $_POST["companyName"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["ConfirmPassword"];
    $countryCode = $_POST["countryCode"];
    $phoneNumber = $_POST["countryCode"] . $_POST["phoneNumber"];
    $industry = $_POST["industry"];
    $city = $_POST["city"];
    $province = $_POST["province"];

    $targetDir = "files/";
    $targetFile = $targetDir . basename($_FILES["pdfFile"]["name"]); // Get the target file path
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension

    // Check if the file is a PDF
    if ($fileType != "pdf") {
        $uploadOk = 0;
    }

    $emailError = validateEmail($email);
    $passwordError = validatePassword($password);

    if (empty($emailError) && empty($passwordError)) {
        if ($uploadOk == 0) {
            echo "<script>alert('Only PDF files are allowed.'); location.href='../index.html';</script>";
        } else {
            if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], "../" .    $targetFile)) {
                $stmt = $conn->prepare("INSERT INTO companies (company_name, email, password, phone_number, industry, city, province, issurance_mowama_certificate) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssssss", $companyName, $email, $password, $phoneNumber, $industry, $city, $province, $targetFile);
                if ($stmt->execute()) {
                    echo "<script>alert('Register successfully');
                    location.href='../index.html';
                    </script>";
                } else {
                    echo "<script>alert('Error: " . $stmt->error . "');
                    location.href='../index.html';
                    </script>";
                }
                $stmt->close();
                $conn->close();
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');
                location.href='../index.html';
                </script>";
            }
        }
    } else {
        // Email or password validation failed, display error messages
        echo "<script>alert('Email Error: $emailError');
        location.href='../index.html';
        </script>";
        echo "<script>alert('Password Error: $passwordError');
        location.href='../index.html';
        </script>";
    }
}

function validateEmail($email)
{
    // Check if the email is empty
    if (empty($email)) {
        return "Email is required.";
    }

    // Check if the email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email format.";
    }

    return ""; // Empty string indicates no error
}

function validatePassword($password)
{
    // Check if the password is empty
    if (empty($password)) {
        return "Password is required.";
    }

    // Check if the password meets the minimum length requirement
    $minLength = 8;
    if (strlen($password) < $minLength) {
        return "Password must be at least $minLength characters long.";
    }

    return ""; // Empty string indicates no error
}
