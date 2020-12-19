<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="Danhsach">
		<h1>Xin chào bạn mời bạn lựa chọn.!</h1>
		<a href="index.php?action=user&mouse" class="luachon">Danh mục thành viên</a>
		<a href="index.php?action=user&mouse=img" class="luachon">Danh mục Ảnh</a>
		<a href="index.php?action=user&mouse=me" class="luachon">Liên hệ</a>
	</div>
</body>
</html>
<?php 
require_once 'Model/DBFunction.php';
$db = new Processing();
$db -> connect();

	if (isset($_GET['action'])) {
		$action = $_GET['action'];

		switch ($action) {
			case 'user':
				require_once 'Contraller/Work-user/handling-user.php';
				break;
		}
	}
 ?>
