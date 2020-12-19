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

Route::get('/', function () {
    return view('welcome');
});
Route::get('tong/{a}/{b}', function ($a ,$b)
{
	$tong = $a + $b;
	return $tong;
});

Route::group('pro'=>'admin',function ()
{
	Route::get('home',function ()
	{
		return "home";
	});
	Route::get('anh', function ()
	{
		return "trang anh";
	})
});


