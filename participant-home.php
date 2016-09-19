<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/user-nav.css">
		<link rel="stylesheet" type="text/css" href="css/cards.css">	
		<link rel="stylesheet" type="text/css" href="css/buttons.css">	
		<link rel="stylesheet" type="text/css" href="css/user-home.css">
	</head>
	<body>
		<?php
			include('boilers/user-nav.php');
			?>
		<body>
			<div class="background">
			<div id="welcome-div" class="container-fluid">
				<center>
					<h1>Start your adventure! Join events near you.</h1>
					<br>
					<a href="" class="hollow-btn">Join Event</a>
				</center>

			</div>
			</div>

			<div id="events-near" class="container padded">
				<center><h3>Events near you</h3></center>
				<br>
				<input type="text" class="form-control" placeholder="Search for events"</div>
				<?php
					include('boilers/user-event-cards.php');
					?>
			</div>
		</body>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>