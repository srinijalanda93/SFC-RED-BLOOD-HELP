<?php
include("connection.php");
?>
<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" href="stylecss/redhomeheader.css"/>  
        
    </head>
    <body>
    <?php
include("connection.php");
?>
<div class="myDiv">
WELCOME TO SFC RED HELP
</div>
    <header class="sricolor">
        <nav>
        <a href="https://www.sfc.ac.in/" class="logo">
                <img src="redhelpimages/sfcredHELP.PNG"/>
            </a>
            <ul class="menu">
                 <li><a href="redhelphome.php" class="active">Home</a></li><!--done-->
                <li><a href="regdonor.php" class="active">Register donor</a></li><!--not done-->
                <li><a href="whydonate.php" class="active">Why donate blood</a></li><!--done-->
                <!--<li><a href="sfclogin.html" class="active">Login</a></li>--->
               
				<li>
                    <div class="dropdown">
                  <button class="dropbtn"  style="font-family:candara;font-size:23px;font-weight:bold;">SEARCH DONAR</button>
                    <div class="dropdown-content">
                     <a href="searchdonar.php">Blood Group</a><!--done-->
                     <a href="searchbyage.php">Age</a><!--done-->
                      <a href="searchbylocation.php">Location</a><!--done-->
  </div>
</div></li>
<li>
    <!--
                    <div class="dropdown">
                  <button class="dropbtn"  style="font-family:candara;font-size:23px;font-weight:bold;">CONTACT</button>
                    <div class="dropdown-content">
                     <a href="redhelpqurey.php">Queries</a>
                     <a href="redhelpcontact.php">Address</a>
                    
  </div>
</div>--->
</li>
  <!---     
<li><a href="adminlogin.php" class="active">Admin</a></li>--->
            </ul>
            <div style="font-size:34px">
                <?php 
                $a1 = $_SESSION['username'];
                $converted=strtoupper($a1); //upper case
                echo "Hello ".$converted ."|" ; ?>
            <a style="padding-left:0x;" href="redhelplogout.php">Logout</a>|
        </div>
        </nav>
       
</header>
</body>
</html>