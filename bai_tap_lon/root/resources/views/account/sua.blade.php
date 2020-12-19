@extends('layouts.master')

@section('title','Sửa thông tin thành viên - Shop bán điện thoại Phone Store')

@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="{{Route('Edituser')}}">
           {{csrf_field()}}
           <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Sửa thông tin</h2>
                <hr>
            </div>
        </div>
        <?php foreach ($use as $value) {
        	$id = $value->id;
        	$hoTen = $value->hoTen;
        	$sdt = $value->sdt;
        	$email = $value->email;
        } ?>
        <input type="hidden" name="id" value="{{$id}}">
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Họ tên</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                        value="<?= $hoTen ?>" required autofocus>
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
                <label for="email">Số điện thoại</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-phone"></i></div>
                        <input type="text" name="sdt" class="form-control" id="sdt"
                         value="<?= $sdt ?>" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                    <span class="text-danger align-middle">
                        <!-- Put e-mail validation error messages here -->
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="email">Địa chỉ E-Mail</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                        <input type="text" name="email" class="form-control" id="email"
                         value="<?= $email ?>" required autofocus>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-control-feedback">
                    <span class="text-danger align-middle">
                        <!-- Put e-mail validation error messages here -->
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Mật khẩu</label>
            </div>
            <div class="col-md-6">
                <div class="form-group has-danger">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                        <input type="password" name="password" class="form-control" id="password"
                        placeholder="Password" required>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"> Example Error Message</i>
                        </span>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Nhập lại mật khẩu</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            <i class="fa fa-repeat"></i>
                        </div>
                        <input type="password" name="password-confirmation" class="form-control"
                        id="password-confirm" placeholder="Password" required>
                    </div>
                </div>
            </div>
        </div>
        <?php if (Auth::user()->role>1): ?>
        	<div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="password">Chức vụ</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem">
                            
                        </div>
                        <select name="role">
                        	<option value="0">Thành viên</option>
                        	<option value="1">Nhân viên</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <?php endif ?>
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Update</button>
            </div>
        </div>
    </form>
</div>
</body>
@endsection