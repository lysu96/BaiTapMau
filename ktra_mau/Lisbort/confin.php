<?php 
/**
 * 
 */
class Database
{
	
	private $conn = null;

	public function connect()
	{
		$conn = mysqli_connect("localhost","root","","qlsinhvien");
		if (!$conn) {
			echo "ket noi that bai";
		} else{
			echo "ket noi thanh cong";
			mysqli_set_charset($conn,"utf8")
		}
		return $conn;
	}
}

 ?>