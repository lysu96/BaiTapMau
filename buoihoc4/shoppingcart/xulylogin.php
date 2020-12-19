<?php 
	$username = $_POST['form-username'];
	$password = $_POST['form-password'];
	if ($username == 'admin' && $password == '123') {
		session_start();
		$_SESSION['user_name'] = $username;
		header("Location:index.php");
	}
	else {
		header("Location:login.php");
	}
 ?>