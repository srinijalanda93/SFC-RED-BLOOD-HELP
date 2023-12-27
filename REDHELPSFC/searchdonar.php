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
$active ='donar';
include("redhomeheader.php");//header
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="stylecss/searchdonar.css"/>
    <style>
 .container{
    max-width:700px;
    margin:50px 0px 0px 350px;
    width:100%;
}
table{
    border:1px soild ;
    border-collapse: collapse;
    width:100%;
}
table th{
    background-color:red;
    color:white;
    padding:10px;
}
table td  {
    color:black;
    padding:15px;
    font-size:20px;
    text-align:center;
}
table tr:nth-child(even){
    background-color: #e5bfc6;
}
table tr:nth-child(odd){
    background-color:#f6cab7;
} 

  
    </style>
</head>
<body>
 <h1 class="donar"><big>SEARCH</big>&nbsp DONAR</h1>
 <!---line -1-->
 <section class="features">
    <div class="feature-container">
     <div class="feature-box">
     <img class="f-img"  src="redhelpimages/A+.png"/>
     <div class="f-text">
     <a href="searchdonar.php?id=3" class="main-btn">Check</a>
    </div>
        </div>
        <div class="feature-container">

            <div class="feature-box">
                    <img class="f-img"  src="redhelpimages/A-.png"/>
                
                 <div class="f-text">
                    <a href="searchdonar.php?id=6" class="main-btn">Check</a>
                </div>
            </div>
            <div class="feature-container">

                <div class="feature-box">
                        <img class="f-img"  src="redhelpimages/B+.png"/>
                    
                    <div class="f-text">
                    <a href="searchdonar.php?id=1" class="main-btn">Check</a>
                    </div>
                </div>
                <div class="feature-container">

                    <div class="feature-box">
                            <img class="f-img"  src="redhelpimages/B-.png"/>
                        
                        <div class="f-text">
                        <a href="searchdonar.php?id=2" class="main-btn">Check</a>
                        </div>
                    </div> 
                    <div class="feature-box">
                        <img class="f-img"  src="redhelpimages/AB+.png"/>
                    
                    <div class="f-text">
                    <a href="searchdonar.php?id=7" class="main-btn">Check</a>
                    </div>
                </div> 
                <div class="feature-box">
                    <img class="f-img"  src="redhelpimages/AB-.png"/>
                
                <div class="f-text">
                <a href="searchdonar.php?id=8" class="main-btn">Check</a>
                </div>
            </div> 
</div>        
</section>
<!---section-2-->
<section class="features">
    <div class="feature-container">
        <div class="feature-box">
                <img class="f-img"  src="redhelpimages/O+.png"/>
            <div class="f-text">
                <a href="searchdonar.php?id=4"  class="main-btn">Check</a>
            </div>
        </div>

        <div class="feature-container">

            <div class="feature-box">
                    <img class="f-img"  src="redhelpimages/O-.png"/>
                
                <div class="f-text">
                    <a href="searchdonar.php?id=5" class="main-btn">Check</a>
                </div>
            </div>
</div>      
</section>

	<div class="container">
<table>	
    <?php
    if (isset($_GET['id'])) {
        $n = $_GET['id'];
        include ("connection.php");
        
 $sql="SELECT donor.donar_fullname,donor.donar_age,donor.donar_mail,donor.donar_address,donor.donar_number,donor.donar_gender, blood.blood_group FROM donor JOIN blood ON donor.donar_blood = blood.blood_id WHERE donor.donar_blood=$n;"	;
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
'<br><br>';
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