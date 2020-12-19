<?php 
	require_once 'db.php';
	$id = isset($_GET['id']) == true ? $_GET['id']:null;
	if ($id == null) {
		echo "Không tìm thấy dữ liệu <br>";
		echo "<a href='index.php'>Quay lại </a>";
		die;
	}
	$sql = "SELECT * FROM users WHERE id=$id";
	$stmt = $ketnoi->prepare($sql);
	$stmt->execute();
	$user = $stmt->fetch();
 ?>

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
		<h1>Sửa thông tin người dùng</h1>
		<form action="sua_thong_tin.php" method="POST">
		<input type="hidden" name="id" value="<?= $user['id'] ?>">
			<div class="form-group">
				<label for="">Usernam: </label>
				<input type="text" name="username" placeholder="Sửa tên" class="form-group" value="<?= $user['username'] ?>"><br>
				<label for="">Avatar:</label>
				<?php if ($user['avatar']): ?>
					<img width="200" src="<?= $user['avatar'] ?>" alt="">
				<?php endif ?>
				<input type="file" name="avatar" class="form-control" value="<?= $user['avatar'] ?>"><br>
				<label for="">Email: </label>
				<input type="email" name="email" placeholder="Sửa email" class="form-group" value="<?= $user['email'] ?>"><br>
				<div class="form-group">
					<input type="submit" name="sua" value="Sửa">
					<input type="reset" value="Làm lại">
				</div>
			</div>
		</form>
		<div><a href="index.php">Quay lại</a></div>
	</div>
</body>
</html>