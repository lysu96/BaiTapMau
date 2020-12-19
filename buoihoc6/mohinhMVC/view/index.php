
 <!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>san pham</title>
		<link rel="stylesheet" href="">
		<style type="text/css">
			*{
				margin: 0px;
				padding: 0px;
			}
			.container{
				width: 803px;
				height: auto;
				margin: 0 auto;
				background: #fea;
				margin-top: 80px;
				border: 0.5px solid #000;
				padding-bottom: 5px;
			}
			.container h1{
				width: 802px;
				text-align: center;
				background: #0f0;
				margin-bottom: 30px;
				border: 0.5px solid #000;
				height: 40px;
				padding-top: 10px;
				color: #000;

			}
			table{
				width: 790px;
				margin-left: 5px;
			}
			
		</style>
	</head>
	<body>
		<div class="container">
			<table border="1px">
				<h1>Danh sách sản phẩm</h1>
				<thead>
					<tr>
						<th>Id</th>
						<th>Avatar</th>
						<th>Username</th>
						<th>Email</th>
						<th>Sửa</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($users as $value): ?>
					<tr>
						<td><?= $value->id ?></td>
						<td><img width="120px" src="<?= $value->avatar ?>" alt=""></td>
						<td><?= $value->username ?></td>
						<td><?= $value->email ?></td>
						<td><a href="edit.php?id=<?=$value['id']?> ">Sửa</a></td>
						<td><a href="delete.php?id=<?=$value['id']?>">Xóa</a></td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
			<a href="./users/create.php">Thêm sản phẩm</a>
		</div>
	</body>
	</html>