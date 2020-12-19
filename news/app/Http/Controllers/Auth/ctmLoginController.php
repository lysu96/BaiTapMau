<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;	
use Auth;
class ctmLoginController extends Controller
{
    //
    public function showFormLogin(){
    	return view('auth/login');
    }
    public function login(Request $request){
    	$check      =   $request->validate([
            'email'  =>  'required|email',
            'password'  =>  'required|string|min:6'
        ],[
        	'email.required' => 'Bạn chưa nhập email',
        	'email.email' =>'Email sai định dạng',
        	'password.required' => 'Mật khẩu không được để trống',
        	'password.min' =>'Mật khẩu phải có lớn hơn 6 kí tự'
        ]
    	);
    	$email = $request->email;
    	$password = $request->password;
        if (Auth::attempt(['email'=>$email,'password'=>$password])){
            if(Auth::user()->role==2){
                return redirect('/admin/post')->with('notify_login','Đăng nhập thành công');
            }
        	if(Auth::user()->role==1){
                return redirect('/customer/post')->with('notify_login','Đăng nhập thành công');
            }
        }
        else return redirect('/login')->with('notify_login','Sai tài khoản hoặc mật khẩu');
    }
    public function logout(){
    	Auth::logout();
    	return redirect('/login');
    }
}
