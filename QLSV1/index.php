<?php 
require_once "Controller/Controller.php";
$server=$_GET["server"];
switch ($server) {
	case 'Hienthisinhvien':
		$index=new Controller();
		$index->HienThi();
		break;
	case 'Dangnhap':
		$index=new Controller();
		$index->DangNhap();
		break;
	case 'Sua':
		$index=new Controller();
		$index->Sua();
		break;
	case 'Dangxuat':
		$index=new Controller();
		$index->DX();
		break;
	default:
		break;
}
 ?>