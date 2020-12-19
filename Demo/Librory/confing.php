<?php 
/**
 * summary
 */
class Database
{
    protected $conn = NULL;
    public $retuln = NULL;
    function connect()
    {
    	$this->conn = mysqli_connect('localhost','root','','demo_mvc');
    	if (!$this->conn) {
    		echo "kết nối thất bại";
    	} else {
    		mysqli_set_charset($this->conn,'utf8');

    	}
    	return $this->conn;
    }
}


 ?>