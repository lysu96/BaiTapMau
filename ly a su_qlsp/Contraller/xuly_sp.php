<?php 
require_once 'Model/function.php';
$db = new xulySP();
$db -> connect();


if (isset($_GET['xlsp'])) {
		$xlsp = $_GET['xlsp'];

		switch ($xlsp) {
			case 'add':
			if (isset($_POST['add'])) {
				$error = array();
				if (empty($_POST['maSP'])) {
					$error['maSP'] = "* Bạn cần nhập mã sản phẩm";
				} else{
					$maSP = $_POST['maSP'];
				}
				if (empty($_POST['tenSP'])) {
					$error['tenSP'] = "* Bạn cần nhập tên sản phẩm";
				} else{
					$tenSP = $_POST['tenSP'];
				}
				
				if (empty($_POST['maNSX'])) {
					$error['maNSX'] = "* Bạn cần chọn tên nhà sản xuất";
				} else{
					$maNSX = $_POST['maNSX'];
				}
				if (empty($_FILES['anh'])) {
					$error['anh'] = "* Bạn cần chọn ảnh sảm phẩm";
				} else{
					$anh = $_FILES["anh"]["name"];
				}
				if (empty($error)) {
					move_uploaded_file($_FILES["anh"]["tmp_name"], "View/img/". $anh);

					$thanhcong[] = NULL;
					$tblTable = "tb_sanpham";
					if ($db->InsertData($tblTable, $maSP, $tenSP, $maNSX, $anh)) {
						$thanhcong[] = 'thanh_cong';
					} else{
						$thanhcong[] = 'kthanh_cong';
					}
				}
			}
				
				$tblTables = "tb_nhasx";
				$datas = $db->getAlldata($tblTables);
				require_once 'View/add_sp.php';
				break;
			case 'list':
				$datas = $db->getAlldatass();
				require_once 'View/list_sp.php';
				break;
			case 'xoa':
				$tblTable = "tb_sanpham";
				if (isset($_GET['id'])) {
					$id = $_GET['id'];
				}
				if ($db->Delete($id, $tblTable)) {
					header('location:index.php?action=sanpham&xlsp=list');
				} else {
					echo "xóa thất bại";
					header('location:index.php?action=sanpham&xlsp=list');
				}
				break;
		}
	}
 ?>