<?php 
 
  require_once 'Librory/connect.php';
  class QLSV extends Database
  {
  	
  	function __construct()
  	{
  		parent:: connect();
  	}

  	private $reult = NULL;

  	public function execute($sql)
  	{
  		$this->reult = $this->conn->query($sql);
  		return $this->reult;
  	}

  	public function getData()
  	{
  		if ($this->reult) {
  			$data = mysqli_fetch_assoc($this->reult);
  		} else{
  			$data = 0;
  		}
  		return $data;

  	}

  	public function getAllData()
    {
      $sql = "SELECT * FROM sv, lop WHERE sv.maLop = lop.maLop";
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

    public function getEditData($id, $table)
    {
      $sql = "";
      $this->execute($sql);
      if ($this->num_rows() != 0) {
        $data = $this->getData($this->reult);
      } else{
        $data = 0;
      }
      return $data;
    }

    public function num_rows()
    {
      if ($this->reult) {
        $num = mysqli_num_rows($this->reult);
      } else{
        $num = 0;
      }
      return $num;
    }

    public function InsertData($maSV, $tenSV, $maLop, $namSinh, $gioiTinh)
    {

      $sql = "INSERT INTO `sv`(`id`, `maSV`, `tenSV`, `maLop`, `namSinh`, `gioiTinh`) VALUES (NULL,'$maSV','$tenSV','maLop','$namSinh','$gioiTinh')";
      return $this->execute($sql);
    }

    public function Delete($id)
    {
    	$sql = "DELETE FROM `sv` WHERE id = $id ";
    	return $this->execute($sql);
    }


  }

 ?>