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
			<?php
				include("boilers/event-card.php");
				
				include("boilers/new-event-card.php");
				?>
				
		</div>


		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>