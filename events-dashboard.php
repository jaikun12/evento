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
		<nav>
			<img class="brand" src="images/evento-logo-white.png">
			<ul id="nav-menu" class="list-inline">
				<li><a href="#">Home</a></li>
				<li><a href="live-routes.php">My Events</a></li>
				<li><a href="sensurge-analytics.php">My Participants</a></li>
			</ul>
		</nav>

		<div class="side-nav">
			<h3>My Events</h3>
			<ul id="side-nav-items" class="list-group">
				<a href="#"><li class="list-group-item">General</li></a>
				<a href="dashboard-history.php"><li class="list-group-item">History</li></a>
			</ul>
		</div>
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


		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>