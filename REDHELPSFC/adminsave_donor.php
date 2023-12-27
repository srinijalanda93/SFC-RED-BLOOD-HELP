
<?php

$mysqli = new mysqli("localhost","root","","sfcredhelp") or die("Connection error");

// Check for errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$name=$_POST['fullname'];
$number=$_POST['phone'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$blood_group=$_POST['bloodgroup'];
$address=$_POST['address'];
$username = $_POST['username'];
$password=$_POST['password'];
$regas=$_POST['regas'];
$dia=$_POST['diabetic'];
$recent=$_POST['recent'];
// Execute the first query
$sql = "INSERT INTO `donor`(`donar_id`,`donar_fullname`, `donar_mail`, `donar_number`, `donar_age`, `donar_gender`, `donar_blood`, `donar_address`, `donar_regas`, `Dia`, `recent`, `PostingDate`, `status`) VALUES (NULL, '$name', '$email','$number', '$age', '$gender', '$blood_group', '$address', '$regas', '$dia', '$recent', current_timestamp(), NULL);";
if (!$mysqli->query($sql)) {
    echo "Error executing the first query: " . $mysqli->error;
    exit();
}

// Execute the second query
$sql1 = "INSERT INTO `register_table` (`NAME`, `EMAIL`, `PASSWORD`) VALUES ('$username', '$email', '$password');";
if (!$mysqli->query($sql1)) {
    echo "Error executing the second query: " . $mysqli->error;
    exit();
}




// Close database connection
$mysqli->close();

  //$sql= "INSERT INTO `donor`(`donar_id`,  `donar_fullname`, `donar_mail`, `donar_number`, `donar_age`, `donar_gender`, `donar_blood`, `donar_address`, `donar_regas`, `Dia`, `recent`, `PostingDate`, `status`) VALUES (NULL, '$username', '$password', '$name', '$email','$number', '$age', '$gender', '$blood_group', '$address', '$regas', '$dia', '$recent', current_timestamp(), NULL);";
 
//$result=mysqli_query($conn,$sql) or die("query unsuccessful.");

header('location:admindonor_list.php');

mysqli_close($conn);
 ?>
