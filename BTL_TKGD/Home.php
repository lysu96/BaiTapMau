<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="Style.css">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>

<?php 
if (isset($_GET['action'])) {
	$action = $_GET['action'];
	
}else {
	$action = '';
}
switch ($action) {
		case 'GioiThieu':
		// code...
		break;

		default:
		require_once 'Controller/Xuly_page/handling_page.php';
		break;
	}
?>