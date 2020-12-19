<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>thêm mới</title>
	<link rel="stylesheet" href="">
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.container{
			width: 400px;
			margin: 0 auto;
			margin-top: 30px;
			text-align: center;
			border: 1px solid #000000;
		}
		.container h1{
			background: #0066ff;
			padding: 10px;
			color: #fff;
		}
		.container form{
			margin: 5px 5px;
		}
		.container input{
			padding: 5px;
			margin: 5px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Thêm mới người dùng</h1>
		<form action="xuly.php" method="POST" enctype="multipart/from-data">
			<div class="form-group">
				<label for="">Usernam: </label>
				<input type="text" name="username" placeholder="nhập tên" class="form-contro"><br>
				<label for="">Email: </label>
				<input type="email" name="email" placeholder="nhập email" class="form-contro"><br>
				<label for="">Avatar: </label>
				<input type="file" name="avatar" class="form-contro"><br>
				<label for="">Password: </label>
				<input type="password" name="password" placeholder="nhập mật khẩu" class="form-contro"><br>
				<div class="form-group">
					<input type="submit" name="them" value="Thêm">
					<input type="reset" value="Làm lại">
				</div>
			</div>
		</form>
		<div><a href="index.php">Quay lại</a></div>
	</div>
</body>
</html>