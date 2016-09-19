<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/events.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
	</head>
	<body>

		<nav class="main-nav">
			<!--img src="images/evento-logo-white.png" class="brand"-->
		</nav>

		<div class="container-fluid row nav-title">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<h3 id="header-text">My Events</h3>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<h3 id="header-text"></h3>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<h3 id="header-text"></h3>
			</div>
			<a class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<img src="images/add-event-icon.png" style="width:25px;height:25px;">
			</a>
			
		</div>

		<div class="container-fluid body-wrapper">

		<div class="event-list-wrapper">
			<div class="row">

			<?php 
				include("boilers/event1-right.php");
				include("boilers/event1.php");
				include("boilers/event1.php");
				 ?>

			</div><!--row-->
		</div><!-- event-list-body-->
		</div>

		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>