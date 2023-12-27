
<?php
session_start();
//if the details entered successfully redirected to the login page
//header('location:redhelphome.php');
include('connection.php');
if ($_SERVER["REQUEST_METHOD"] == "POST")
      { 
        $name=$_POST['fullname'];
$number=$_POST['phone'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['bloodgroup'];
$address=$_POST['address'];
//$username = $_POST['username'];
//$password=$_POST['password'];
$regas=$_POST['regas'];
$dia=$_POST['diabetic'];
$recent=$_POST['recent'];
    $status=1;
    
        $q1 = "select * from donor where donar_fullname='$name' &&  donar_mail='$email' && donar_number='$number' ;";
        $result1 = $conn->query($q1);
        $num1 = mysqli_num_rows($result1);
        /*if($num1==1 ){
          echo "duplicate data";//div tag
        }else{
          $sql= "INSERT INTO `donor`(`donar_id`, `donar_fullname`, `donar_mail`, `donar_number`, `donar_age`, `donar_gender`, `donar_blood`, `donar_address`, `donar_regas`, `Dia`, `recent`, `PostingDate`, `status`) VALUES (NULL, '$name', '$email','$number', '$age', '$gender', '$blood_group', '$address', '$regas', '$dia', '$recent', current_timestamp(), NULL);";
          if (($conn->query($sql) === TRUE))
          {
           echo "<div>"."successfully Registered". "</div>";
           header("Location:redhelphome.php?success=1");
           exit();
         } 
        }*/
        if ($num1 == 1) {
          echo "<script type='text/javascript'>alert('Details already exist!'); window.location.href='http://localhost/REDHELPSFC/regdonor.php';</script>";
      } 
      else {
          $sql = "INSERT INTO `donor`(`donar_id`, `donar_fullname`, `donar_mail`, `donar_number`, `donar_age`, `donar_gender`, `donar_blood`, `donar_address`, `donar_regas`, `Dia`, `recent`, `PostingDate`, `status`) VALUES (NULL, '$name', '$email','$number', '$age', '$gender', '$blood_group', '$address', '$regas', '$dia', '$recent', current_timestamp(), NULL);";
          $result = mysqli_query($conn, $sql);
          if ($result) {
              header("Location:redhelphome.php?success=1");
              exit;
          } else {
              // An error occurred during registration, display an error message
          }
      }
      

       /*$sql= "INSERT INTO `donor`(`donar_id`, `donar_fullname`, `donar_mail`, `donar_number`, `donar_age`, `donar_gender`, `donar_blood`, `donar_address`, `donar_regas`, `Dia`, `recent`, `PostingDate`, `status`) VALUES (NULL, '$name', '$email','$number', '$age', '$gender', '$blood_group', '$address', '$regas', '$dia', '$recent', current_timestamp(), NULL);";
        $result = mysqli_query($conn, $sql);
    if ($result) {
       
        header("Location:redhelphome.php?success=1");//
        exit;
    } else {
        // An error occurred during registration, display an error message
    }*/
    
            
        }
        
   
    
?>