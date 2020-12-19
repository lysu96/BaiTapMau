<?php 
/**
 * kết nối database
 */
class Database
{
	protected $conn = NULL;
	public function connect()
	{
		$this->conn = mysqli_connect('localhost', 'root', '','proiect_student');
		if (!$this->conn) {
			echo "kết nối thất bại";
		} else{
			mysqli_set_charset($this->conn, 'utf8');
		}
		return $this->conn;
	}
}

?>