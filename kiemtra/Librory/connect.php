<?php 
class Database
{
	protected $conn = NULL;
	public function connect()
	{
		$this->conn = mysqli_connect('localhost', 'root', '','quanly_sv');
		if (!$this->conn) {
			echo "kết nối thất bại";
		} else{
			mysqli_set_charset($this->conn, 'utf8');
			// echo "ket noi thanh cong";
		}
		return $this->conn;
	}
}


 ?>