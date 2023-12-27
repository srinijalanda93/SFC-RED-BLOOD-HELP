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
include("redhomeheader.php");
?>
<html><head>
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!--
<link rel="stylesheet" href="stylecss/style.css">--->
</head><body>
<section >
		<div class="container">
		<h2  style="font-family:candara"><center><b>ADDRESS</b></center></h2>
			<div class="row justify-content-center">
				
	  <p> <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.471710265301!2d78.45874151435392!3d17.437122605959615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90ba9dab520b%3A0x7a579b6dc0dae218!2sSt.%20Francis%20College%20For%20Women!5e0!3m2!1sen!2sin!4v1676475758582!5m2!1sen!2sin" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center></p>
			</div>
			<br/>
			<table style="width:100%;border:1px">
			<div class="row justify-content-center">
				<th>
				<div class="col-md-12">
						<div class="row">
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-map-marker"></span>
			        		</div>
			        		<div class="text">
				             <p><span style="font-size:20px;">ADDRESS:</span></p>
            
        </p style="font-size:20px;"> Uma Nagar,Begumpet,Hyderabad-5000016</p>
				          </div>
			          </div>
							</div>
	  </th><th>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-phone"></span>
			        		</div>
			        		<div class="text">
				            <p><span style="font-size:20px;">Phone:</span> <a style="font-size:20px;" href="tel://1234567920">+91 4023403200/23400470</a></p>
				          </div>
			          </div>
							</div>
	  </th><th>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-paper-plane"></span>
			        		</div>
			        		<div class="text">
				            <p><span style="font-size:20px;">Email:</span> <a style="font-size:20px;" href="mailto:info@sfc.ac.in">info@sfc.ac.in</a></p>
				          </div>
			          </div>
							</div>
	  </th><th>
							<div class="col-md-3">
								<div class="dbox w-100 text-center">
			        		<div class="icon d-flex align-items-center justify-content-center">
			        			<span class="fa fa-globe"></span>
			        		</div>
			        		<div class="text">
				            <p><span style="font-size:20px;">Website</span> <a style="font-size:20px;" href="https://sfc.ac.in/">sfc.ac.in</a></p>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div></th>
	  </table>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
	</body>
</html>