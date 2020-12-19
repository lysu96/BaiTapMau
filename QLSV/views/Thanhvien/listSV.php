<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>san pham</title>
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
				<h1>Danh sách sinh viên</h1>
				<a href="index.php?action=thanh-vien&mouse=addSV"><input type="button" name="them" value="Thêm Sinh Viên"></a>
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã SV</th>
						<th>Họ và Tên</th>
						<th>Giới Tính</th>
						<th>Năm sinh</th>
						<th>Lớp</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$stt=1;
						foreach ($data as $value) {
		
						
					 ?>
					<tr>
						<td><?php echo $stt; ?></td>
						<td><?php echo $value['maSV']; ?></td>
						<td><?php echo $value['tenSV']; ?></td>
						<td><?php if ($value['gioiTinh']==1) {
							echo "Nam";
						} else{
							echo "Nữ";
						} ?></td>
						<td><?php echo $value['namSinh']; ?></td>
						<td><?php echo $value['maLop']; ?></td>
						<td>
							<a href="index.php?action=thanh-vien&mouse=editSV&id=<?php echo $value['id']; ?>">Edit</a>
							<a href="index.php?action=thanh-vien&mouse=delete&id=<?php echo $value['id']; ?>">Delete</a>
						</td>
					</tr>
					<?php 
					$stt++;
						}
					?>
				</tbody>
			</table>
		</div>
	</body>
</html>