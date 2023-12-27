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

$active ='location';
include("redhomeheader.php");//header
?><html><head>
    <title>
        location
</title>
<link rel="stylesheet" href="stylecss/search.css"/>
<style>

</style>
</head>
<body>
<h1 class="donar">
	<big>SEARCH</big>
	&nbsp DONOR BY<big> LOCATION</big>
</h1>
	<div class= "leftbox">
 <form method="POST" name="myForm"  onsubmit="return validateForm()"  required><br>
<input type="TEXT" placeholder="Enter Location" name="search" size='50' "onclick="myFunction()">
</input>
 </div>

             <div class = "middlebox">
                <p id="demo"></p>
            </div> 
     
        <script>
function validateForm() {
  var x = document.forms["myForm"]["search"].value;
  if (x == "" || x == null) {
    alert("Enter the location");
    return false;
  }
}
function myFunction() {
  document.getElementById("demo").innerHTML = "**PLEASE ENTER THE LOCATION**";
}
</script>

<br><br><br><br>
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
	$search=$_POST['search'];
	//$sql="select * from donor where donar_address like '%$search%'" ;
	$sql="SELECT donor.donar_fullname,donor.donar_age,donor.donar_mail,donor.donar_address,donor.donar_number,donor.donar_gender, blood.blood_group FROM donor JOIN blood ON donor.donar_blood = blood.blood_id WHERE donor.donar_address like '%$search%';"	;
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		if(mysqli_num_rows($result)>0)
		{
			echo'<thead>
			<tr>
            <th>S.No</th>         
<th> NAME</th>
<th> AGE</th>
<th> GENDER</th>
<th> BLOOD GROUP</th>
<th> ADDRESS</th>
<th> EMAIL</th>
<th> PHONE NUMBER</th></tr></thead>';
$count=1;
while($row=mysqli_fetch_assoc($result)){
echo '<tbody>

<tr>
<td> '. $count++.' </td>
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