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
			<div class="col-md-7">
				<h2>Scan the tickets of the attendees</h2><br><br>

				<img src="images/cam-loading.gif" style="height:450px;width:600px">
			</div>
			<div class="col-md-5">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Ticket ID</th>
							<th>Name</th>
							<th>Timestamp</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>12G123</td>
							<td>Boaz Sze</td>
							<td>2016-09-22 12:43:23</td>
						</tr>
						<tr>
							<td>123G123</td>
							<td>Lawrence De Leon</td>
							<td>2016-09-22 12:43:23</td>
						</tr>
						<tr>
							<td>123G123</td>
							<td>Boaz Sze</td>
							<td>2016-09-22 12:43:23</td>
						</tr>
						<tr>
							<td>123G123</td>
							<td>Lawrence De Leon</td>
							<td>2016-09-22 12:43:23</td>
						</tr>
					</tbody>
				</table>
			</div>

		</div>


		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>