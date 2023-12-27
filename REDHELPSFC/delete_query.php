<?php
include 'connection.php';
$que_id = $_GET['id'];
$sql= "DELETE FROM contact_query where query_id={$que_id}";
$result=mysqli_query($conn,$sql);
if($result=== TRUE){
    header('location:adminquery.php');
}
else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
mysqli_close($conn);

 ?>