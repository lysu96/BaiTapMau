<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	
</body>
</html>
<?php 
if (isset($_GET['action'])) {
		$action = $_GET['action'];

		switch ($action) {
			case 'sanpham':
				require_once 'Contraller/xuly_sp.php';
				break;
			
		}
	}

?>