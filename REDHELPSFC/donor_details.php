<?php
include("connection.php");
session_start();
//used to destroy the session
if(!isset($_SESSION['username']))
{
    header('location:redhelphome.php');
}
include("redhomeheader.php");

?>
<html><head>
<style>
     .container {
  max-width: 800px;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.2);
}

header {
  text-align: center;
  font-size: 32px;
  margin-bottom: 30px;
}

.details {
  margin-bottom: 40px;
}

.details .title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  display: block;
}

.fields {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}

.input-field {
  display: block;
  margin-bottom: 20px;
}

.input-field label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.input-field input,
.input-field select {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.input-field select option {
  font-size: 20px;
  font-family:candara;
}

.submit {
  display: block;
  margin-top: 30px;
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  font-size: 20px;
  font-family:candara;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s ease-in-out;
}

.submit:hover {
  background-color: #3e8e41;
}

.submit .btnText {
  margin-right: 10px;
}

@media (max-width: 768px) {
  .fields {
    grid-template-columns: 1fr;
  }
}
 
a:hover, a:hover i {
    background:linear-gradient(-135deg, #e9c4d0, #f25771);
    color: black;
    box-shadow: 5px 10px 30px rgba(252, 59, 0, 0.397);
}



</style>
</head><body>
<?php
include("connection.php");
// Retrieve the name from the query parameter
$name = $_GET['name'];

// Fetch the donor details from the database
// Make sure to sanitize the input to prevent SQL injection attacks
$sql = "SELECT donor.donar_fullname, donor.donar_mail, donor.donar_number, donor.donar_age, donor.donar_gender, blood.blood_group, donor.donar_address, donor.donar_regas, donor.Dia, donor.recent 
FROM register_table r 
JOIN donor ON r.EMAIL = donor.donar_mail 
JOIN blood ON donor.donar_blood = blood.blood_id 
WHERE r.NAME = '$name'";
$result = mysqli_query($conn, $sql);

// Display the donor details in a form
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    ?>
    
<div class="container">
    
        <header>Personal Details</header>

        <form action="#" class="form" method="POST">
            <div class="form first">
                <div class="details personal">
                   

                    <div class="fields">
                        <div class="input-field">
                            <label for="fullname">Full Name</label>
                            <input type="text" value="<?php echo $row['donar_fullname']; ?>" readonly>
                        </div>                    

                        <div class="input-field">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" value="<?php echo $row['donar_mail']; ?>" readonly>
                           
                        </div>
						
						<div class="input-field">
                            <label for="phone"> Mobile Number</label>
                            <input type="tel" name="phone" id="phone" value="<?php echo $row['donar_number']; ?>" readonly>
                          
                        </div>
						
						<div class="input-field">
                            <label for="age"> Age</label>
                            <input type="text"  name="age" id="age" value="<?php echo $row['donar_age']; ?>" readonly>
                        
                        </div>
						
						<div class="input-field">
                            <label for="address"> Address</label>
                            <input type="text" value="<?php echo $row['donar_address']; ?>" readonly>
                        </div>                      

                        <div class="input-field">
                            <label for="gender">Gender</label>
                            <input type="text" value="<?php echo $row['donar_gender']; ?>" readonly>

                        <!--    <select  name="gender" id="gender"required>
                                <option disabled selected>Select gender</option>
                                
            <option value="female" checked>Female</option>
            <option value="male">Male</option>
          </select>--->
                            
                        </div>
						
						<div class="input-field">
            <label for="bloodgroup" required>Blood Group</label>
            <input type="text" value="<?php echo $row['blood_group']; ?>" readonly>
         <!-- <select  name="bloodgroup" id="bloodgroup">
          <option value=""selected disabled>Select</option>
     
       <option value=" </option>
     
          </select>--->
                        </div>
						
						<div class="input-field">
            <label for="regas">Registered as</label>
            <input type="text" value="<?php echo $row['donar_regas']; ?>" readonly>
          <!--<select  name="regas" id="regas" required>
            <option value="Student" checked>Student</option>
            <option value="Staff">Staff</option>
            <option value="Parent">Parent</option>
            
          </select>-->
                        </div>
						
						
						
						

                        
                       
                    </div>
                </div> 
            </div>
        </form>
    </div>
    <?php
} else {
    echo '<h2 style="text-align:center;text-shadow: 2px 2px 2.9px #ff6666;">'."SORRY U DIDN'T REGISTERED AS DONOR,PLEASE DO THE REGISTRATION."."<br>"
  . '<a href="http://localhost/REDHELPSFC/regdonor.php">
  <i  class="fa fa-search"> Register</i>
</a>'
.'</h2>';
   echo '<div><center>
   <img src="redhelpimages/srinija.gif"/></center>
   </div>';
}

// Remember to close the database connection
mysqli_close($conn);
?></body>
</html>