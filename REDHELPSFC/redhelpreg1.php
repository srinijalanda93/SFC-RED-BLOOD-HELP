<?php
session_start();
// Establish the connection
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the user's registration information from the form
    $name = $_POST['username'];
    $email = $_POST['mailid'];
    $password = $_POST['password'];
    
    // Check if the user's email is already registered
    $sql = "SELECT * FROM `register_table` WHERE `EMAIL`='$email' and `NAME`='$name'and `PASSWORD`='$password'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // Email already registered, display an error message and redirect to login page
        echo '<script>alert("Account already Existed. Please try login.")</script>';
        header("refresh:0;url=redhelplogin.php");
        exit;
    }
    
    // Register the user
    $sql = "INSERT INTO `register_table` (`NAME`, `EMAIL`, `PASSWORD`) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        // Registration successful, redirect to the login page with a success message
        header("Location:redhelplogin.php?success=1");
        exit;
    } else {
        echo '<script>alert("Account already Existed. Please try login.")</script>';
        header("refresh:0;url=redhelplogin.php");
        // An error occurred during registration, display an error message
       // header("Location:redhelplogin.php?error=registration_error");
        exit;
    }
}
?>