<?php 
	$username = isset($_POST["username"]);
	$password = isset($_POST["password"]);

	if ($username == "admin" && $password == "123") {
		header("location:index.php");
	} else {
		header("location:login.php");
	}
 ?>