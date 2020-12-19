<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh sách ảnh</title>
</head>
<body>
	<div class="Danhsach">
		<h2>Danh sách ảnh lớp</h2>

		<div class="img-idol">
			<?php 
				foreach ($anh as $value) {
			 ?>

			<div class="img-rows">
				<div class="img-row">
					<img src="View/Img/img-Idol/<?php echo $value['img'] ?>" alt="Không có Avata">
				</div>
				<div class="detail">
					<a href=""><?php echo $value['tenSV']; ?></a>
				</div>
			</div>
			<?php 
				}
			 ?>
			

		</div>
	</div>
</body>
</html>