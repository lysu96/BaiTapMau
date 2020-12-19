@extends('layouts.master')

@section('title','Đăng ký thành viên - Shop bán điện thoại Phone Store')

@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="{{Route('SaveUsers')}}">
           {{csrf_field()}}
           <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Đằng ký thành viên mới</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Họ tên</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                        <input type="text" name="name" class="form-control" id="name"
                        placeholder="Hoàng Quân" required autofocus>
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
                        placeholder="0336668888" required autofocus>
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
                        placeholder="you@example.com" required autofocus>
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
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Đăng ký</button>
            </div>
        </div>
    </form>
</div>
</body>
@endsection