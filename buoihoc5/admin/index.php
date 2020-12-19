<?php 
require_once'db.php';
//truy vấn sql
$sql = "SELECT * FROM users";
$stmt = $ketnoi->prepare($sql);
$stmt->execute();
$users = $stmt->fetchAll();

 // var_dump($users);
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		*{
			margin: 0px;
			padding: 0px;
		}
		.container{
			border: 1px solid #000;
			width: 700px;
			margin: 0 auto;
			margin-top:30px;
		}
		.container h1{
			background: #0066ff;
			padding: 5px;
			color: #fff;
			text-align: center;
		}
		.container h1:hover{
			background: #00ff66;
			color: #000;
		}
		.container table{
			margin: 10px auto;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1 class="text-center">Danh sách người dùng</h1>
		<table class="table-bordered">
			<thead>
				<tr>
					
					<th>id</th>
					<th>username</th>
					<th>email</th>
					<th>passwrod</th>
					<th>Avatar</th>
					<th><a href="crete.php" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Thêm Mới</a></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $users): ?>
					<tr>
						<td><?= $users['id'] ?></td>
						<td><?= $users['username'] ?></td>
						<td><?= $users['email'] ?></td>
						<td><?= $users['password'] ?></td>
						<td><?= $users['avatar'] ?></td>
						<td>
							<a href="edit.php?id=<?=$users['id'] ?>" class="">Sửa</a>
							<a href="delete.php?id=<?=$users['id'] ?>" class="">xóa</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>