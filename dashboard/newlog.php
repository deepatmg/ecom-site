<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" href="../css/newlog.css">
	<title>Login Page</title>
	<style>
		* {
			margin: 0;
		}
		#header .jumbotron {
			background-color: #606060;
			position: relative;
			height: 120px;
			
		}
	
		#header .logo img {
			height: 150px;
			width: 150px;
			position: absolute;
			top: 10%;
			left: 0;
			right: 0;
			display: block;
			margin: 0 auto;
		}		
	</style>
</head>
<body>
	<div id="header">
			<div class="jumbotron">
				<div class="logo">
					<img src="../image/logo.png" alt="">
				</div>
			</div>		
	</div>
	<div class="tab-content">
		<div id="login" class="tab-pane active">
			<form action="#" class="form-signin login">
				<p class="title">Enter your username and password</p>
				<input type="text" placeholder="Username" class="form-control" autofocus required>
				<input type="password" placeholder="Password" class="form-control" required>
				<button class="btn btn-danger text-muted">Log In</button>
			</form>
		</div>
		<div id="forgot" class="tab-pane">
			<form action="" class="form-signin forgot">
				<p class="title">Enter your valid email address</p>
				<input type="email" placeholder="Email" class="form-control" required>
				<button class="btn btn-success text-muted">Recover Password</button>
			</form>
		</div>
		<div id="signup" class="tab-pane">
			<form action="" class="form-signin signup">
				<p class="title">Please fill the details to register</p>
				<input type="text" placeholder="First Name" class="form-control">
				<input type="text" placeholder="Last Name" class="form-control">
				<input type="email" placeholder="Email-Address" class="form-control" required>
				<input type="text" placeholder="Username" class="form-control" minlength="5" required>
				<input type="password" placeholder="Password" class="form-control" required>
				<input type="password" placeholder="Confirm Password" class="form-control" required>
				<button class="btn btn-success text-muted">Sign Up</button>
			</form>
		</div>
	</div>
	<div class="text-center">
		<ul class="list-inline">
			<li><a class="text-muted" href="#login" data-toggle="tab">Log In</a></li>
			<li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
			<li><a class="text-muted" href="#signup" data-toggle="tab">Sign Up</a></li>
		</ul>
	</div>

<script type="text/javascript" src="../js/login.js"></script>
<!-- <script type="text/javascript" src="../jquery-2.0.3.min.js"></script> -->
<script type="text/javascript" src="../jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script>
	
</script>
</body>
</html>