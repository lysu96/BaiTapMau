<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách sinh viên</title>
</head>
<body>
	<div class="Danhsach">
		<h2>Danh sách sinh viên</h2>
		<a href="index.php?action=user&mouse=add"><input type="button" name="" value="Thêm danh sinh viên"></a>
		<a href="index.php?action=user&mouse"><input type="button" name="" value="danh sách sinh viên"></a>
		<table border="1px solid #41383C">
			<thead>
				<th>STT</th>
				<th>Mã sinh viên</th>
				<th>Họ và tên</th>
				<th>Nam sinh</th>
				<th>Lớp</th>
				<th>Hành động</th>
			</thead>
			<tbody>
				
				<?php
					$stt = 1;
					foreach ($dataar as $value) {

			 	?>
			 	<tr>
			 		<td><?php echo $stt; ?></td>
			 		<td><?php echo $value['maSV']; ?></td>
			 		<td><?php echo $value['tenSV']; ?></td>
			 		<td><?php echo $value['namSinh']; ?></td>
			 		<td><?php echo $value['lop']; ?></td>
			 		<td>
			 			<a onclick="return confirm('Bạn có chắc chắn muốn sửa không..?')" href="index.php?action=user&mouse=edit&id=<?php echo $value['id'];?>">Edit</a>
			 			<a onclick="return confirm('Bạn có chắc chắn muốn xóa không..?')" href="index.php?action=user&mouse=Delete&id=<?php echo $value['id']; ?>">Delete</a>
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