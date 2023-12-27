
<?php
session_start();
//if the details entered successfully redirected to the login page
//establish the connection
include 'connection.php'; //done!

?>
<html>
    <head>
        <title>ACCOUNT</title>
<!--Google Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="stylecss/redhelpreg.css">
    <style>
      
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
    <body>
        
        <div class="myDiv">
    <a href="redhelplogin.php">
        <img src="redhelpimages/home.png" style="width:50px;height:40px;">
    </a>
    
            REGISTRATION
        
      </div>
    <form action="redhelpreg1.php" method="POST">
	   	<label for="name">*Username</label>
        <input type="textbox"  name="username" placeholder="Enter username" required><br/>
		<label for="email">*Email</label>
        <input type="email" name="mailid" placeholder="Enter email" required><br/>			
        <label for="password">Enter Password</label>
        <input type="password" name="password" id="password" placeholder="Enter Password" required>
         <input type="submit" 
          value="SUBMIT">
       
    </form>
   
    </body>
</html>
