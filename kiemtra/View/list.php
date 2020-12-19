<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách sinh viên</title>
</head>
<body>
	<div class="Danhsach">
		<h2>Danh sách sinh viên</h2>
		<a href="index.php?SinhVien=sv&action=add"><input type="button" name="" value="Thêm danh sinh viên"></a>
		<table border="1px solid #41383C">
			<thead>
				<th>STT</th>
				<th>Họ và tên</th>
				<th>Lớp</th>
				<th>Nam sinh</th>
				<th>giới tính</th>
				<th>Hành động</th>
				
			</thead>
			<tbody>
				
				<?php
					$stt = 1;
					foreach ($data as $value) {

			 	?>
			 	<tr>
			 		<td><?php echo $stt; ?></td>
			 		<td><?php echo $value['tenSV']; ?></td>
			 		<td><?php echo $value['tenLop']; ?></td>
			 		<td><?php echo $value['namSinh']; ?></td>
			 		<td><?php if ($value['gioiTinh'] = 1) {
			 			echo 'Nam';
			 		}else {
			 			echo 'Nữ';
			 		} ; ?></td>
			 		<td><a href="index.php?SinhVien=sv&action=delete&id=<?php echo $value['$id']; ?>">Xóa</a></td>
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