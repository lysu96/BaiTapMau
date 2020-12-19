<?php 
class SanPham
{
	protected $conn = NULL;
	public function connect()
	{
		$this->conn = mysqli_connect('localhost', 'root', '','quanly_sanpham');
		if (!$this->conn) {
			echo "kết nối thất bại";
		} else{
			mysqli_set_charset($this->conn, 'utf8');
			// echo "kết nối thành công";
		}
		return $this->conn;
	}
}

?>