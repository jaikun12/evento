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
			include("boilers/sidenav-myevents.php");
		?>

		
		<div class="main-content">
		<div>
			<div class="col-md-12" style="margin: 0 0 2em 0">
				<div class="col-md-5">
					<img class="" style="max-height:250px;max-width:500px;" src="images/content_file4.png">
				</div>
				<div class="col-md-7">
					<h2>Bluemix Challenge</h2>
					<br>
					THURS, 22 Sept, 2016
					<br>Description:
					<p>Bluemix Challenge is a competition that aims to engage students in app development as they solve real world challenges using Bluemix technologies. For the ITIP Edition, the objective is to automate selected process of the ITIP National Conference.</p>
				</div>

			</div>
			<div class="col-md-6">
				Select New Destination:
					<img class="" style="height:330px;width:600px;" src="images/maps-short.png">
			</div>
			<div class="col-md-1">
			</div>
			<div class="col-md-4">
				<br><br>
				Selected destination and time:
				<h2>IBM Philippines (BGC Office)</h2><br>
				<h5>28/F, One World Place, 32nd St., BGC, Taguig City<br><br>

				Sep 14, 2016 8:00AM to Oct 07, 2016 7:00PM</h5> <br>
				<button type="button" class="btn btn-success">Accept Changes</button>
				<button type="button" class="btn btn-danger">Cancel Event</button>
			</div>
		</div>
		</div>


		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>