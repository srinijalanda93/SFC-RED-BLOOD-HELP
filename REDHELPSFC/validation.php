<?php
session_start();
//if the details entered successfully redirected to the home page
//establish the connection

include 'connection.php'; //done!
try{
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the user's registration information from the form
    $name = $_POST['username'];
    $email = $_POST['emailid'];
    $password = $_POST['password'];
       $sql="SELECT * FROM register_table WHERE `NAME`='$name' && `EMAIL`='$email' && `PASSWORD`='$password' ;"  ;
       $result1 = $conn->query($sql);
        $num1 = mysqli_num_rows($result1);
        if($num1==1){
            //matching
            //if login is successfully redirect to home page or else signup page
            //session variable -i want to use that name
            $_SESSION['username'] = $name;// i can also use full name ..
            header('location:redhelphome.php');
        }else{
            // If the credentials are incorrect, redirect the user to the login page with an error message
  header("Location: redhelplogin.php?error=1");
  
          
            
        }
    
            
        }
        
    }
    catch(Exception $e)
    {
        echo $e->getMessage();
    }

    ?>