<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm sinh viên</title>
</head>
<body>
	<div class="them">
		<h3>Sửa Sinh Viên</h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Mã sinh viên:</td>
					<td><input type="text" name="maSV" value="<?php echo $dataEdit['maSV']; ?>"></td>
				</tr>
				<tr>
					<td>Tên sinh viên: </td>
					<td><input type="text" name="tenSV" value="<?php echo $dataEdit['tenSV']; ?>"></td>
				</tr>
				<tr>
					<td>Nam sinh: </td>
					<td><input type="date" name="namSinh" min="1000-01-01" max="2018-01-01" value="<?php echo $dataEdit['namSinh']; ?>"></td>
				</tr>
				<tr>
					<td>Mã lớp: </td>
					<td><input type="text" name="maLop" value="<?php echo $dataEdit['maLop']; ?>"></td>
				</tr>
				<tr>
					<td>Giới tính: </td>
					<td>
						<input type="radio" name="gioiTinh" value="1">Nam
						<input type="radio" name="gioiTinh" value="2">Nữ
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" name="Edit" value="Cập nhập">
						<input type="reset" name="huy" value="Hủy">
					</td>
				</tr>
			</table>	
		</form>
		<a href="index.php?action=thanh-vien&mouse">Quay lại</a>
	</div>
</body>
</html>