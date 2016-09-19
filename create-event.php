<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/events.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<link rel="stylesheet" type="text/css" href="css/dashboard.css">



	</head>
	<body>
		<script>
			function myMap() {
			  var mapCanvas = document.getElementById("map");
			  var mapOptions = {
			    center: new google.maps.LatLng(51.5, -0.2), 
			    zoom: 10
			  }
			  var map = new google.maps.Map(mapCanvas, mapOptions);
			}
		</script>

		<?php
			include("boilers/nav.php");
			include("boilers/sidenav-myevents.php");
			?>
		<div class="main-content">
			<h2>Create Event</h2><hr>
			<div class="container-fluid" style="margin-top:1em"><label>Create a title for your event</label>
				<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
				<br><br>
				<label>Create a short description for your event</label>
				<textarea name="" id="input" class="form-control" rows="6" required="required"></textarea><br>
				<label>Where</label>
				<div id="map" style="width:100%;height:500px"></div><br>
				<label>When</label>
				<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
			</div>
		</div>

		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
	</body>
</html>