<?php
session_start();
include('connection.php');

if ($_POST) {
    $username = $_POST['username'];
    $email = $_POST['mailid'];
    $password = $_POST['password'];

    $sql = "UPDATE `register_table` SET `PASSWORD`=? where `NAME`=? and `EMAIL`=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $password, $username, $email);

    if ($stmt->execute()) {
        $_SESSION['success_message'] = "Password updated successfully.";
        header('Location: redhelplogin.php');
        exit();
    } else {
        echo "Error updating password: " . $conn->$error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="stylecss/forgotpassword.css">
    <style>
        /*wlecome to sfc design*/
        .myDiv {
            border: 5px;
            border-radius: 10px;
            /*background-color: lightblue;   */ 
            text-align:center;
            font-size:35px;
            font-weight:bold;
            padding-top: 5px;
            padding-bottom:0.01%;
        }
    </style>
</head>
<body backgroundcolor="pink">
<div class="myDiv">
    <a href="redhelplogin.php">
        <img src="redhelpimages/home.png" style="width:50px;height:40px" alt="Home icon">
    </a>
    SFC RED HELP
      </div>
<form action="forgotpassword.php" method="POST">
    <label for="name">*Username</label>
    <input type="textbox"  name="username" placeholder="Enter username" required><br/>
    <label for="email">*Email</label>
    <input type="email" name="mailid" placeholder="Enter email"required><br/>			
    <label for="password">*Enter Password</label>
    <input type="password" name="password" id="password" placeholder="Your placeholder here">
    <label for="cnfrm-password">*Confirm Password</label>
    <input type="password" name="cpassword" id="cnfrm-password" placeholder="Confirm password here">
    <p id="message"></p> 
    <input type="submit" value="SUBMIT" onclick="return checkPassword()">
</form>

<!--Script-->
<script>
    function checkPassword() {
        var password = document.getElementById('password').value;
        var cpassword = document.getElementById('cnfrm-password').value;
        var message = document.getElementById('message');
        var isValid = true;

        if (password !== cpassword) {
            message.innerHTML = "Passwords do not match";
            message.style.color = "red";
            isValid = false;
        } else {
            message.innerHTML = "";
        }

        return isValid;
    }
</script>

</body>
</html>
