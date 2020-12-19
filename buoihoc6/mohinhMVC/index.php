<?php 
	$url = isset($_GET['url']) == true ? $_GET('url'):"/";
	require_once 'controler/Home_controler.php';
	switch ($url) {
		case '/':
			$ctl = new homeControler();
			$ctl->index();
			break;
		case 'controler':
			$ctl = new homeControler();
			$ctl->index();
			break;
		case 'controler/user_controler':
			$ctl = new Usercontroler();
			$ctl->save_user();
			break;
		
		default:
			include_once 'view/not_found.php';
			break;
	}

 ?>