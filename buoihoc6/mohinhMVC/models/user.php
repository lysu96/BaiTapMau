<?php 
	require_once 'model.php';

	
	class user extends BaseModel{
	    public $tableName = 'users';
	    public $columns = ['id','username','email','password','avata'];
	}
 ?>