@extends('layouts.master')

@section('title','Shop bán điện thoại Phone Store')

@section('content')

<style>
body {
	padding-top: 1em;
}	
</style> 
<div class="container" style="display: block;">
	<div class="anh">
		<div id="myCarousel" class="carousel slide bg-inverse ml-auto mr-auto" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<img class="d-block w-100" src="img/1.jpg" alt="First slide">

				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/2.jpg" alt="Second slide">

				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="img/3.jpg" alt="Third slide">

				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	</div>
	<div class="tin-cong-nghe">
		<div id='nz-div'>
			<h3 class="tde"> 
				<span class="null">TIN CÔNG NGHỆ</span> 
			</h3>
		</div>

		<ul>
			
			<?php foreach ($tcn as $value): ?>
				<li>
					<a href="tin-cong-nghe/{{$value->id}}">
						<img src="{{asset($value->anh)}}" alt="">
						<h3>{{$value->tenTin}}</h3>
						<span>{{$value->created_at}}</span>
					</a>
				</li>
			<?php endforeach ?>


		</ul>
	</div>
</div>
<br>
<div class="row" style="clear: right;">
	<div class="container">
		<div class="clearfix vi-header">
			<h3 class="vi-left-title-2 pull-left">ĐIỆN THOẠI MỚI</h3>
			<div class="vi-right-link pull-right"><a href="{{asset('dtdd/Apple')}}">Apple</a><a href="{{asset('dtdd/Samsung')}}">Samsung</a><a href="{{asset('dtdd/Xiaomi')}}">Xiaomi</a><a href="{{asset('dtdd/Huawei')}}">Huawei</a><a href="dtdd">Xem tất cả (<?= count($all_sp) ?>)</a>
			</div>
		</div>

		<!-- san pham -->

		<ul class="homeproduct ">
			<?php $dem = 0;?>
			<?php foreach ($all_sp as $value): $dem++?>
				<li data-id="{{$value->id}}">
					<!--#region Ngành hàng chính -->
					<a href="dienthoai/{{$value->link}}">
						<img  src="{{asset($value->anh)}}" class="lazy lazydone" style="display: block; opacity: 1;">
						<h3>{{$value->tenSP}}</h3>
						<div class="price"><strong>{{$value->gia."đ"}}</strong></div>
						<div class="promo">
							<p>{{$value->moTa}}</p>
						</div>

						<label class="installment">Trả góp 0%</label>
					</a>
					<!--#endregion -->

				</li>
				<?php if ($dem==12) {
					break;
				} endforeach ?>


			</ul>
		</div>
	
	</div>
	@endsection