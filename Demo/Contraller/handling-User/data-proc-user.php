<?php 
if (isset($_GET['action'])) {
	$action = $_GET['action'];

	switch ($action) {
		case 'add':
				
				break;
			case 'edit':
				
				break;
			case 'list':
				require_once 'View/User/list_user.php';
				break;
			case 'delete':
				
				break;
			
			default:
				require_once 'View/Page/home.php';
				break;
	}
}


 ?>