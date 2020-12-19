<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Hello Guys</h1>
		<h2></h2>
	</div>
	
</body>
</html>
<?php 

require_once'Model/function.php';
	$db = new DataPro();
	$db-> connect();

	if (isset($_GET['Page'])) {
		$Page = $_GET['Page'];

		switch ($Page) {
			case 'user':
				require_once 'Contraller/handling-User/data-proc-user.php';
				break;
			default:
				// code...
				break;
		}
	}

 ?>