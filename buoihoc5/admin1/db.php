<?php 
	$serverName = "localhost";
	$userName = "root";
	$password = "";
	$dbName = "qlsp";
	try{
		$conn = new PDO("mysql:host=$serverName; dbname=$dbName;charset=utf8",$userName,$password);
	}
	catch(PDOException $e){
		var_dump($e->getMessage());
		die;
	}
// var_dump($conn);
 ?>