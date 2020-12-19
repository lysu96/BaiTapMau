<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<h1>Thêm mới người dùng</h1>
		<form action="save_user.php" method="post" enctype="multipart/form-data">
			<div class="form_group">
				<label for="">username: </label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form_group">
				<label for="">Email: </label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form_group">
				<label for="">password: </label>
				<input type="password" name="password" class="form-control">
			</div>
			<div class="form_group">
				<label for="">Avata: </label>
				<input type="file" name="avata" class="form-control">
			</div>
			<div class="form_group">
				<button name="nut">Thêm vào</button>
			</div>
		</form>

	</div>
</body>
</html>