<?php 
if (isset($_GET['mouse'])) {
	$mouse = $_GET['mouse'];

	switch ($mouse) {

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
				if (empty($_POST['namSinh'])) {
					$error['namSinh'] = "* Bạn cần nhập nam Sinh sinh viên";
				} else{
					$namSinh = $_POST['namSinh'];
				}
				if (empty($_POST['ngayNSX'])) {
					$error['ngayNSX'] = "* Bạn cần nhập lớp sinh viên";
				} else{
					$ngayNSX = $_POST['ngayNSX'];
				}
				if (empty($_FILES['avata'])) {
					$error['avata'] = "* Bạn cần chọn ảnh sinh viên";
				} else{
					$avata = $_FILES["avata"]["name"];
				}
				if (empty($error)) {
					move_uploaded_file($_FILES["avata"]["tmp_name"], "View/Img/img-Idol/". $avata);

					$themthanhcong[] = NULL;
					if ($db->InsertData($maSV, $tenSV, $namSinh, $ngayNSX, $avata)) {
						$themthanhcong[] = 'thanh_cong';
					} else{
						$themthanhcong[] = 'kthanh_cong';
					}
				}
	
			}
			require_once 'View/User/add-user.php';
			break;

		case 'edit':
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$tblTable = "tbl_student";
				$hienthi = $db->getEditData($id, $tblTable);

				if (isset($_POST['update'])) {
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
					if (empty($_POST['namSinh'])) {
						$error['namSinh'] = "* Bạn cần nhập nam Sinh sinh viên";
					} else{
						$namSinh = $_POST['namSinh'];
					}
					if (empty($_POST['ngayNSX'])) {
						$error['ngayNSX'] = "* Bạn cần nhập lớp sinh viên";
					} else{
						$ngayNSX = $_POST['ngayNSX'];
					}
					if (empty($_FILES['avata'])) {
						$error['avata'] = "* Bạn cần chọn ảnh sinh viên";
					} else{
						$avata = $_FILES["avata"]["name"];
					}
					if (empty($error)) {
						move_uploaded_file($_FILES["avata"]["tmp_name"], "View/Img/img-Idol/". $avata);

						$themthanhcong[] = NULL;
						if ($db->Editdata($id, $maSV, $tenSV, $namSinh, $ngayNSX, $avata)) {
							$themthanhcong[] = 'thanh_cong';
						} else{
							$themthanhcong[] = 'kthanh_cong';
						}
					}
	
				}
			}
			require_once 'View/User/edit-user.php';
			break;

		case 'list':
			$tblTable = "tbl_student";
			$dataar = $db->getAlldata($tblTable);
			require_once 'View/User/list-user.php';
			break;
		case 'Delete':
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$tblTable = "tbl_student";

				if ($db-> Delete($id, $tblTable)) {
					header('location:index.php?action=user&mouse');
				} else{
					header('location:index.php?action=user&mouse=list');
				}
			}
			break;

		case 'img':
			$tblTable = "tbl_student";
			$anh = $db->getAlldata($tblTable);
			require_once 'View/Page/img-idol.php';
			break;

		case 'me':
			require_once 'View/Page/me.php';
			break;

		default:
			$tblTable = "tbl_student";
			$danhSachSV = $db->getAlldata($tblTable);
			require_once 'View/Page/home.php';
			break;
	}
}

?>