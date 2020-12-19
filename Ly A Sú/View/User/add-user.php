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
						<input type="text" name="maSV" placeholder="vd: DTC15HD570">
						<?php if (isset($error['maSV'])) { ?>
							<span style="color: red;"><?php echo $error['maSV']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Họ và tên: </td>
					<td>
						<input type="text" name="tenSV" placeholder="vd: Nguyễn văn A">
						<?php if (isset($error['tenSV'])) { ?>
							<span style="color: red;"><?php echo $error['tenSV']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Nam sinh: </td>
					<td>
						<input type="text" name="namSinh" placeholder="vd: 1996">
						<?php if (isset($error['namSinh'])) { ?>
							<span style="color: red;"><?php echo $error['namSinh']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Lớp: </td>
					<td>
						<input type="text" name="lop" placeholder="vd: CNTT">
						<?php if (isset($error['lop'])) { ?>
							<span style="color: red;"><?php echo $error['lop']; ?></span>
						<?php } ?>
					</td>
				</tr>
				<tr>
					<td>Avata: </td>
					<td>
						<input type="file" name="avata" >
						<?php if (isset($error['avata'])) { ?>
							<span style="color: red;"><?php echo $error['avata']; ?></span>
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
		<a href="index.php?action=user&mouse">Quay lại trang quản lý sinh viên</a> 
	</div>
	
</body>
</html>