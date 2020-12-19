<?php 
	require_once 'model.php';
	require_once 'user.php';


	class user extends BaseModel
	{
	    public $tableName = 'post';
	    public $columns = ['id','title','descrition','author'];
	}
 ?>