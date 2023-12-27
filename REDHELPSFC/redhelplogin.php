<?php
include "connection.php";
if (isset($_GET['success']) && $_GET['success'] == 1) {
  echo "<p style=' border: 5px;
  border-radius: 10px;
  background-color:#C1F3A0;
  text-align:center;
  font-size:30px;
  
  padding-top: 5px;
  padding-bottom:0.01%;'>Registration successful. Please login.</p>";
}
?>
<?php

session_start();
if (isset($_SESSION['success_message'])) {
    echo "<p style='border: 5px;
    border-radius: 10px;
    background-color:#C1F3A0;
    text-align:center;
    font-size:30px;
    
    padding-top: 5px;
    padding-bottom:0.01%;'>" . $_SESSION['success_message'] . "</p>";
    unset($_SESSION['success_message']);
}
?>

<?php
include('connection.php');
// Check if the 'error' query parameter is present in the URL
if (isset($_GET['error']) && $_GET['error'] == 1) {
  // If the 'error' parameter is present, display an error message using JavaScript's alert function
  echo '<script>alert("Wrong credentials. Please try again.");</script>';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form </title>
    <link rel="stylesheet" href="stylecss/redhelplogin.css">
    <style>
        /*wlecome to sfc design*/
    .myDiv {
  border: 5px;
  border-radius: 10px;
  /*background-color: lightblue;   */ 
  text-align:center;
  font-size:34px;
  font-weight:bold;
  padding-top: 0px;
  padding-bottom:0%;
}
      </style>
  </head>
  <body> 
  <div class="myDiv">
  SFC RED HELP
</div>
    <table  style="margin:0px 0px 0px 30px ;">
      <tr>
        <th><div class="wrapper">
          <div class="title">Login Form</div>
         <!---form direct page--> 
         <form action="validation.php " method="POST"><!--done-->
            <div class="field">
              <input type="text"  name='username' required>
              <label>UserName</label>
            </div>
			
            <div class="field">
              <input type="text"   name='emailid'  required>
            <label>Email</label>
            </div>
			
            <div class="field">
              <input type="password"  name='password'  required>
              <label>Password</label>
            </div>
            <div class="content">
              
              <div class="pass-link"><a href="forgotpassword.php">Forgot password?</a></div>
            </div>
            <div class="field">
              <input type="submit" value="Login">
            </div>
            <!--- registration php-->
            <div class="signup-link">Not a member? <a href="redhelpreg.php">Signup now</a></div>
          </form>
        </div></th>
        
      </tr>
    
</table>
  </body>
</html>

