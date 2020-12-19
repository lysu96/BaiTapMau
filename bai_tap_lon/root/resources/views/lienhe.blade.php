@extends('layouts.master')
@section('title','Liên hệ - Shop bán điện thoại Phone Store')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Liên hệ</title>
</head>
<body>
	<div class="container">
		<div class="col-md-12">
			<h1>Liên hệ</h1>
			<hr>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-6 col-xl-6">
				<div class="form-group">
					<i>Họ và tên*</i><br>
					<input type="text" class="form-control"><br>
					<i>Email*</i><br>
					<input type="text" class="form-control"><br>
					<i>Số điện thoại*</i><br>
					<input type="text" class="form-control">
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-xl-6">
				<i>Nội dung</i><br>
				<textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea><br>
				<button class="form-control btn-danger">Gửi</button>
			</div>
		</div>
	</div>
</body>
</html>
@endsection