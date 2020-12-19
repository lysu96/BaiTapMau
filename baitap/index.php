<?php
	$serverName="localhost";
	$userName="root";
	$password="";
	$dbName="project_sp";
	try{
		$ketnoi = new PDO("mysql:host=$serverName; dbname=$dbName; charset=utf8",$userName,$password);
	}catch(PDOException $e){
		var_dump($e->getMessage());
		die;
	}

	$sql="SELECT * FROM tb1_sanpham";
	$stmt=$ketnoi->prepare($sql);
	$stmt->execute();
	$tb1_sanpham=$stmt->fetchAll();

	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>bai tap</title>
	<link rel="stylesheet" href="">
	<style>
		*{
			padding: 0px;
			margin: 0px;
		}
		.container{
			padding: 0px;
			margin: 0 auto;
			width:500px;
			height: auto;
			border: 1px solid #000000;
		}
		h3{
			background: #0099ff;
			color: #ffffff;
			padding: 5px;
			text-align: center;
		}
		input{
			font-size: 16px;
			border-radius: 5px;
			margin-top: 10px;
			margin-left: 200px;
			margin-bottom: 10px;
			background: #6600ff;
			color: #ffffff;
		}
		input:hover{
			background: #33ff33;
			color: #000000;
		}
	</style>
</head>
<body>
	<div class="container">
		<h3>Danh sách sản phẩm</h3>
		<table>
			<tr>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Nhà sản xuất</th>
				<th>Màu sắc</th>
				<th>Sửa</th>
				<th>Xóa</th>
			</tr>
			<tbody>
				<?php foreach($tb1_sanpham as $sanpham): ?>
				<tr>
					<td><?=$sanpham['id']?></td>
					<td><?=$sanpham['ten_sp']?></td>
					<td><?=$sanpham['ten_nhasx']?></td>
					<td><?=$sanpham['mausac']?></td>
					<a href="#">
						<td>Sửa</td>
					</a>
					<a href="#">
						<td>Xóa</td>
					</a>
				</tr>
			<?php endforeach ?>
			</tbody>
		</table>
		<a href="themsp.php"><input type="button" value="Thêm Sản phẩm"></a>
	</div>
</body>
</html>