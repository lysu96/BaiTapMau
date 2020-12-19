<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>them san pham</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		*{
			padding: 0px;
			margin: 0px;
		}
		.cotraiter{
			width: 500px;
			height: auto;
			border: 1px solid #000000;
			margin: 0 auto;
		}
		h1{
			background: #0099ff;
			color: #ffffff;
			text-align: center;
		}
		form{
			margin-top:10px;
		}
		label{
			margin: 10px;
		}
		input{
			padding: 5px;
			margin: 5px;
		}
		.them{
			border-radius: 5px;
			background: ;
		}
		.huy{
			border-radius: 5px;
			background: ;
		}
		.them:hover{
			background: ;
			color: ;
		}
		.huy:hover{
			background: ;
			color: ;
		}
	</style>
</head>
<body>
	<div class="cotraiter">
		<h1>Thêm Sản Phẩm</h1>
		<form action="" method="post">
			<label for="">Mã sản phẩm:</label>
			<input type="text" name="ma_sp"><br>
			<label for="">Tên sản phẩm:</label>
			<input type="text" name="ten_sp"><br>
			<label for="">Mã nhà sản xuất:</label>
			<input type="text" name="ma_nhasx"><br>
			<label for="">Tên nhà sản xuất:</label>
			<input type="text" name="ten_nhasx"><br>
			<label for="">Màu sắc:</label>
			<input type="checkbox" >Trắng
			<input type="checkbox" >Đen
			<input type="checkbox" >Hồng
			<input type="checkbox" >Vàng<br>
			<input type="button" name="them" value="Thêm" class="them">
			<input type="reset" value="Hủy" class="huy">

		</form>
	</div>
</body>
</html>