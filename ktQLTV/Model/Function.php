<?php 
  /**
   * 
   */
  require_once 'Librory/Connet.php';
  class xuly extends Database
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

    public function getAllDatalist()
    {
      $sql = "SELECT * FROM sach WHERE maSach IN (SELECT maSach FROM muon)";
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
      $sql = "SELECT * FROM $table WHERE id = $id";
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

    public function InsertData($tenSach, $maSach, $loaiSach)
    {

      $sql = "INSERT INTO `sach`(`id`, `tenSach`, `maSach`, `loaiSach`) VALUES (NULL, '$tenSach', '$maSach', '$loaiSach')";
      return $this->execute($sql);
    }



  }

 ?>