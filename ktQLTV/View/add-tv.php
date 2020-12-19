<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Them sach</title>
</head>
<body>
	<div class="them">
		<h3>Them Sach</h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Ma Sach</td>
					<td><input type="text" name="maSach" placeholder="" value="<?php echo $datasach['maSach'] ?>"></td>
				</tr>
				<tr>
					<td>Ten Sach</td>
					<td><input type="text" name="tenSach" placeholder=""></td>
				</tr>
				<tr>
					<td>Loai Sach</td>
					<td><input type="text" name="loaiSanh"></td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" name="addSach" value="Thêm">
						<input type="reset" name="huy" value="Hủy">
					</td>
				</tr>
			</table>	
		</form>
		<a href="index.php?action">Quay lại</a>
	</div>
</body>
</html>