<?php
	require_once 'ketnoi.php'; 
	$id = isset($_GET['id_sp']) == true ? $_GET['id_sp']:null;
	if ($id == null) {
		echo "không tìm thấy dữ liệu<br>";
		echo "<a href='index.php'>Quay lại danh sách sản phẩm</a>";
		die;
	}

	$sql = "SELECT * FROM tbl_sanpham, tbl_nhasx WHERE tbl_sanpham.ma_nhasx = tbl_nhasx.ma_nhasx AND id_sp = $id";
	$stmt = $row -> prepare($sql);
	$stmt->execute();
	$result = $stmt->fetch();
	if (!$result) {
		echo "Thông tin không tồn tại<br>";
		echo "<a href='index.php'>Quay lại danh sách sản phẩm</a>";
		die;
	}
	$sql = "DELETE FROM tbl_sanpham, tbl_nhasx WHERE tbl_sanpham.ma_nhasx = tbl_nhasx.ma_nhasx AND id_sp = $id";
	$stmt = $row -> prepare($sql);
	$stmt -> execute();
	header("location:index.php");
 ?>