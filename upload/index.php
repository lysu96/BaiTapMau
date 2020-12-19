
<?php 
require_once 'Model/function.php';
$db = new Anh();
$db -> connect();
	if (isset($_GET['action'])) {
		$action = $_GET['action'];

		switch ($action) {
			case 'anh':
				require_once 'Contraller/Xuly.php';
				break;
			default:
			break;
		}
	}
 ?>