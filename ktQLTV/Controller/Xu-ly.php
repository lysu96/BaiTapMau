
<?php 
require 'Model/Function.php';
$db = new xuly();
$db -> connect();
if (isset($_GET['action'])) {
	$action = $_GET['action'];

	switch ($action) {
		case 'add':
			if (isset($_POST['addSach'])) {
				$maSach = $_POST['maSach'];
				$tenSach = $_POST['tenSach'];
				$loaiSach = $_POST['loaiSach'];
				$bangmuon = 'muon';
				$datasach = $db->getAllData($bangmuon);
			}
			$db->InsertData($tenSach, $maSach, $datasach);
			require 'View/add-tv.php';
			break;
		
		default:
			$data = $db ->getAllDatalist();
			require 'View/Home.php';
			break;
	}

}

 ?>