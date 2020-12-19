<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('',['as'=>'index','uses'=>'phoneController@index']);

Route::get('lienhe',function ()
{
	return view('lienhe');
});

Route::get('dtdd',['as'=>'all','uses'=>'phoneController@getAll']);

Route::get('dtdd/{hsx}',['as'=>'hsx','uses'=>'phoneController@getHSX']);

Route::get('dienthoai/{link}',['as'=>'dienthoai','uses'=>'phoneController@getDienThoai']);

Route::get('tin-cong-nghe/{id}',['as'=>'tcn','uses'=>'phoneController@getTCN']);

Route::post('register',['as'=>'SaveUsers','uses'=>'phoneController@SaveUsers']);

Route::post('login',['as'=>'Login','uses'=>'phoneController@Login']);


Route::get('logout',['as'=>'logout','uses'=>'phoneController@Logout']);

Route::get('login', function () {
	return view('login')->with('kt',true);
});


Route::get('register', function () {
	return view('register');
});


Route::get('account',['as'=>'account','uses'=>'phoneController@account']);

Route::get('account/edit',function ()
{
	return view('account.edit');
});
Route::post('account/edit',['as'=>'Edit','uses'=>'phoneController@Edit']);
Route::post('admin/taikhoan/sua',['as'=>'Edituser','uses'=>'phoneController@Edituser']);

Route::group(['middleware' => ['web']], function () {
    Route::post('luu-gio-hang',['as'=>'save-gio-hang','uses'=>'phoneController@saveGioHang']);
    Route::get('gio-hang',['as'=>'gio-hang','uses'=>'phoneController@gioHang']);
    Route::get('dat-hang-thanh-cong',['as'=>'dat-hang-thanh-cong','uses'=>'phoneController@datHangThanhCong']);
    Route::get('admin',['as'=>'admin','uses'=>'phoneController@admin']);
    Route::get('gio-hang/dh',['as'=>'datHangThanhVien','uses'=>'phoneController@datHangThanhVien']);
});

// Tài khoản

Route::get('admin/taikhoan/sua/{id}',['as'=>'EditUsers','uses'=>'phoneController@EditUsers']);
Route::get('admin/taikhoan/xoa/{id}',['as'=>'DeleteUsers','uses'=>'phoneController@DeleteUsers']);

// Sản phẩm
Route::get('admin/sanpham/themsanpham',['as'=>'themsp','uses'=>'phoneController@themsp']);
Route::post('admin/sanpham/themsanpham',['as'=>'themsanpham','uses'=>'phoneController@themsanpham']);
Route::post('admin/sanpham/sua',['as'=>'suasp','uses'=>'phoneController@suasp']);
Route::get('admin/sanpham/sua/{id}',['as'=>'EditProducts','uses'=>'phoneController@EditProducts']);
Route::get('admin/sanpham/xoa/{id}',['as'=>'DeleteProducts','uses'=>'phoneController@DeleteProducts']);

// Tin công nghệ

Route::get('admin/tcn/themtincongnghe',['as'=>'themtcn','uses'=>'phoneController@themtcn']);
Route::post('admin/tcn/themtincongnghe',['as'=>'themtincongnghe','uses'=>'phoneController@themtincongnghe']);
Route::post('admin/tcn/sua',['as'=>'suatcn','uses'=>'phoneController@suatcn']);
Route::get('admin/tcn/sua/{id}',['as'=>'EditTcn','uses'=>'phoneController@EditTcn']);
Route::get('admin/tcn/xoa/{id}',['as'=>'DeleteTcn','uses'=>'phoneController@DeleteTcn']);

// Giỏ hàng

// Route::get('admin/taikhoan/sua/{id}',['as'=>'EditUsers','uses'=>'phoneController@EditUsers']);
// Route::get('admin/taikhoan/xoa/{id}',['as'=>'DeleteUsers','uses'=>'phoneController@DeleteUsers']);

Route::post('timkiem',['as'=>'timkiem','uses'=>'phoneController@timkiem']);
Route::get('admin/don-hang/duyet/{id}',['as'=>'duyet','uses'=>'phoneController@duyet']);
Route::get('admin/don-hang-tv/duyet/{id}',['as'=>'duyet2','uses'=>'phoneController@duyet2']);
Route::get('admin/don-hang/{id}',['as'=>'chitietdonhang','uses'=>'phoneController@chitietdonhang']);
Route::get('gio-hang/xoa/{id}',['as'=>'xoaDonHang','uses'=>'phoneController@xoaDonHang']);