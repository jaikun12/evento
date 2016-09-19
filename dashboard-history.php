<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">
		<link rel="stylesheet" type="text/css" href="css/cards.css">
		<link rel="stylesheet" type="text/css" href="css/dashboard.css">
		<link rel="stylesheet" type="text/css" href="css/events-history.css">
	</head>
	<body>
		<?php
			include("boilers/nav.php");
			include("boilers/sidenav-myevents.php");
			?>

		
		<div class="main-content">
			<h2>Events History</h2>
				<?php
					include("boilers/events-list.php");
					?>
				


			
		</div>


		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>