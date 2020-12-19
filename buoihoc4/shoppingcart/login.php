<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="js/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="top-content">
		<div class="inner-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 form-box">
						<div class="form-top">
							<div class="form-top-left">
								<h3>Login to our site</h3>
								<p>Enter your username and password to log on:</p>
							</div>
							<!-- <div class="form-top-right">
								<i class="fa fa-lock"></i>
							</div> -->
						</div>
						<div class="form-bottom">
							<form role="form" action="xulylogin.php" method="post" class="login-form">
								<div class="form-group">
									<label class="sr-only" for="form-username">Username</label>
									<input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
								</div>
								<div class="form-group">
									<label class="sr-only" for="form-password">Password</label>
									<input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
								</div>
								<button type="submit" class="btn">Sign in!</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>