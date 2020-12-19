<?php 
require_once 'db.php';
$id = isset($_GET['id']) == true ? $_GET['id']:null;
if ($id == null) {
	echo "không tìm thấy dữ liệu <br>";
	echo "<a href='index.php'> Quay lại </a>";
	die;
}
$sql = "SELECT * FROM users WHERE id=$id";
$stmt = $ketnoi->prepare($sql);
$stmt->execute();
$users = $stmt->fectch();

if (!$users) {
	echo "người dùng không tồn tại <br>";
	echo "<a href='index.php'>Quay lại </a>";
	die;
}
$sql = "DELETE FROM users WHERE id=$id";
$stmt = $ketnoi->prepare($sql);
$stmt->execute();
header("location:/index.php");
 ?>