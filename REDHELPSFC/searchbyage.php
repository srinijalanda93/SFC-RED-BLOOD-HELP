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
$active ='age';
include("redhomeheader.php");//header
?>
<html><head>
    <title>
            AGE
</title>
<link rel="stylesheet" href="stylecss/search.css"/>
<style>
select {
  width: 200px; /* set the width to 200 pixels */
  height:50px;
}
</style>
</head>
<body>
<h1 class="donar">
	<big>SEARCH</big>
	&nbsp DONOR BY<big> AGE</big>
</h1>
	
 <form method="POST"name="myForm" required  onsubmit="return validateForm();"><br>
 
 <label  style="margin-left:600px;font-size:40px;" for="range">Select a range</label>
  <select id="range" name="range">
    <option style="margin-left:0px;font-size:25px;" >select the age</option>
    <option style="margin-left:0px;font-size:25px;" value="18-25">18-25</option>
    <option style="margin-left:0px;font-size:25px;" value="26-34">26-34</option>
    <option style="margin-left:0px;font-size:25px;" value="34-41">34-41</option>
    <option style="margin-left:0px;font-size:25px;" value="42-48">42-48</option>
  </select>
<!--script--->

<script>
function validateForm() {
  var range = document.forms["myForm"]["range"].value;
  if (range == "select the age") {
    alert("Please select AGE range");
    return false;
  }
}
</script>

<br><br><br>
<button class="main-btn" name="submit" value="Submit">
		SEARCH
	</button>
	</form>
	<br>
	<div class="container">
<table>	
<?php
if(isset($_POST['submit']))
{
	
  // Get selected range from form
$range = $_POST['range'];

// Parse range into min and max values
list($min, $max) = explode("-", $range);

// Fetch details from database
//$sql="SELECT * FROM donor JOIN blood ON donor.donar_blood = blood.blood_id WHERE blood.blood_id  AND blood.blood_group where donor.donar_age BETWEEN $min AND $max;";
$sql = "SELECT donor.donar_fullname,donor.donar_age,donor.donar_mail,donor.donar_address,donor.donar_number,donor.donar_gender, blood.blood_group FROM donor JOIN blood ON donor.donar_blood = blood.blood_id WHERE donor.donar_age between $min AND $max;";
$result = mysqli_query($conn, $sql);

	if($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			echo'<thead>
			<tr>
<th> NAME</th>
<th> AGE</th>
<th> GENDER</th>
<th> BLOOD GROUP</th>
<th> ADDRESS</th>
<th> EMAIL</th>
<th> PHONE NUMBER</th></tr></thead>';
while($row=mysqli_fetch_assoc($result))
{
echo '<tbody>
<tr>
<td> '.$row['donar_fullname'].' </td>
<td> '.$row['donar_age'].' </td>
<td> '.$row['donar_gender'].' </td>
<td> '.$row['blood_group'].' </td>
<td> '.$row['donar_address'].' </td>
<td> '.$row['donar_mail'].' </td>
<td> '.$row['donar_number'].' </td>
</tr>
</tbody>';
		}}else{
			echo'<h2 class=:text-danger>DATA NOT FOUND</h2>';
		}
	}	 
}
?>


</table>
</div>
	</div>
</body>
    </html>
   