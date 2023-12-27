<?php
include "connection.php";
if (isset($_GET['success']) && $_GET['success'] == 1) {
  echo "<p style=' border: 5px;
  border-radius: 10px;
  background-color:#C1F3A0;
  text-align:center;
  font-size:30px;
  
  padding-top: 5px;
  padding-bottom:0.01%;'>Congratulations on becoming a donor!!</p>";
}
?>
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
include("redhomeheader.php");//jiminaaaaaaaaaaa

?>

<html><head>
<link rel="stylesheet" href="stylecss/redhelphome.css"/>
<script src="stylecss/HomeImageslider.js" defer></script>
<style>
/*main focus on the image slider*/
.mySlides {
    display: none;
}
/* Slideshow container */
.slideshow-container {
  margin: auto;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}
/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color:black;
  border-radius: 50%;
  display: inline-block;
}

.active1{
  background-color:red;
}
@keyframes fade {
  from {opacity: .2} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {
    font-size: 11px
}
}/*media*/

 </style>
</head>
<body>
<section class="featuresimagehomepage">
        <div class="slideshow-container">

        <div class="mySlides fade">   
      <img style="height:530px;width:100%;"src="redhelpimages/1.png"/></img>
     </div>

  <div class="mySlides fade">
 <img style="height:530px;width:100%;" src="redhelpimages/2.png"/></img>
  </div>

  <div class="mySlides fade">
<img  style="height:530px;width:100%;" src="redhelpimages/3.png"/></img>
  </div>

  <div class="mySlides fade">
<img style="height:530px;width:100%;" src="redhelpimages/4.png"/></img>
</div>

<div class="mySlides fade">
<img style="height:530px;width:100%;" src="redhelpimages/5.png"/></img>
</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</section>
<!---the above are the image scrolling using javascript-->
<!--compoents of 3 images below-->
<section class="features">
        <div class="feature-container">

            <div class="feature-box">
                <div class="f-img">
                    <img  src="redhelpimages/passblood.jpg"/>
                </div>
                <div class="f-text">
                    <h4>Register Donor</h4><!--about us--->
                    <a href="regdonor.php" class="main-btn">Register</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img style="height:300px;" src="redhelpimages/bloodpacket.jpg"/>
                </div>
                <div class="f-text">
                    <h4>Search Donors</h4>
                    <a href="searchdonar.php" class="main-btn">Search</a>
                </div>
            </div>

            <div class="feature-box">
                <div class="f-img">
                    <img style="height:300px;" src="redhelpimages/adminlogohomepage.jpeg"/>
                </div>
                <div class="f-text">
                    <h4>Admin</h4>
                    <a href="adminlogin.php" class="main-btn">Login</a>
                </div>
            </div>
        </div>
    </section>
	<!---the above code placing the image using card--->                 
<!---THE Below CODE IS MANAGING THE PAGES--->
<section class="about feature-box" style="margin-top:20px;width:90%">
        <div class="about-img">
            <img src="redhelpimages/visionandmission.jpeg">
        </div>
        <div class="about-text">
            <h2>VISION AND MISSION</h2>
            <p>
            
                          <?php
                            include 'connection.php';
                            $sql=$sql= "select * from pages where page_type='VisionMission'";//VisionMission
                            $result=mysqli_query($conn,$sql);
                            if(mysqli_num_rows($result)>0)   {
                                while($row = mysqli_fetch_assoc($result)) {
                                  echo $row['page_data'];
                                }
                              }

                           ?>
            </p>  
        </div>
    </section> <section class="about feature-box" style="margin-top:20px;width:90%">
      
      <div class="about-text">
          <h2>THE NEED FOR BLOOD</h2>
          <p>
         
                 
                    <?php
                      include 'connection.php';
                      $sql=$sql= "select * from pages where page_type='needforblood'";//NeedBlood
                      $result=mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)>0)   {
                          while($row = mysqli_fetch_assoc($result)) {
                            echo $row['page_data'];
                          }
                        }
                     ?>
                   </p>   
      </div>
      <div class="about-img">
          <img src="redhelpimages/theneedforblood.jpeg">
      </div>
  </section>
  <section class="about feature-box" style="margin-top:20px;width:90%">
      <div class="about-img">
          <img src="redhelpimages/usesofdonating.jpeg">
      </div>
      <div class="about-text">
          <h2>LIFE SAVER</h2>
          <p>
          <?php
                      include 'connection.php';
                      $sql=$sql= "select * from pages where page_type='lifesaver'";//DonarUsers
                      $result=mysqli_query($conn,$sql);
                      if(mysqli_num_rows($result)>0)   {
                          while($row = mysqli_fetch_assoc($result)) {
                            echo $row['page_data'];
                          }
                        }

                     ?>
         </p>
                      </div>
  </section>
  <section class="about feature-box" style="margin-top:20px;width:90%">
       
        <div class="about-text">
            <h2>BLOOD GROUP</h2>
            <p>
            <?php
                        include 'connection.php';
                        $sql=$sql= "select * from pages where page_type='bloodgroups'";//BloodGroup
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
           </p>
                        </div>
                        <div class="about-img">
            <img src="redhelpimages/bgroup.jpeg">
        </div>
    </section>

    <section class="about feature-box" style="margin-top:20px;width:90%">
        <div class="about-img">
            <img src="redhelpimages/universalblood.jpeg">
        </div>
        <div class="about-text">
            <h2>IMPORTANTS OF UNIVERSAL BLOOD</h2>
            <p>
            <?php
                        include 'connection.php';
                        $sql=$sql= "select * from pages where page_type='universal'";//Universal
                        $result=mysqli_query($conn,$sql);
                        if(mysqli_num_rows($result)>0)   {
                            while($row = mysqli_fetch_assoc($result)) {
                              echo $row['page_data'];
                            }
                          }

                       ?>
           </p>
                        </div>
    </section>
</body></html>