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
use App\sach;

Route::get('/', function () {

    return view('welcome');
});
Route::get('thu', function () {
	$sach = knsach::find(HDBT01);
    foreach ($sach -> $loaiSach as $value) {
    	echo $value -> ngayTra."<br>";
    }
});
Route::group(['prefix'=>'xuly'],function()
{
	Route::get('them','xulyController@getadd');
		
	Route::get('sua','xulyController@getedit');
	Route::get('list','xulyController@getlist');

});
// Route::get('thu',function()
// {
// 	$maSach = sach::find(1);
// 	foreach ($maSach) {
// 		echo $maSach;
// 	}
// });



