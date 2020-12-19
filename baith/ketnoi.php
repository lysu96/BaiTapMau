<?php 
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "quanlysanpham";
	try{
		$row = new PDO("mysql:host=$serverName; dbname=$dbName;charset=utf8",$userName,$password);
	}
	catch(PDOException $e){
		var_dump($e->getMessage());
		die;
	}
 ?>