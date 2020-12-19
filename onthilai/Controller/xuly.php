<p>xuly</p>
<?php 
require_once "Model/function.php";

class Xuly extends Connect
{
	
	public function List()
	{
		require_once "View/list.php";
	}
	public function Login()
	{
		$db = new static();
		if (isset($_GET['dang_nhap'])) {
			$name_user = $_GET['name_user'];
			$user_pass = $_GET['user_pass'];
			$ten_user = $db->D_nhap();
			$password = $db->D_nhap();
			

			if ($ten_user == $ten_user && $user_pass == $password) {
				header('location:index.php?action=list');
			}
			require_once "View/login.php";
		}
		// require_once "View/login.php";
	}
	public function Add()
	{
		require_once "View/add.php";
	}
	public function Edit()
	{
		require_once "View/edit.php";
	}
	public function Layout()
	{
		require_once "";
	}

}

 ?>