<?php 

if (isset($_GET['mouse'])) {
	$mouse = $_GET['mouse'];

	switch ($mouse) {
		case 'list':

		 require_once 'View/list.php';
		break;
		case 'addanh':
		if (isset($_POST['themanh'])) {
			$anh = $_FILES['anh'];
            $nameimg = "View/anh/".time().$anh['name'];
	        move_uploaded_file($anh['tmp_name'],$nameimg);
			$datanh = $db->InsertData($nameimg);
		}

		require_once 'View/addanh.php';
		break;
	}
}
 ?>