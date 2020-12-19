<?php 
require_once 'db.php';
$sql="SELECT * FROM users";
$stmt=$conn->prepare($sql);
$stmt->execute();
$users=$stmt->fetchAll();

// var_dump($users);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	
 </head>
 <body>
 	<div class="container">
 	<h1 class="text-center">Danh sách người dùng</h1>
 		<table class="table-bordered">
 			<thead>
 				<tr>
 					<!-- <th>#</th> -->
 					<th>id</th>
 					<th>Avatar</th>
 					<th>Username</th>
 					<th>Email</th>
 					<th>Password</th>
					<th><a href="create.php" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>Thêm mới</a></th>
 				</tr>
 			</thead>
			<tbody>
				<?php foreach ($users as $user): ?>
					<tr>
						<td><?= $user['id'] ?></td>
						<td>
							<a href="detail.php?id=<?= $user['id'] ?>">
								<img width="200px" src="<?=$user['avatar'] ?>" alt="">
							</a>
						</td>
						<td><?= $user['username'] ?></td>
						<td><?= $user['email'] ?></td>
						<td><?= $user['password'] ?></td>
						<td>
							<a href="edit.php?id=<?= $user['id'] ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>
							<a href="delete.php?id=<?= $user['id'] ?>" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>

 		</table>
 	</div>
 </body>
 </html>