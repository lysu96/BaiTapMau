<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>List</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container">
		<?php 
		require_once 'Contraller/Xuly.php';
		foreach ($datanh as $value) { ?>
		<img src="<?php echo $value['img'] ?>;" alt="">
		<?php } ?>
	</div>
</body>
</html>