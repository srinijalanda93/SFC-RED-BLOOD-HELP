<?php
include 'connection.php';
  $donor_id = $_GET['id'];
$sql= "DELETE FROM donor where donar_id={$donor_id}";
$result=mysqli_query($conn,$sql);

header("Location: admindonor_list.php");

mysqli_close($conn);

 ?>