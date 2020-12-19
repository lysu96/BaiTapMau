<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Thêm mới người dùng</h1>
		<form action="save_user.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="">Username:</label>
				<input type="text" name="username" placeholder="moi ban nhap ten..." class="form-control">
			</div>
			<div class="form-group">
				<label for="">Email:</label>
				<input type="text" name="email" placeholder="moi ban nhap email..." class="form-control">
			</div>
			<div class="form-group">
				<label for="">Avatar:</label>
				<input type="file" name="avatar" class="form-control">
			</div>
			<div class="form-group">
				<label for="">Password:</label>
				<input type="Password" name="password" placeholder="moi ban nhap password..." class="form-control">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>&nbspThêm mới</button>
			</div>
		</form>
	</div>
</body>
</html>