<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Bangladesh Metro-Rail </title>
	<link rel="shortcut icon" href="images/favicon1.png"></link>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" ></link>
	<link href="css/bootstrap.css" rel="stylesheet" ></link>
	<link href="css/Default.css" rel="stylesheet" >	</link>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script>
		$(document).ready(function()
		{
			var x=(($(window).width())-1024)/2;
			$('.wrap').css("left",x+"px");
		});
	</script>
	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/man.js"></script>
	
	
</head>
<body>

	<div class="wrap">
		<!-- Header -->
		<div class="header">
			<div style="float:left;width:140px;">
				<img src="images/logo1.png"/>
			</div>		
			<div>
			<div style="float:right; font-size:20px;margin-top:20px;">
			<?php
			 if(isset($_SESSION['name']))	
			 {
			 echo "Welcome,".$_SESSION['name']."&nbsp;&nbsp;&nbsp;<a href=\"logout.php\" class=\"btn btn-info\">Logout</a>";
			 }
			 else
			 {
			 ?>
				<a href="login1.php" class="btn btn-info">Login</a>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="signup.php?value=0" class="btn btn-info">Signup</a>
			<?php } ?>
			
			
			</div>
			<div id="heading">
				<a href1="index.php">Bangladesh Metro-Rail</a>
			</div>
			</div>
		</div>
		
		<!-- Navigation bar -->
		<div class="navbar navbar-inverse">
			<div class="navbar-inner">
				<div class="container" >
				<a class="brand" href="index.php" >HOME</a>
				<a class="brand" href="train.php" >FIND TRAIN</a>
				<a class="brand" href="reservation.php">RESERVATION</a>
				<a class="brand" href="profile.php">PROFILE</a>
				</div>
			</div>
		</div>
		<div class="span12 well">
			<!-- Photos slider -->
			<div id="myCarousel" class="carousel slide" style="width:600px; float:left;margin-bottom:3px;">		
				<div class="carousel-inner">
				<div class="active item"><img src="images/1.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/3.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/14.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/12.jpg" style="width:600px;height:350px;"/></div>
				<div class="item"><img src="images/2.jpg" style="width:600px;height:350px;"/> </div>
				<div class="item"><img src="images/14.jpg"style="width:600px;height:350px;"/></div>
				
				</div>
				<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
				<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
			</div>
			<!-- News and Alert-->
			<div class="news" Style="float:right;">
			<marquee behavior="scroll" id="marq"  scrollamount=3 direction="up" height="294px" onmouseover="nestop()" onmouseout="nestrt()">
				<div>
				<p><b>A fully Government owned company named as Dhaka Mass Transit Company Limited (DMTCL) was incorporated under the Companies act of 1994 on 03 June 2013 to establish, operate and maintain including the planning, survey, designing, financing of a state-of-the-art Mass Rapid Transit (MRT) or Metro Rail Network in Dhaka Metropolis and adjoining areas to reduce traffic congestion and improve the environment.  </b></p>
				</br>
				<p><b>Line-6 consists of 16 elevated stations each of 180m long and 20.1 km (12.5 mi) of electricity-powered light rail tracks. All of Line-6, save for the depot, and some of its accompanying LRT, will be elevated above current roads primarily above road medians to allow traffic flow underneath, with stations also elevated. Dhaka Metro is projected to serve more than 60,000 passengers per hour by 2022, with wait times of approximately 4 minutes.</b></p></br>
				<p><b>The entire route will be able to be travelled in less than 40 minutes at a speed of 100 km/h (62 mph), and is expected to drastically reduce the number of private cars on Dhaka's streets as well as their potentially 7-hour-long standstills.</b></p></br>
				<p><b>The system plans to use magnetic contactless Integrated Circuit Ticketing, commonly known as smart cards. Platform screen door (PSD) barriers used at the platform level will increase safety and increase efficiency. Trains of six spacious air-conditioned cars will arrive every four minutes going each way at each of the 16 stations.</b></p></br>
				<p><b>Passengers will now be involved in judging cleanliness level of popular trains including Rajdhani, Shatabdi and Duronto as well as major stations across the country.</b><p></br>
			
				
				</div>
			</marquee>
			</div>
		</div>
		
</body>
</html>

<?php

if(isset($_SESSION['error']))
{
session_destroy();
}

?>