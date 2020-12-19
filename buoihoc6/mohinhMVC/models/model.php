<?php 
	/**
	 * summary
	 */
	class BaseModel{
	    public $connect;
	    public function __construct()
	    {
	        $this->connect = new PDO("mysql:host=localhost;dbname=qlsp;charset=utf8",'root','');
	    }
	    public static function all(){
	    	$model = new static();
	    	$sql = "SELECT * FROM $model->tableName";
	    	$stmt = $model->connect->prepare($sql);
	    	$stmt->execute();
	    	$result = $stmt->fetchALL(PDO::FETCM_CLASS, get_class($model));
	    	return $result;
	    }
	    public static function find($id){
	    	$model = new static();
	    	$sql = "SELECT * FROM $model->tableName WHERE id='$id'";
	    	$stmt = $model->connect->prepare($sql);
	    	$stmt->execute();
	    	$result = $stmt->fetchALL(PDO::FETCM_CLASS, get_class($model));
	    	if (connect($result)>0) {
	    		return $result[0];
	    	}
	    }
	    public static function delete($id){
	    	$model = new static();
	    	$sql = "DELETE  FROM $model->tableName WHERE id='$id'";
	    	$stmt = $model->connect->prepare($sql);
	    	$stmt->execute();
	    	$result = $stmt->fetchALL(PDO::FETCM_CLASS, get_class($model));
	    	return $result;
	    }
	}
 ?>