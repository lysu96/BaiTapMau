<?php 
require_once 'db.php';
$id = $_POST['id'];
$username = $_POST['username'];
$avatar = $_FILE['avatar'];
$email = $_POST['email'];

$sql = "SELECT * FROM users WHERE id=:id";
$stmt = $conn->prepare($sql);
$stmt->bindValue(':id',$id);
$stmt->execute();
$user = $stmt->fetch();
if (!$user) {
		echo "Không tìm thấy dữ liệu <br>";
		echo "<a href='index.php'>Quay lại </a>";
		die;
	}
$sql = "UPDATE users SET username=:username,email=:email";
$fileName = null;
if ($avatar['size']>0) {
	$fileName = 'admin1/upload/'.time()."-".$avatar['name'];
}
if (move_uploaded_file($avatar['tmt_name'], $fileName)) {
	$sql.=",avatar=:avatar ";
} else {
	$fileName=null;
	}

$sql.="WHERE id=:id";
$stmt=$conn->prepare($sql);
$stmt->bindValue(':id',$id);
$stmt->bindValue(':username',$username);
if ($avatar['size']>0) {
	$stmt->bindValue(':avatar',$fileName);
}

$stmt->bindValue(':email',$email);
$stmt->execute();
header("location:index.php");

 ?>