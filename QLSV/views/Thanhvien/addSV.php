<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm sinh viên</title>
</head>
<body>
	<div class="them">
		<h3>Thêm Sinh Viên</h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Mã sinh viên:</td>
					<td><input type="text" name="maSV" placeholder="mã sinh viên"></td>
				</tr>
				<tr>
					<td>Tên sinh viên: </td>
					<td><input type="text" name="tenSV" placeholder="Họ và tên"></td>
				</tr>
				<tr>
					<td>Nam sinh: </td>
					<td><input type="date" name="namSinh" min="1000-01-01" max="2018-01-01"></td>
				</tr>
				<tr>
					<td>Mã lớp: </td>
					<td><input type="text" name="maLop" placeholder="lớp"></td>
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
						<input type="submit" name="addSV" value="Thêm">
						<input type="reset" name="huy" value="Hủy">
					</td>
				</tr>
			</table>	
		</form>
		<?php 
			if (isset($thanhcong) && in_array('add_success', $thanhcong)) {
				echo "<p style='color: green; text-align: center'> Thêm mới thành công.!</p>";
			}
		 ?>
		<a href="index.php?action=thanh-vien&mouse">Quay lại</a>
	</div>
</body>
</html>