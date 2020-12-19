<p>function</p>
<?php 

class Connect
{
	private $conn;
	function __construct()
	{
		$this->conn = new PDO("mysql:host=localhost;dbname=sv;charset=utf8;","root","");
	}
	public function Hien()
	{
		$sql = "SELECT * FROM sinhvien, lop WHERE sinhvien.ma_lop=lop.ma_lop";
		$result = $this->conn->query($sql);
		$stm->execute($result);
		$stm->fetch();
	}
	public function D_nhap($name_user, $user_pass)
	{
		$sql = "SELECT * FROM user WHERE ten_user = $name_user AND password = $user_pass ";
		$result = $this->conn->query($sql);
		$stm->execute($result);
		$stm->fetch();
	}
	public function D_xuat()
	{
		
	}
}

 ?>