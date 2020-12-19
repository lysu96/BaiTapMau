<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Danh sách Sinh viên</title>
</head>
<body>
	<div class="Danhsach">
		<h2>Thêm Sinh Viên</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Mã sinh viên: </td>
					<td>
						<input type="text" name="maSV" placeholder="">
						<?php if (isset($error['maSV'])) { ?>
							<span style="color: red;"><?php echo $error['maSV']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Họ và tên: </td>
					<td>
						<input type="text" name="tenSV" placeholder="">
						<?php if (isset($error['tenSV'])) { ?>
							<span style="color: red;"><?php echo $error['tenSV']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>mã Lớp: </td>
					<td>
						<input type="text" name="maLop" placeholder="">
						<?php if (isset($error['maLop'])) { ?>
							<span style="color: red;"><?php echo $error['maLop']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Nam sinh: </td>
					<td>
						<input type="date" name="namSinh" placeholder="">
						<?php if (isset($error['namSinh'])) { ?>
							<span style="color: red;"><?php echo $error['namSinh']; ?></span>
						<?php } ?>
					</td>
				</tr>
				
				<tr>
					<td>Giới tính: </td>
					<td>
						<input type="radio" name="gioiTinh" value="1">Nam
						<input type="radio" name="gioiTinh" value="2">Nữ
						<?php if (isset($error['gioiTinh'])) { ?>
							<span style="color: red;"><?php echo $error['gioiTinh']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" name="add" value="Thêm">
						<input type="reset" name="huy" value="Hủy">
					</td>
				</tr>
			</table>
		</form>
		<?php 
		if (isset($themthanhcong) && in_array('thanh_cong', $themthanhcong)) {
			echo "<p style='color: green; text-align:center; font-size: 20px; margin-top: 5px'>Thêm mới thành công.!</p>";
		} elseif (isset($themthanhcong) && in_array('kthanh_cong', $themthanhcong)) {
			echo "<p style='color: red; text-align:center; font-size: 20px; margin-top: 5px'>Thêm mới không thành công.!</p>";
		}
		?>
		<a href="index.php?SinhVien=sv&action=list">Quay lại trang danh sách sinh viên</a> 
	</div>
	
</body>
</html>