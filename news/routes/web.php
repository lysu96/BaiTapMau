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

Route::get('admin', function () {
    return view('admin/home');
});
Route::group(['prefix'=>'customer','middleware'=>'customerLogin'],function(){
	Route::resource('post','postController');
});
Route::group(['prefix'=>'admin','middleware' => 'adminLogin'],function(){
	Route::resource('post','postController');
	Route::resource('category','categoryController');
	Route::resource('checkpost','checkpostController');
});
Route::resource('/home','userController');

Route::get('login', 'Auth\\ctmLoginController@showFormLogin')->name('showFormLogin');
Route::post('login','Auth\\ctmLoginController@login')->name('postLogin');
Route::get('logout','Auth\\ctmLoginController@logout')->name('logout');