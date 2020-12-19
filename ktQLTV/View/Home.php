<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Quan ly sach</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<div class="them">
			<table border="1px">
				<h1>Quan ly sach</h1>
				<a href="index.php?action=add"><input type="button" name="them" value="Them Sach"></a>
				<a href="index.php?action=addmt"><input type="button" name="them" value="them ngay tra va ngay muon"></a>
				<thead>
					<tr>
						<th>STT</th>
						<th>Ten Sach</th>
						<th>Ma Sach</th>
						<th>Loai Sach</th>
						<th>Ngay Muon</th>
						<th>Ngay Tra</th>
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
						<td><?php echo $value['tenSach']; ?></td>
						<td><?php echo $value['maSach']; ?></td>
						<td><?php echo $value['loaiSach']; ?></td>
						<td><?php echo $value['ngayMuon']; ?></td>
						<td><?php echo $value['ngayTra']; ?></td>
						<td>
							<a href="">Edit</a>
							<a href="">Delete</a>
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