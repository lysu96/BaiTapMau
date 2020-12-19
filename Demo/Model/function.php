<?php 
/**
 * summary
 */
require_once 'Librory/confing.php';
class DataPro extends Database
{
    
    public function __construct()
    {
       parent:: connect(); 
    }


	// thực thi
    function execute($sql)
    {
    	$this->retuln = $this->conn->query($sql);
    	return $this->retuln;
    }
    //lấy dl
    function getData()
    {
    	if ($this->retuln) {
    		$data = mysqli_fetch_assoc($this->retul);
    	} else {
    		$data = 0;
    	}
    	return $data;
    }
    // lấy tat ca dl
    function getAllData($table)
    {
    	$sql = "SELECT * FROM $table";
    	$this->execute($sql);
    	if ($this->num_rows() == 0) {
    		$data = 0;
    	} else {
    		while ($datas = $this->getData()) {
    		    $data[] = $datas;
    		}
    	}
    	return $data;
    }
    // đến
    function num_rows()
    {
    	if ($this->retuln) {
    		$num = mysqli_num_rows($this->retuln);
    	} else {
    		$num = 0;
    	}
    	return $num;
    }
    // lấy dl sửa
    function getEditData($id,$table)
    {
    	$sql = "SELECT * FROM $table WHERE id = $id";
    	if ($this->num_rows() != 0) {
    		$data = $this->getData();
    	} else {
    		$data = 0;
    	}
    	return $data;
    }


}

 ?>