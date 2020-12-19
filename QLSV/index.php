<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
</body>
</html>
<?php 
	require_once('Model/confing.php');
	$db = new Connection;
	$db->connect();

	if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else{
	$action = '';
}
switch ($action) {
	case 'thanh-vien':
		include_once 'Contraller/QLthanhvien/handLing.php';
		break;
	default:
	include_once 'Contraller/QLthanhvien/handLing.php';
	break;
}
 ?>