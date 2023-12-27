<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

#sidebar{position:relative;margin-top:-20px}
#content{position:relative;margin-left:210px}
@media screen and (max-width: 600px) {
  #content {
    position:relative;margin-left:auto;margin-right:auto;
  }
}


.block-anchor {
            color:red;

            cursor: pointer;
        }
</style>
</head>

<body style="color:black;" >

  <?php
  include 'connection.php';//done
    include 'adminsession.php';//done
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    ?>

<div id="header">
<?php include 'adminheader.php';
?>
</div>
<div id="sidebar">
<?php
$active="dashboard";
include 'adminsidebar.php'; ?>

</div>
<div id="content">

  <div class="content-wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 lg-12 sm-12">
          <h1 class="page-title"> Blood Dashboard</h1>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#F4856D; border-radius:50px">
                  <div class="stat-panel text-center">
  <div class="stat-panel-title text-uppercase" style="font-size:30px">A+ </div>
                    <?php
                    // Retrieve the count of A+ donors from the database
$sql = "SELECT COUNT(*) AS count FROM donor WHERE donar_blood=3";
$result = $conn->query($sql);
// Display the count of O+ donors
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   echo "<div class='stat-panel-number h1'>";
    echo $row["count"];
   echo "</div>";
   // echo $row["count"];
} else {
    echo "No A+ donors found.";
}
                  
                    ?>
                    
                   
                    <br>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#F4856D; border-radius:50px">
                  <div class="stat-panel text-center">
                  <div class="stat-panel-title text-uppercase" style="font-size:30px">B+ </div>
                    <?php
                     // Retrieve the count of B+ donors from the database
$sql = "SELECT COUNT(*) AS count FROM donor WHERE donar_blood=1";
$result = $conn->query($sql);
// Display the count of B+ donors
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   echo "<div class='stat-panel-number h1'>";
    echo $row["count"];
   echo "</div>";
   // echo $row["count"];
} else {
    echo "No B+ donors found.";
}
                    ?>
                    
                   
                    <br>
                  </div>
                </div>

              </div>
            </div>

            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#F4856D; border-radius:50px">
                  <div class="stat-panel text-center">
                  <div class="stat-panel-title text-uppercase" style="font-size:30px">O+ </div>
                    <?php
// Retrieve the count of O+ donors from the database
$sql = "SELECT COUNT(*) AS count FROM donor WHERE donar_blood=4";
$result = $conn->query($sql);
// Display the count of O+ donors
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   echo "<div class='stat-panel-number h1'>";
    echo $row["count"];
   echo "</div>";
   // echo $row["count"];
} else {
    echo "No O+ donors found.";
}
                    ?>
                    
                    
                    <br>
                  </div>
                </div>

              </div>
            </div>
			
			            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#F4856D; border-radius:50px">
                  <div class="stat-panel text-center">
                  <div class="stat-panel-title text-uppercase" style="font-size:30px">AB+ </div>
                    <?php
                    // Retrieve the count of AB+ donors from the database
$sql = "SELECT COUNT(*) AS count FROM donor WHERE donar_blood=7";
$result = $conn->query($sql);
// Display the count of AB+ donors
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   echo "<div class='stat-panel-number h1'>";
    echo $row["count"];
   echo "</div>";
   // echo $row["count"];
} else {
    echo "No AB+ donors found.";
}
                    ?>
                   
                   
                    <br>
                  </div>
                </div>

              </div>
            </div>
			
			            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#F4856D; border-radius:50px">
                  <div class="stat-panel text-center">
                  <div class="stat-panel-title text-uppercase" style="font-size:30px">A- </div>
                    <?php
                    // Retrieve the count of A- donors from the database
$sql = "SELECT COUNT(*) AS count FROM donor WHERE donar_blood=6";
$result = $conn->query($sql);
// Display the count of A- donors
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   echo "<div class='stat-panel-number h1'>";
    echo $row["count"];
   echo "</div>";
   // echo $row["count"];
} else {
    echo "No A- donors found.";
}
                    ?>
                   
                    <br>
                  </div>
                </div>

              </div>
            </div>
			
			            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#F4856D; border-radius:50px">
                  <div class="stat-panel text-center">
                  <div class="stat-panel-title text-uppercase" style="font-size:30px">B- </div>
                    <?php
                    // Retrieve the count of AB- donors from the database
$sql = "SELECT COUNT(*) AS count FROM donor WHERE donar_blood=2";
$result = $conn->query($sql);
// Display the count of B- donors
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   echo "<div class='stat-panel-number h1'>";
    echo $row["count"];
   echo "</div>";
   // echo $row["count"];
} else {
    echo "No B- donors found.";
}
                    ?>
                   
                    <br>
                  </div>
                </div>

              </div>
            </div>
			
			            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#F4856D; border-radius:50px">
                  <div class="stat-panel text-center">
                  <div class="stat-panel-title text-uppercase" style="font-size:30px">O-</div>
                    <?php
                    // Retrieve the count of O- donors from the database
$sql = "SELECT COUNT(*) AS count FROM donor WHERE donar_blood=5";
$result = $conn->query($sql);
// Display the count of O- donors
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   echo "<div class='stat-panel-number h1'>";
    echo $row["count"];
   echo "</div>";
   // echo $row["count"];
} else {
    echo "No O- donors found.";
}
                    ?>
                   
                    <br>
                  </div>
                </div>

              </div>
            </div>
			
			            <div class="col-md-3">
              <div class="panel panel-default panel-info" style="border-radius:50px;">
                <div class="panel-body panel-info bk-primary text-light" style="background-color:#F4856D; border-radius:50px">
                  <div class="stat-panel text-center">
                  <div class="stat-panel-title text-uppercase" style="font-size:30px">AB- </div>
                    <?php
                     // Retrieve the count of B- donors from the database
$sql = "SELECT COUNT(*) AS count FROM donor WHERE donar_blood=8";
$result = $conn->query($sql);
// Display the count of AB- donors
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
   echo "<div class='stat-panel-number h1'>";
    echo $row["count"];
   echo "</div>";
   // echo $row["count"];
} else {
    echo "No AB- donors found.";
}
                    ?>
                   
                    <br>
                  </div>
                </div>

              </div>
            </div>
			
			            

            
                </div>

              </div>
            </div>



        </div>
      </div>
    </div>
  <?php
 } else {
     echo '<div class="alert alert-danger"><b> Please Login First To Access Admin Portal.</b></div>';
     ?>
     <form method="post" name="" action="adminlogin.php" class="form-horizontal">
       <div class="form-group">
         <div class="col-sm-8 col-sm-offset-4" style="float:left">

           <button class="btn btn-primary" name="submit" type="submit">Go to Login Page</button>
         </div>
       </div>
     </form>
 <?php }
  ?>

</body>
</html>