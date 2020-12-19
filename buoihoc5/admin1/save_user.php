<?php 
	require_once 'db.php';
	$username = $_POST['username'];
	$email = $_POST['email'];
	$avatar = $_FILES['avatar'];
	$password = $_POST['password'];
	$fileName = null;
	if ($avatar['size']>0) {
		$fileName = 'upload/'.time()."-".$avatar['name'];
		move_uploaded_file($avatar['tmp_name'], $fileName);
}
	$sql = "INSERT INTO users(username, email, password, avatar) VALUES (:username,:email,:password, :avatar)";
	$stmt=$conn->prepare($sql);
	$stmt->bindValue(':username',$username);
	$stmt->bindValue(':email',$email);
	$stmt->bindValue(':password',sha1($password));
	$stmt->bindValue(':avatar',$fileName);
	$stmt->execute();
	header("location:index.php");

 ?>