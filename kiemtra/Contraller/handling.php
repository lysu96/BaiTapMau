<?php 
	if (isset($_GET['action'])) {
		$action = $_GET['action'];

		switch ($action) {
			 case 'add':
				if (isset($_POST['add'])) {
					$error = array();
					if (empty($_POST['maSV'])) {
						$error['maSV'] = "* Bạn cần nhập mã sinh viên";
					} else{
						$maSV = $_POST['maSV'];
					}
					if (empty($_POST['tenSV'])) {
						$error['tenSV'] = "* Bạn cần nhập tên sinh viên";
					} else{
						$tenSV = $_POST['tenSV'];
					}
					if (empty($_POST['maLop'])) {
						$error['maLop'] = "* Bạn cần nhập mã lớp sinh viên";
					} else{
						$maLop = $_POST['maLop'];
					}
					if (empty($_POST['namSinh'])) {
						$error['namSinh'] = "* Bạn cần nhập nam Sinh sinh viên";
					} else{
						$namSinh = $_POST['namSinh'];
					}
					if (empty($_POST['gioiTinh'])) {
						$error['gioiTinh'] = "* Bạn cần chọn ảnh sinh viên";
					} else{
						$gioiTinh = $_POST["gioiTinh"];
					}
					if (empty($error)) {

						$themthanhcong[] = NULL;
						if ($db->InsertData($maSV, $tenSV, $maLop, $namSinh, $gioiTinh)) {
							$themthanhcong[] = 'thanh_cong';
						} else{
							$themthanhcong[] = 'kthanh_cong';
						}
					}

				}
				require_once 'View/add.php';
				break;
			case 'list':
				$data = $db-> getAllData();
				require_once 'View/list.php';
				break;
			case 'delete':
				
				break;
			default:
				// code...
				break;
		}
	}

 ?>