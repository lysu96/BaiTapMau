<?php 

if (isset($_GET['page'])) {
	$page = $_GET['page'];

	
}else {
	$page = '';
}
switch ($page) {
		case 'Home':
			require_once 'View/Page/trangchu.php';
			break;
		
		default:
			require_once 'View/Page/index.php';
			break;
	}

 ?>