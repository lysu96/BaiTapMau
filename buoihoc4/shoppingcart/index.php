<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My shop</title>
	<link rel="stylesheet" href="css/style.css">
	<!-- <link rel="stylesheet" href="js/bootstrap.min.js"> -->
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<?php 
		session_start();
		if (!isset($_SESSION['user_name'])) {
			header("Location:login.php");
		}
	 ?>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">My shop</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Product</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Cart</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Acount <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Login</a></li>
							<li><a href="#">Register</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
	<!-- ket thuc nav -->
	<div class="row">
		<div class="container">
			<div class="col-md-4">
				<ul class="list-group">
					<li class="list-group-item active">Danh mục</li>
					<li class="list-group-item">Quần áo nam</li>
					<li class="list-group-item">Quần áo nữ</li>
					<li class="list-group-item">Quần áo thể thao</li>
					<li class="list-group-item">Giầy nam</li>
					<li class="list-group-item">Giầy nữ</li>
					<li class="list-group-item">Giầy thể thao</li>
					<li class="list-group-item">Giầy thể thao</li>
				</ul>
			</div>
			<div class="col-md-8">
				<div id="carousel-id" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-id" data-slide-to="0" class=""></li>
						<li data-target="#carousel-id" data-slide-to="1" class=""></li>
						<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item">
							<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
							<div class="container">
								<div class="carousel-caption">
									<h1>Example headline.</h1>
									<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
								</div>
							</div>
						</div>
						<div class="item">
							<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
							<div class="container">
								<div class="carousel-caption">
									<h1>Another example headline.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
								</div>
							</div>
						</div>
						<div class="item active">
							<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
							<div class="container">
								<div class="carousel-caption">
									<h1>One more for good measure.</h1>
									<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
									<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
								</div>
							</div>
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
					<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- ket thuc header -->
	<hr>
	
	<div class="row">
		<div class="container">
			<h1 class="bg-primary">Sản phẩm bán chạy</h1>
			<?php 
		$item_per_page = 4;
		$danhsachsanpham = array(
						array(
							'img'=>'img/aonam1.jpg',
							'name'=>'Ao pháo gió chất đẹp',
							'des'=>'Áo pháo gió chất đẹp được làm từ lông cừu, khâu tay...',
							'gia'=>'12000VND'
							),
						array(
							'img'=>'img/aonam2.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'14000VND'
							),
						array(
							'img'=>'img/aonam1.jpg',
							'name'=>'Ao pháo gió chất đẹp',
							'des'=>'Áo pháo gió chất đẹp được làm từ lông cừu, khâu tay...',
							'gia'=>'10000VND'
							),
						array('img'=>'img/aonam1.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'15000VND'
							),
						array('img'=>'img/aonam2.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'20000VND'
							),
						array('img'=>'img/aonam3.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'900VND'),
						array('img'=>'img/aonam2.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'12000VND'),
						array('img'=>'img/aonam1.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'12000VND'),	
							array('img'=>'img/aonam2.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'20000VND'
							),
						array('img'=>'img/aonam2.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'900VND'),
						array('img'=>'img/aonam2.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'12000VND'),
						array('img'=>'img/aonam2.jpg',
							'name'=>'Ao sơ mi nam',
							'des'=>'Áo sơ mi nam, có cổ, may từ công ty may 10',
							'gia'=>'12000VND'),		
			);
	
		if (isset($_GET['page'])) {
			$current_page = $_GET['page'];
		} else{
			$current_page = 1;
		}
		$start = ($current_page=1)*$item_per_page;
		$end = $start + $item_per_page;

		for ($i = $start; $i < $end && $i < count($danhsachsanpham) ; $i++) {
			$danhsach = $danhsachsanpham[$i];
		
	 ?>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="<?php echo $danhsach['img']; ?>" alt="ao nam">
					<div class="caption">
						<h3><?php echo $danhsach['name']; ?></h3>
						<p><?php echo $danhsach['des']; ?></p>
						<p><a href="#" class="btn btn-primary" role="button">Mua ngay</a> <a href="#" class="btn btn-default" role="button"><?php echo $danhsach['gia']; ?></a></p>
					</div>
				</div>
			</div>
			<?php 
		}
	 ?>
		</div>
	</div>
	<!-- ket thuc san pham ban chay -->
	<hr>
	<div class="row">
		<div class="container">
			<h1 class="bg-success">Sản phẩm nổi bật</h1>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="img/aonam3.jpg" alt="ao nam">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur.</p>
						<p><a href="#" class="btn btn-primary" role="button">Mua ngay</a> <a href="#" class="btn btn-default" role="button">90000 VND</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="img/aonam3.jpg" alt="ao nam">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur.</p>
						<p><a href="#" class="btn btn-primary" role="button">Mua ngay</a> <a href="#" class="btn btn-default" role="button">90000 VND</a></p>
					</div>
				</div>
			</div>
			<div class="col-sm-6 col-md-4">
				<div class="thumbnail">
					<img src="img/aonam3.jpg" alt="ao nam">
					<div class="caption">
						<h3>Thumbnail label</h3>
						<p>Lorem ipsum dolor sit amet, consectetur.</p>
						<p><a href="#" class="btn btn-primary" role="button">Mua ngay</a> <a href="#" class="btn btn-default" role="button">90000 VND</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- ket thuc san pham noi bat -->
	<hr>
	<div class="row text-center">
		<div class="container">
			<div class="col-md-12">
				<ul class="pagination">
					<li><a href="">&laquo</a></li>
					<?php 	
			$tongsanpham = count($danhsachsanpham);
			$tongtrang = count($danhsachsanpham)/$item_per_page;
			if ($tongsanpham % $item_per_page !=0) {
			$tongtrang = $tongtrang +1;
			} 
			for ($i = 1; $i <= $tongtrang ; $i++) {
				

		?>
					<li class="<?php echo($i==$current_page)?'active':''?>"><a href="index.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php } ?>
					<li><a href="">&raquo</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- hết phân trang -->
	<hr>
	<div class="footer">
		<div class="container">
			<p>Bản quyền này là của My shop @2018</p>
		</div>
	</div>


</body>
</html>