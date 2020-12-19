
<?php 
require_once 'Model/function.php';
$db = new xuly();
$db -> connect();
if (isset($_GET['action'])) {
	$action = $_GET['action'];

	switch ($action) {
	case 'add':
		require 'View/add.php';
		break;
	case 'edit':
		require 'View/edit.php';
		break;
	default:
		require 'View/list.php';
		break;
	}
}



 ?>