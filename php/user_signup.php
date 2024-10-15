<?php
include "connection_db.php";

// Retrieve form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $birthDate = $_POST['birthDate'];
    $nationalId = $_POST['nationalId'];
    $city = $_POST['city'];
    $province = $_POST['province'];
    $street = $_POST['street'];
    $qualification = $_POST['qualification'];
    $gender = $_POST['gender'];

    // Validate the email
    $emailError = validateEmail($email);

    // Validate the password
    $passwordError = validatePassword($password);

    // Validate the confirm password
    $confirmPasswordError = validateConfirmPassword($password, $confirmPassword);

    if (empty($emailError) && empty($passwordError) && empty($confirmPasswordError)) {
        $targetDir = "files/";
        $targetFile =  $targetDir . basename($_FILES["pdfFile"]["name"]); // Get the target file path

        $uploadOk = 1;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION)); // Get the file extension

        // Check if the file is a PDF
        if ($fileType != "pdf") {
            echo "<script> alert('Only PDF files are allowed.');</script>";
            $uploadOk = 0;
        }

        // Check if the file was successfully uploaded
        if ($uploadOk == 0) {
            echo "<script> alert('Sorry, your file was not uploaded.');</script>";
        } else {
            if (move_uploaded_file($_FILES["pdfFile"]["tmp_name"], "../" . $targetFile)) {
                $issueDisabilityCertificate = $targetFile;
                // Insert data into the database
                $sql = "INSERT INTO users (first_name, last_name, phone_number, email, password, birth_date, national_id, address_city, address_province, street, qualification, gender, issue_disability_certificate)
        VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$password', '$birthDate', '$nationalId', '$city', '$province', '$street', '$qualification', '$gender', '$issueDisabilityCertificate')";
                if ($conn->query($sql) === TRUE) {
                    echo "<script> alert('Register successfully');
                    window.location.href = 'dashboard/candidate/candidate_profile.php';</script>";
                } else {
                    echo "<script> alert('Error: " . $sql . "<br>" . $conn->error . "');</script>";
                }
                $conn->close();
            } else {
                echo "<script> alert('Sorry, there was an error uploading your file.');</script>";
            }
        }
    } else {
        // Display error messages
        if (!empty($emailError)) {
            echo "<script> alert('Email Error: " . $emailError . "');</script>";
        }
        if (!empty($passwordError)) {
            echo "<script> alert('Password Error: " . $passwordError . "');</script>";
        }
        if (!empty($confirmPasswordError)) {
            echo "<script> alert('Confirm Password Error: " . $confirmPasswordError . "');</script>";
        }
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

function validateConfirmPassword($password, $confirmPassword)
{
    // Check if the confirm password matches the password
    if ($password !== $confirmPassword) {
        return "Confirm password does not match.";
    }

    return ""; // Empty string indicates no error
}
