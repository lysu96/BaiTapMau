<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách sản phẩm</title>
</head>
<body>
	<div class="Danhsach">
		<h2>Danh sách sản phẩm</h2>
		<table border="1px solid #41383C">
			<a href="index.php?action=sanpham&xlsp=add"><button>Thêm</button></a>
			<thead>
				<th>STT</th>
				<th>Tên sản phẩm</th>
				<th>Ảnh</th>
				<th>Mã sản phẩm</th>
				<th>Tên nhà sản xuất</th>
				<th>Ngày sản xuất</th>
				<th>Hành động</th>
			</thead>
			<tbody>
				
				<?php
					$stt = 1;
					foreach ($datas as $value) {

			 	?>
			 	<tr>
			 		<td><?php echo $stt; ?></td>
			 		<td><?php echo $value['tenSP']; ?></td>
			 		<td><img src="View/img/<?php echo $value['img']; ?>" style = "width: 80px; height: 100px;" alt=""></td>
			 		<td><?php echo $value['maSP']; ?></td>
			 		<td><?php echo $value['tenNSX']; ?></td>
			 		<td><?php echo $value['ngaySX']; ?></td>
			 		<td>
			 			<a onclick="return confirm('Bạn có chắc chắn muốn sửa không..?')" href="index.php?action=sanpham&xlsp=edit&id=<?php echo $value['id'];?>">Sửa</a>
			 			<a onclick="return confirm('Bạn có chắc chắn muốn xóa không..?')" href="index.php?action=sanpham&xlsp=xoa&id=<?php echo $value['id']; ?>">Xóa</a>
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