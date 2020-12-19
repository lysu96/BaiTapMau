<?php 
	
	class Usercontroler{
	    public function create(){
	  	  include "view/users/create.php";
		}
		public function save_user(){
			$username = $_post['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$avata = $_FILES['avata'];

			$user = new user();
			$user->username = $username;
			$user->email = $email;
			$user->password = $password;

			$filename = "";
			if ($avata['size'] > 0) {
				$filename = 'uploads/'.time().'-'.$avata['name'];
				move_uploaded_file($avata['tmp_name'], $filename);
			}
			$user->avata = $filename;
			$user->insert();
			header("location: index.php");
		}
	}

 ?>