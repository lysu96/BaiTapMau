@extends('layouts.master')

@section('title','Thông tin tài khoản - Shop bán điện thoại Phone Store')

@section('content')

<div class="form-horizontal">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<h2>Thông tin tài khoản</h2>
			<hr>
		</div>
	</div>
	<?php $user = Auth::user() ?>
	<div class="row">
		<div class="col-md-3 field-label-responsive">
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<div class="input-group mb-2 mr-sm-2 mb-sm-0">
					<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
					Họ tên : <?= $user->hoTen ?>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-control-feedback">
				<span class="text-danger align-middle">
					<!-- Put name validation error messages here -->
				</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 field-label-responsive">
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<div class="input-group mb-2 mr-sm-2 mb-sm-0">
					<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-phone"></i></div>
					Sđt : <?= $user->sdt ?>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-control-feedback">
				<span class="text-danger align-middle">
					<!-- Put name validation error messages here -->
				</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3 field-label-responsive">
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<div class="input-group mb-2 mr-sm-2 mb-sm-0">
					<div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
					Email : <?= $user->email ?>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-control-feedback">
				<span class="text-danger align-middle">
					<!-- Put name validation error messages here -->
				</span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-success"><a href="{{asset('account/edit')}}" style="color : white;"><i class="fa fa-user-plus"></i> Sửa</a></button>
		</div>
	</div>
</form>

@endsection