<?php 
  /**
   * 
   */
  require_once 'Librory/DBConfing.php';
  class Processing extends Database
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

    public function getEditData($id, $table)
    {
      $sql = "SELECT * FROM `tbl_student` WHERE id = $id";
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

    public function InsertData($maSV, $tenSV, $namSinh, $lop, $avata)
    {

      $sql = "INSERT INTO `tbl_student`(`id`, `maSV`, `tenSV`, `namSinh`, `lop`, `img`) VALUES (NULL, '$maSV', '$tenSV', '$namSinh', '$lop', '$avata')";
      return $this->execute($sql);
    }

    public function Delete($id, $table)
    {
      $sql = "DELETE FROM `tbl_student` WHERE id = $id";
      return $this->execute($sql);
    }

    public function Editdata($id, $maSV, $tenSV, $namSinh, $lop, $avata)
    {
      $sql = "UPDATE `tbl_student` SET `maSV`='$maSV',`tenSV`='$tenSV',`namSinh`='$namSinh',`lop`='$lop',`img`='$avata' WHERE id = $id";
      return $this->execute($sql);
    }



  }

 ?>