<?php 
	require_once 'index.php';
	$sql="SELECT * FROM tb1_sanpham";
	$stmt=$ketnoi->prepare($sql);
	$stmt->execute();
	$users=$stmt->fetchAll();
 ?>