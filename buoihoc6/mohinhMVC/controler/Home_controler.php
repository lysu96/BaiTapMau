<?php 
	require_once 'models/user.php';

	class homeControler{
	    
	    public function index(){
	        $users = user::all();
	        include "view/index.php";
	    }
	}

 ?>