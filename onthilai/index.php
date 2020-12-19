<?php 
require_once "Controller/xuly.php";
if (isset($_GET['action'])) {
	$action = $_GET['action'];
} else{
	$action = '';
}
switch ($action) {
	case 'add':
		$add = new Xuly();
		$add->Add();
		break;
	case 'edit':
		$edit = new Xuly();
		$edit->Edit();
		break;
	case 'list':
		$list = new Xuly();
		$list->List();
		break;
	
	default:
		$login = new Xuly();
		$login->Login();
		break;
}


 ?>