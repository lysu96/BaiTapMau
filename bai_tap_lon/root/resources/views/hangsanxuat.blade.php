@extends('layouts.master')

@section('title',$hsx.' - Shop bán điện thoại Phone Store')

@section('content')
<!DOCTYPE html>
<style>
body {
	padding-top: 1em;
}	
</style> 

<br>
<div class="row">
	<div class="container">
		<div class="clearfix vi-header">
			<h3 class="vi-left-title-2 pull-left"><?= $hsx ?></h3>
			<div class="vi-right-link pull-right"><a href="{{asset('dtdd/Apple')}}">Apple</a><a href="{{asset('dtdd/Samsung')}}">Samsung</a><a href="{{asset('dtdd/Xiaomi')}}">Xiaomi</a><a href="{{asset('dtdd/Huawei')}}">Huawei</a>
			</div>
		</div>

		<!-- san pham -->

		<ul class="homeproduct ">
			<?php foreach ($all_sp as $value): ?>
				<li data-id="{{$value->id}}">
					<!--#region Ngành hàng chính -->
					<a href="{{asset('dienthoai')}}/{{$value->link}}">
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
			<?php endforeach ?>
			
			
		</ul>
	</div>
</div>
@endsection