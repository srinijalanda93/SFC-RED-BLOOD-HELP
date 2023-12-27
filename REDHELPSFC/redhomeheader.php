<?php
include("connection.php");
?>
<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" href="stylecss/redhomeheader.css"/>  
        <style>
             /*wlecome to sfc design*/
    .myDiv {
  border: 5px;
  border-radius: 10px;
  /*background-color: lightblue;   */ 
  text-align:center;
  font-size:35px;
  font-weight:bold;
  padding-top: 5px;
  padding-bottom:0.01%;
}
/*donar search using dropdown*/
.dropbtn {
 background-color: rgb(252, 216, 223);/*bgcolor as same*/
 color:black;
 padding: 16px;
 font-size: 16px;
 border: none;
}

.dropdown {
 position: relative;
 display: inline-block;
}

.dropdown-content {
 display: none;
 position: absolute;
 background-color: #f1f1f1;
 min-width: 160px;
 box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
 z-index: 1;
}

.dropdown-content a {
 color: black;
 padding: 12px 16px;
 text-decoration: none;
 display: block;
}

.dropdown-content a:hover {background-color:pink;}/*link color*/

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {
    background:linear-gradient(-135deg, #e9c4d0, #f25771);
}/*button color*/
            </style>
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
                  <button class="dropbtn"  style="font-family:candara;font-size:23px;font-weight:bold;">SEARCH DONOR</button>
                    <div class="dropdown-content">
                     <a href="searchdonar.php">Blood Group</a><!--done-->
                     <a href="searchbyage.php">Age</a><!--done-->
                      <a href="searchbylocation.php">Location</a><!--done-->
  </div>
</div></li>
<li>
                    <div class="dropdown">
                  <button class="dropbtn"  style="font-family:candara;font-size:23px;font-weight:bold;">CONTACT</button>
                    <div class="dropdown-content">
                     <a href="redhelpqurey.php">Queries</a>
                     <a href="redhelpcontact.php">Address</a>
                    
  </div>
</div></li>
				
               <!-- 
                <li><a href="adminlogin.php" class="active">Admin</a></li>
           ----> </ul>
            <div style="font-size:25px">
                <?php 
               /* $a1 = $_SESSION['username'];
                //$converted=strtoupper($a1); //upper case
                echo "Hello ".$a1 ."|" ; */?>
                <?php 
    $a1 = $_SESSION['username'];
    
    echo "Hello <a href='donor_details.php?name=".urlencode($a1)."'>".$a1."</a> |";
  
?>
            <a style="padding-left:0x;" href="redhelplogout.php">Logout</a>|
        </div>
        </nav>
  
</header>
</body>
</html>