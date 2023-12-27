<?php
include ("connection.php");
?>
<?php
include("connection.php");
session_start();
//used to destroy the session
if(!isset($_SESSION['username']))
{
    header('location:redhelphome.php');
}

include("redhomeheader.php");//change
?>
<!DOCTYPE html>
<html>
<head>
    <title>QUERY</title>
    <!-- Latest compiled and minified CSS -->
   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--->
   <style>
		.form-group {
			margin-bottom: 20px;
		}
		
		label {
            margin-left:70px;
			display: block;
			margin-bottom:0px;
		}
		
		input[type="text"],
		input[type="email"],
		textarea {
            margin-left:70px;
			width: 70%;
			padding: 5px;
			font-size: 26px;
            font-family:candara;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		
		button {
            margin-left:70px;
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 20px;
		}
		
		button:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
<div class="container">
    <h2 style=" margin-left:70px;">CONTACT US</h2>
	<h3>
    <form action="redhelpqurey.php" method="POST">
        <div class="form-group">
            <label>Name:</label>
            <input style="font-size:20px;"type="text" name="name" class="form-control" required>
        </div>
		<div class="form-group">
            <label>Phone:</label>
            <input style="font-size:20px;" type="text" name="phone" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <input  style="font-size:20px;"type="email" name="mail" class="form-control" required>
        </div>
		
        <div class="form-group">
            <label>Message:</label>
            <textarea class="form-control" name="message" required></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </form>
	</h3>
</div>
<?php
include("connection.php");
        if($_POST)
      { 
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $mail=$_POST['mail'];
        $message=$_POST['message'];    
    $status=1;
    
        //$q1 = "select * from donor where donar_fullname='$name' &&  donar_mail='$email' && donar_number='$number' && donar_username='$username';";
        $q1="INSERT INTO `contact_query` (`query_id`, `query_name`, `query_mail`, `query_number`, `query_message`, `query_date`, `query_status`) VALUES (NULL, '$name', '$mail', '$phone', '$message', current_timestamp(),NULL);";
        
          if (($conn->query($q1) === TRUE))
          {
           echo "<div style='background-color:lightgreen;font-size:29px;font-family:candara;margin-left:0px;'>"."successfully recieved the information". "</div>";
         } 
        } 
?>
</body>
</html>