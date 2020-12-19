<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
</head>
<body>
	<div class="Danhsach">
		<h2>Bảng sinh viên</h2>
		<a href="index.php?action=user&mouse=add"><input type="button" name="" value="Thêm danh sinh viên"></a>
		<a href="index.php?action=user&mouse=list"><input type="button" name="" value="Quản lý sinh viên"></a>
		<table border="1px solid #41383C">
			<thead>
				<th>STT</th>
				<th>Mã sinh viên</th>
				<th>Họ và tên</th>
				<th>Nam sinh</th>
				<th>Lớp</th>
			</thead>
			<tbody>
				<?php
					$stt = 1;
					foreach ($danhSachSV as $value) {

			 	?>
			 	<tr>
			 		<td><?php echo $stt; ?></td>
			 		<td><?php echo $value['maSV']; ?></td>
			 		<td><?php echo $value['tenSV']; ?></td>
			 		<td><?php echo $value['namSinh']; ?></td>
			 		<td><?php echo $value['lop']; ?></td>
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