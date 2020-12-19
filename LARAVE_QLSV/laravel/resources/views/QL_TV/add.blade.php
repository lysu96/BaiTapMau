<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Them sach</title>
</head>
<body>
	<div class="them">
		<h3>Thêm Sách</h1>
		<form action="" method="POST">
			<table>
				<tr>
					<td>Mã sách</td>
					<td>
						<input type="text" name="maSach" placeholder="" list="browsers">
						<datalist id="browsers">
						  <option value="LTH">
						  <option value="HMT">
						  <option value="DTU">
						  <option value="RTX">
						  <option value="MDH">
						</datalist>
					</td>
				</tr>
				<tr>
					<td>Tên sách</td>
					<td><input type="text" name="tenSach" placeholder=""></td>
				</tr>
				<tr>
					<td>Loại sách</td>
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
		<a href="/QLTV">Quay lại</a>
	</div>
</body>
</html>