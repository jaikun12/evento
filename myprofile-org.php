<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<link rel="stylesheet" type="text/css" href="css/cards.css">
		<link rel="stylesheet" type="text/css" href="css/dashboard.css">
		
	</head>
	<body>
		<?php
			include("boilers/nav.php");
			include("boilers/sidenav-event-monitoring.php");
		?>

		
		<div class="main-content">

		<div class="col-md-4">
			<img src="images/devcon-img.png">
		</div>

		<div class="col-md-8">
			<h2>Developers Connect Philippines (DevCon)</h2><br>
			DevCon is a non-proﬁt organization which aims to promote the "IT Pinoy Talent" mainly by providing a unique venue for IT students, educators, professionals and enthusiasts to Sync, Support and Succeed.
			<br><br>Website: <a href="http://devcon.ph/">http://devcon.ph/</a>
		</div>
		<hr>
		<div class="col-md-12">
		<br><br>
			<div class="container-fluid" style="background:rgb(39,113,140);">
				<h4 style="color:white">Most Recent Events:</h4>
			</div>
			<div class="container-fluid" style="background:#F2F2F2">
				<?php include("boilers/event-bluemix.php"); include("boilers/event-card.php"); ?>
			</div>
			
		</div>


		</div>


		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>