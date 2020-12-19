<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa Danh sách Sinh viên</title>
</head>
<body>
	<div class="Danhsach">
		<h2>Sửa Thông Tin Sinh Viên</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Mã sinh viên: </td>
					<td>
						<input type="text" name="maSV" value="<?php echo $hienthi['maSV']; ?>">
						<?php if (isset($error['maSV'])) { ?>
							<span style="color: red;"><?php echo $error['maSV']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Họ và tên: </td>
					<td>
						<input type="text" name="tenSV" value="<?php echo $hienthi['tenSV']; ?>">
						<?php if (isset($error['tenSV'])) { ?>
							<span style="color: red;"><?php echo $error['tenSV']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Nam sinh: </td>
					<td>
						<input type="text" name="namSinh" value="<?php echo $hienthi['namSinh']; ?>">
						<?php if (isset($error['namSinh'])) { ?>
							<span style="color: red;"><?php echo $error['namSinh']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Lớp: </td>
					<td>
						<input type="text" name="lop" value="<?php echo $hienthi['lop']; ?>">
						<?php if (isset($error['lop'])) { ?>
							<span style="color: red;"><?php echo $error['lop']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Avata: </td>
					<td>
						<input type="file" name="avata" value="<?php echo $hienthi['img']; ?>">
						<?php if (isset($error['avata'])) { ?>
							<span style="color: red;"><?php echo $error['avata']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>
						<input type="submit" name="update" value="Cập nhập">
						<input type="reset" name="huy" value="Hủy">
					</td>
				</tr>
			</table>
		</form>
		<?php 
		if (isset($themthanhcong) && in_array('thanh_cong', $themthanhcong)) {
			echo "<p style='color: green; text-align:center; font-size: 20px; margin-top: 5px'>Sửa thành công.!</p>";
		}
		if (isset($themthanhcong) && in_array('kthanh_cong', $themthanhcong)) {
			echo "<p style='color: red; text-align:center; font-size: 20px; margin-top: 5px'>Sửa không thành công.!</p>";
		}
		?>
		<a href="index.php?action=user&mouse">Quay lại bảng sinh viên</a> 
	</div>
	
</body>
</html>