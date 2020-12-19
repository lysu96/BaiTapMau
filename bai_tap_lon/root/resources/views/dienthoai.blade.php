<?php foreach ($sp as $value) {
	$id = $value->id;
	$ten = $value->tenSP;
	$logo = $value->anh;
	$moTa = $value->moTa;
	$ttct = $value->thongTinChiTiet;
	$gia = $value->gia;
	$mau = $value->mauSac;
	$bh = $value->baoHanh;
	$km = $value->khuyenMai;
	$manHinh = $value->manHinh;
	$sim = $value->bangTan_Sim;
	$boNhoTrong = $value->boNhoTrong;
	$ram = $value->ram;
	$cpu = $value->cpu;
	$gpu = $value->gpu;
	$heDieuHanh = $value->heDieuHanh;
	$camTruoc = $value->camTruoc;
	$camSau = $value->camSau;
	$pin = $value->pin;
} ?>
@extends('layouts.master')

@section('title',$ten.' - Shop bán điện thoại Phone Store')

@section('content')
<div id="fb-root"></div>
<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.2';
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="main-content">
	<div class="container">
		<div id="primary" class="content-area"><main id="main" class="site-main" role="main"><nav class="woocommerce-breadcrumb"><a href="{{asset('')}}">Trang chủ</a>&nbsp;/&nbsp;<?= $ten ?> <span style="font-size: 13px;"><?= $moTa ?></span></nav>		
			
		</main>
		<br>
		<div class="row">
			<div class="col-sm">
				<div class="logo">
					<img src="{{asset($logo)}}" alt="">
				</div>
				<div class="ttct">
					<b>Thông tin chi tiết :</b>
					<p><?= $ttct ?></p>
				</div>
			</div>
			<div class="col-sm">
				<div class="gia">
					<?= $gia ?> đ
				</div>
				<?php 
				$mauSac = explode( ',', $mau ); 

				?>
				<div class="bh">
					<b>Bảo hành</b> : <?= $bh ?>
				</div>
				<form action="{{Route('save-gio-hang')}}" method="post">
					{{csrf_field()}}
					<input type="hidden" name="id_sp" value="<?= $id ?>">
					<div class="mau">
						<b>Chọn màu</b> : <select name="mauSac">
							<?php foreach ($mauSac as $value): ?>
								<option value="<?= $value ?>"><?= $value ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<br>
					<?php if(Auth::check()){
						echo '<button type="submit" class="button" style="border: none;">MUA NGAY<span>Giao tận nơi hoặc nhận ở cửa hàng</span></button>';
					} else echo '<div class="button" id="button" onclick="myFunction()" style="border: none;">MUA NGAY<span>Giao tận nơi hoặc nhận ở cửa hàng</span></div>';?>
					<div id="dat-hang" style="display: none;">
						<div class="form-group">
							<div class="input-group-addon" >Họ tên:</i></div>
							<input type="text" name="hoTen" class="form-control" id="name"
							value="" autofocus>
							<div class="input-group-addon" >Số điện thoại:</i></div>
							<input type="text" name="sdt" class="form-control" id="name"
							value="" autofocus>
							<div class="input-group-addon" >Email:</i></div>
							<input type="text" name="email" class="form-control" id="name"
							value="" autofocus>
							<div class="input-group-addon" >Địa chỉ:</i></div>
							<input type="text" name="diaChi" class="form-control" id="name"
							value="" autofocus>
						</div>
						<button type="submit" class="button" style="border: none;">Đặt hàng</button>
					</div>
					<script>
						function myFunction() {
							document.getElementById("button").style.display = "none";
							document.getElementById("dat-hang").style.display = "block";
						}
					</script>
				</form>
				<?php if ($_POST) {
					var_dump($_POST);
				} ?>
				<div class="dst-km">
					<h3>Khuyến mãi và Ưu đãi</h3>
					<div class="jkem" id="jc_kem">
						<div class="textwidget"><p><?= $km ?></p>
						</div>
					</div>
				</div></div>
				<div class="col-sm">
					<div class="dst-attr">
						<h2 class="dst-ctitle">Thông số kỹ thuật</h2>
						<table class="shop_attributes">

							<tbody>
								<tr>
									<th>Màn hình</th>
									<td><p><?= $manHinh ?></p>
									</td>
								</tr>
								<tr>
									<th>Băng tần - Sim</th>
									<td><p><?= $sim ?></p>
									</td>
								</tr>
								<tr>
									<th>Bộ nhớ trong</th>
									<td><p><?= $boNhoTrong ?></p>
									</td>
								</tr>
								<tr>
									<th>RAM</th>
									<td><p><?= $ram ?></p>
									</td>
								</tr>
								<tr>
									<th>CPU</th>
									<td><p><?= $cpu ?></p>
									</td>
								</tr>
								<tr>
									<th>Chip đồ họa ( GPU )</th>
									<td><p><?= $gpu ?></p>
									</td>
								</tr>
								<tr>
									<th>Hệ điều hành</th>
									<td><p><?= $heDieuHanh ?></p>
									</td>
								</tr>
								<tr>
									<th>Màu sắc</th>
									<td><p><?= $mau ?></p>
									</td>
								</tr>
								<tr>
									<th>Camera sau</th>
									<td><p><?= $camSau ?></p>
									</td>
								</tr>
								<tr>
									<th>Camera trước</th>
									<td><p><?= $camTruoc ?></p>
									</td>
								</tr>
								<tr>
									<th>Pin</th>
									<td><p><?= $pin ?>o</p>
									</td>
								</tr>
							</tbody></table>


						</div>
					</div>
				</div>
				<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-numposts="5"></div>
			</div>

			@endsection