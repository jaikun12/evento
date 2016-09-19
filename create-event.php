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

		<nav class="main-nav">
			<!--img src="images/evento-logo-white.png" class="brand"-->
		</nav>

		<div class="container-fluid row nav-title">
			<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
				<h3 id="header-text">Create Event</h3>
			</div>			
		</div>
			<div class="well container" style="margin-top:1em">
				<label>Create a title for your event</label>
				<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
				<br><br>
				<label>Create a short description for your event</label>
				<textarea name="" id="input" class="form-control" rows="3" required="required"></textarea>
				<label>Where</label>
				<div id="map" style="width:100%;height:500px"></div>
				<label>When</label>
				<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="">
			</div>

		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
	</body>
</html>