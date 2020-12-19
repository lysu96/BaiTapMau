<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm sản phẩm</title>
</head>
<body>
	<div class="Danhsach">
		<h2>Thêm sản phẩm</h2>
		<form action="" method="POST" enctype="multipart/form-data">
			<table>
				<tr>
					<td>Mã sản phẩm: </td>
					<td>
						<input type="text" name="maSP" placeholder="">
						<?php if (isset($error['maSP'])) { ?>
							<span style="color: red;"><?php echo $error['maSP']; ?></span>
						<?php } ?>
						
					</td>
				</tr>
				<tr>
					<td>Tên sản phẩm: </td>
					<td>
						<input type="text" name="tenSP" placeholder="">
						<?php if (isset($error['tenSP'])) { ?>
							<span style="color: red;"><?php echo $error['tenSP']; ?></span>
						<?php } ?>
						
					</td>
				</tr>
				<tr>
					<td>Tên nhà sản xuất: </td>
					<td>
						<select name="maNSX" multiple>
							<?php foreach ($datas as $value) {
								
							 ?>
							 <option value="<?php echo $value['maNSX']; ?>"><?php echo $value['tenNSX']; ?></option>

							<?php } ?>
							
						</select>
						<?php if (isset($error['maNSX'])) { ?>
							<span style="color: red;"><?php echo $error['maNSX']; ?></span>
						<?php } ?>
						
					</td>
				</tr>
				<!-- <tr>
					<td>Ngày sản xuất: </td>
					<td>
						<input type="date" name="ngayNSX" placeholder="">
						<?php if (isset($error['ngayNSX'])) { ?>
							<span style="color: red;"><?php echo $error['ngayNSX']; ?></span>
						<?php } ?>
					</td>
				</tr> -->
				<tr>
					<td>ảnh: </td>
					<td>
						<input type="file" name="anh" >
						<?php if (isset($error['anh'])) { ?>
							<span style="color: red;"><?php echo $error['anh']; ?></span>
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
		if (isset($thanhcong) && in_array('thanh_cong', $thanhcong)) {
			echo "<p style='color: green; text-align:center; font-size: 20px; margin-top: 5px'>Thêm thành công.!</p>";
		} elseif (isset($thanhcong) && in_array('kthanh_cong', $thanhcong)) {
			echo "<p style='color: red; text-align:center; font-size: 20px; margin-top: 5px'>Thêm không thành công.!</p>";
		}
		?>
		<a href="index.php?action=sanpham&xlsp=list">Quay lại quản lý sản phẩm</a> 
	</div>
	
</body>
</html>