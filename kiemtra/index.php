<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>index</title>
	<link rel="stylesheet" href="css.css">
</head>
<body>
	
</body>
</html>
<?php 

require_once'Model/function.php';
	$db = new QLSV();
	$db-> connect();

	if (isset($_GET['SinhVien'])) {
		$SinhVien = $_GET['SinhVien'];

		switch ($SinhVien) {
			case 'sv':
				require_once 'Contraller/handling.php';
				break;
			default:
				// code...
				break;
		}
		
	}

 ?>