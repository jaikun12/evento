<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/events.css">
		<link rel="stylesheet" type="text/css" href="css/nav.css">


	</head>
	<body>

		<nav class="main-nav">
			<!--img src="images/evento-logo-white.png" class="brand"-->
		</nav>

		<a>
			<img class="add-event-pic" src="images/add-event-icon.png">
		</a>

		<a>
			<img class="add-event-pic" src="images/delete-event-icon.png">
		</a>

		<div class="container-fluid body-wrapper">
		<div class="list-wrapper">

			<div class="container-fluid" style="background-color:#E3E3E3;margin:1em -2em 0 -2em;height:8em">
				<h2 id="header-text">My Events Dashboard</h2>
			</div>

			<div class="event-list-body">
			<!-- event-list-body-->
			<div class="row">

			<?php
				include("boilers/event1.php");
				include("boilers/event2.php");
				include("boilers/event1.php");
				include("boilers/event2.php");
				include("boilers/event1.php");
				include("boilers/event2.php");
				include("boilers/event2.php");
				include("boilers/event1.php");
				include("boilers/event2.php");
			?>
					

			</div>
			<!-- event-list-body-->
			</div>
		</div>
		</div>

		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>