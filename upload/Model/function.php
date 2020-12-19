<?php 
 
  require_once 'Librory/connect.php';
  class Anh extends Database
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
    public function InsertData($img){
      $sql = "INSERT INTO `anh`(`img`) VALUES ('$img')";
      $this->execute($sql);

    }

  }

 ?>