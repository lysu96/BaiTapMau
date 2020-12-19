<?php 
class Connection{
	private $hostname = 'localhost';
	private $username = 'root';
	private $password = '';
	private $database = 'ql_sv';

	protected $connection = null;
	private $result = null;

	public function connect(){
		if (!isset($this->connection)) {
			$this->connection = new mysqli($this->hostname,$this->username,$this->password,$this->database);
			if (!$this->connection) {
				echo "kết nối thất bại..!";
				exit();
			} else{
				mysqli_set_charset($this->connection,'utf8');
			}
		}
		return $this->connection;
	}

//phương thức thực thi truy vấn
	public function execute($sql){
		$this->result = $this->connection->query($sql);
		return $this->result;
	}

// phương thức lấy dữ liệu từ CSDL;
	public function getData(){
		if ($this->result) {
			$data = mysqli_fetch_array($this->result);
		} else{
			$data = 0;
		}
		return $data;
	}

//phương thức lấy toàn bộ dữ liệu từ csdl
	public function getAllData($table)
	{
		$sql = "SELECT * FROM $table";
		$this->execute($sql);
		if ($this->num_rows() == 0) {
			$data = 0;
		} else{
			while ($datas = $this->getData()) {
				$data[] = $datas;
			}
		}
		return $data;
	}
	//phương thức lấy  liệu can sua
	public function getDataEdit($id,$table)
	{
		$sql = "SELECT * FROM $table WHERE id = $id";
		$this->execute($sql);
		if ($this->num_rows() != 0) {
			$data = mysqli_fetch_array($this->result);
		} else{
			$data = 0;
		}
		return $data;
	}
// đến số lượng bảng ghi
	public function num_rows()
	{
		if ($this->result) {
			$num = mysqli_num_rows($this->result);
		} else{
			$num = 0;
		}
		return $num;
	}

// phương thức thêm dl
	public function InsertData($maSV, $tenSV, $gioiTinh, $namSinh, $maLop){
		$sql = "INSERT INTO sinhvien (id, maSV, tenSV, gioiTinh, namSinh, maLop) VALUES (NULL,'$maSV','$tenSV','$gioiTinh','$namSinh','$maLop')";
		return $this->execute($sql);
	}

//phương thức sửa dl
	public function UpdateData($id, $maSV, $tenSV, $gioiTinh, $namSinh, $maLop)
	{
		$sql = "UPDATE sinhvien SET maSV='$maSV', tenSV='$tenSV', gioiTinh='$gioiTinh', namSinh='$namSinh', maLop='$maLop' WHERE id=$id";
		return $this-> execute($sql);
	}
// phương thức xóa
	public function Delete($id, $table)
	{
		$sql = "DELETE  FROM sinhvien WHERE id = $id";
		return $this-> execute($sql);
	}
// khắc phục lỗi cú pháp
	public function escape_string($value){
		return $this->connection->real_escape_string($value);
	}

}

?>