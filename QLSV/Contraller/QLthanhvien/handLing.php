<?php 
	if (isset($_GET['mouse'])) {
		$mouse = $_GET['mouse'];
	} else{
		$mouse = '';
	}

	$thanhcong = array();
	$khongthanhcong = array();

	switch ($mouse) {
		case 'addSV':
			if (isset($_POST['addSV'])) {
				$maSV = $_POST['maSV'];
				$tenSV = $_POST['tenSV'];
				$gioiTinh = $_POST['gioiTinh'];
				$namSinh = $_POST['namSinh'];
				$maLop = $_POST['maLop'];


				if($db->InsertData($maSV, $tenSV, $gioiTinh, $namSinh, $maLop)){
					$thanhcong[] = 'add_success';
				}
			}
			include_once 'views/Thanhvien/addSV.php';
			break;
		case 'editSV':
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$tblTable = "sinhvien";
				$dataEdit = $db-> getDataEdit($id,$tblTable);

				if (isset($_POST['Edit'])) {
					$maSV = $_POST['maSV'];
					$tenSV = $_POST['tenSV'];
					$gioiTinh = $_POST['gioiTinh'];
					$namSinh = $_POST['namSinh'];
					$maLop = $_POST['maLop'];

					if($db->UpdateData($id, $maSV, $tenSV, $gioiTinh, $namSinh, $maLop)){
						header('location:index.php?action=thanh-vien&mouse=');
					}
				}

			}
			include_once 'views/Thanhvien/editSV.php';
			break;
		case 'delete':
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$tblTable = "sinhvien";
				
				if ($db-> Delete($id, $tblTable)) {
					header('location:index.php?action=thanh-vien&mouse');
				}
			} else{
				header('location:index.php?action=thanh-vien&mouse');
			}
			break;
		default:
			$tblTable = "sinhvien";
			$data = $db-> getAllData($tblTable);
			include_once 'views/Thanhvien/listSV.php';
			break;
	}
 ?>

