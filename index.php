<!DOCTYPE html>
<html>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet"> 
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">


	</head>
	<body>
		<div class="main-content">
			<center>
				<img src="images/evento-logo-white.png" class="main-logo">
				<form class="login-form" action="events-dashboard.php">
					<div class="form-group">
						<input type="text" class="form-control" name="user_name" placeholder="Username">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="user_pw" placeholder="Password">
					</div>
					<div class="form-group">
						<button type="submit" class="button-1">Login</button>
					</div>
					
					<a href="registration.php">No account yet? Register here.</a>
				</form>
				
				<button class="btn-facebook" style="padding:10px 50px">Sign up with Facebook</button>

			</center>
		</div>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery-2.2.0.min.js"></script>
	</body>
</html>