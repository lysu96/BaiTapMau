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
    
    if (!$user) {
		echo "Nguoi dung khong ton tai <br>";
		echo "<a href='index.php'>Quay lại </a>";
		die;
	}
	$sql = "DELETE from users where id=$id";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	header("location:index.php");
 ?>