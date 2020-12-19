@extends('layouts.master')

@section('title','Đăng nhập - Shop bán điện thoại Phone Store')

@section('content')

<!DOCTYPE html>
<html lang="en">
<body>
    <div class="container">
        <form class="form-horizontal" role="form" method="POST" action="{{Route('Login')}}">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Đăng nhập</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group has-danger">
                        <label class="sr-only" for="email">Số điện thoại</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-phone"></i></div>
                            <input type="text" name="sdt" class="form-control" id="sdt"
                            placeholder="0336668888" required autofocus>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <i class="fa fa-close"></i> Example error message
                        </span>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="sr-only" for="password">Mật khẩu</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                            <input type="password" name="password" class="form-control" id="password"
                            placeholder="Mật khẩu" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <!-- Put password error message here -->    
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                            <?php if ($kt==false): ?>
                                <i class="fa fa-close"></i> Sai tên tài khoản hoặc mật khẩu.
                            <?php endif ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6" style="padding-top: .35rem">
                    <div class="form-check mb-2 mr-sm-2 mb-sm-0">
                        <label class="form-check-label">
                            <input class="form-check-input" name="remember"
                            type="checkbox" >
                            <span style="padding-bottom: .15rem">Ghi nhớ tôi</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i> Đăng nhập</button>
                    <a class="btn btn-link" href="/password/reset">Quên mật khẩu?</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
@endsection