<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>sách</title>
		<link rel="stylesheet" href="">
		<style>
			*{
				margin: 0px;
				padding: 0px;
			}
			.them{
				width: 803px;
				height: auto;
				margin: 0 auto;
				background: #fea;
				margin-top: 80px;
				border: 0.5px solid #000;
				padding-bottom: 5px;
			}
			.them h1{
				width: 802px;
				text-align: center;
				background: #0f0;
				margin-bottom: 30px;
				border: 0.5px solid #000;
				height: 40px;
				padding-top: 10px;
				color: #000;

			}
			.them input{
				margin:5px 5px;
			}
			table{
				width: 790px;
				margin-left: 5px;
			}
		</style>
	</head>
	<body>

		<div class="them">
			<table border="1px">
				<h1>Quản lý sách</h1>
				<a href="xuly/them"><input type="button" name="them" value="Thêm Sách"></a>
				<a href=""><input type="button" name="them" value="mượn trả"></a>
				<thead>
					<tr>
						<th>STT</th>
						<th>Tên sách</th>
						<th>Mã Sách</th>
						<th>Loại Sách</th>
						<th>Ngày Mượn</th>
						<th>Ngày Trả</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php for ($i=0; $i <count($sach) ; $i++) { 
					?>
					<tr>
						<td>1</td>
						<td>{{$sach[$i]['tenS']}}</td>
						<td>{{$sach[$i]['maS']}}</td>
						<td>{{$sach[$i]['loaiSach']}}</td>
						<td>{{$sach[$i]['ngayMuon']}}</td>
						<td>{{$sach[$i]['ngayTra']}}</td>
						<td>
							<a href="xuly/sua">Edit</a>
							<a href="xuly/list">Delete</a>
						</td>
					</tr>
					<?php 	# code...
					}  ?>
				</tbody>
			</table>
		</div>
	</body>
</html>