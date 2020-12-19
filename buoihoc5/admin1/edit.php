<?php 
	require_once 'db.php';
	$id = isset($_GET['id']) == true ? $_GET['id']:null;
	if ($id == null) {
		echo "Không tìm thấy dữ liệu <br>";
		echo "<a href='index.php'>Quay lại </a>";
		die;
	}
	$sql = "SELECT * FROM users WHERE id=$id";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$user = $stmt->fetch();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 </head>
 <body>
 	<div class="container">
		<h1 class="text-center">Sửa thông tin người dùng</h1>
		<form action="save_update_user.php" method="post" enctype="multipart/form-data">

		<input type="hidden" name="id" value="<?= $user['id'] ?>">

			<div class="form-group">
				<label for="">Username:</label>
				<input type="text" name="username" placeholder="moi ban nhap ten..." class="form-control" value="<?= $user['username'] ?>">
			</div>

			<div class="form-group">
				<label for="">Avatar:</label>
				<?php if ($user['avatar']): ?>
					<img width="200" src="<?= $user['avatar'] ?>" alt="">
				<?php endif ?>
				<input type="file" name="avatar" class="form-control" value="<?= $user['avatar'] ?>">
			</div>

			<div class="form-group">
				<label for="">Email:</label>
				<input type="text" name="email" placeholder="moi ban nhap email..." class="form-control" value="<?= $user['email'] ?>">
			</div>
			
			<div class="form-group">
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>&nbspThêm mới</button>
			</div>
		</form>
	</div>
 </body>
 </html>