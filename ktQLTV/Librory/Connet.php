<?php 

class Database
{
    
   protected $conn = NULL;
	public function connect()
	{
		$this->conn = mysqli_connect('localhost', 'root', '','qltv');
		if (!$this->conn) {
			echo "kết nối thất bại";
		} else{
			// echo "thanh cong";
			mysqli_set_charset($this->conn, 'utf8');
		}
		return $this->conn;
	}

}

 ?>