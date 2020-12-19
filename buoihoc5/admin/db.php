<?php 
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "qlsp";

// kết nối với mysql
try{
	$ketnoi = new PDO("mysql:host=$serverName; dbname=$dbName; chaset=utf8",$userName,$password);
}
catch(PDOException $e){
	var_dump($e->getMessage());
	die;
}

 ?>