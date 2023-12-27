<?php
include 'connection.php'; //done
?>
<!DOCTYPE html>
<!--=== Coding by CodingLab | www.codinglabweb.com === -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <!---<link rel="stylesheet" href="stylecss/regdonor.css">---->
     
    <!----===== Iconscout CSS ===== 
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
-->
    <!--<title>Responsive Regisration Form </title>--> 
    <style>
      body {
  font-family:candara;
  font-size:24px;
  background: linear-gradient(to bottom, #ff8c94, #ffa07a, #ffb6c1);;
}

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

.form .details {
  margin-bottom: 40px;
}

.form .details .title {
  font-size: 24px;
  font-weight: bold;
  margin-bottom: 20px;
  display: block;
}

.form .fields {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 20px;
}

.form .input-field {
  display: block;
  margin-bottom: 20px;
}

.form .input-field label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

.form .input-field input,
.form .input-field select {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
}

.form .input-field select option {
  font-size: 20px;
  font-family:candara;
}

.form .sumbit {
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

.form .sumbit:hover {

  background-color: #3e8e41;
}

.form .sumbit .btnText {
  margin-right: 10px;
}

@media (max-width: 768px) {
  .form .fields {
    grid-template-columns: 1fr;
  }
}
.myDiv {
  border: 5px;
  border-radius: 10px;
 /* background-color: lightblue; */
 background-image: linear-gradient(-78deg, rgb(244, 196, 196), rgb(196, 167, 249),rgb(241, 113, 134));  
  text-align:center;
  font-size:35px;
  font-weight:bold;
  width:100%;
  padding-top: 5px;
  padding-bottom:0.01%;
}
img{
  width:50px;height:40px;
}
    </style>
</head>
<body>

<div class="myDiv">
    <a href="redhelphome.php">
        <img src="redhelpimages/home.png" alt="Home icon">
    </a> WELCOME TO SFC RED HELP
        </div>
    <div class="container">
    
        <header>Registration</header>

        <form action="reg1.php" class="form" method="POST">
            <div class="form first">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" id="fullname" placeholder="Enter your name" required>
                        </div>                    

                        <div class="input-field">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" placeholder="Enter your email" required>
                        </div>
                        <script>
  const phoneInput = document.getElementById("phone");
  const phoneError = document.getElementById("phone-error");

  phoneInput.addEventListener("input", function() {
    const phoneValue = phoneInput.value;
    if (phoneValue.length === 10 || phoneValue.length === 12 || phoneValue.length === 13) {
      phoneError.innerHTML = "";
    } else {
      phoneError.innerHTML = "Phone number should be 10, 12, or 13 characters.";
    }
  });
</script>

<div class="input-field">
  <label for="phone"> Mobile Number</label>
  <input type="tel" name="phone" id="phone" placeholder="Enter mobile number" required>
  <div id="phone-error" style="color: red;"></div>
</div>

					<!--	<div class="input-field">
                            <label for="phone"> Mobile Number</label>
                            <input type="tel"  name="phone" id="phone"  placeholder="Enter mobile number" required>
                        </div>--->
						
						<div class="input-field">
                            <label for="age">Enter Age</label>
                            <input type="number" name="age" id="age" placeholder="Enter your age" required>
                        </div>
						
						<div class="input-field">
                            <label for="address">Enter Address</label>
                            <input type="text" name="address" id="address"  placeholder="Enter city" required>
                        </div>                      

                        <div class="input-field">
                            <label for="gender">Gender</label>
                            <select  name="gender" id="gender"required>
                                <option disabled selected>Select gender</option>
                                
            <option value="female" checked>Female</option>
            <option value="male">Male</option>
          </select>
                            
                        </div>
						
						<div class="input-field">
            <label for="bloodgroup" required>Blood Group</label>
          <select  name="bloodgroup" id="bloodgroup">
          <option value=""selected disabled>Select</option>
      <?php
        include 'connection.php';
        $sql= "select * from blood";
        $result=mysqli_query($conn,$sql) or die("query unsuccessful.");
      while($row=mysqli_fetch_assoc($result)){
       ?>
       <option value=" <?php echo $row['blood_id'] ?>"> <?php echo $row['blood_group'] ?> </option>
     <?php } ?>
          </select>
                        </div>
						
						<div class="input-field">
            <label for="regas">Registered as</label>
          <select  name="regas" id="regas" required>
            <option value="Student" checked>Student</option>
            <option value="Staff">Staff</option>
            <option value="Parent">Parent</option>
            
          </select>
                        </div>
						
						<div class="input-field">
            <label for="diabetic">Are you diabetic?</label>
          <select  name="diabetic" id="diabetic" required>
            <option value="yes" >yes</option>
            <option value="No">No</option>  
          </select>
                        </div>
						
						<div class="input-field">
            <label for="recent">Did you donate the blood recently?</label>
          <select  name="recent" id="recent" required>
            <option value="yes" >yes</option>
            <option value="No">No</option>  
          </select>
                        </div>

                        
                        <button class="sumbit">
                            <span class="btnText">Submit</span>
                            <i class="uil uil-navigator"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="stylecss/regdonor.js"></script>
</body>
</html>