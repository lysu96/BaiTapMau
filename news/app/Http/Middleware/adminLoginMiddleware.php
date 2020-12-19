<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class adminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if (Auth::user()->role == 2) {
                return $next($request);
            }else{
                return redirect('/login')->with('thongbao','Sai tài khoản hoặc mật khẩu');
            }
        }else{
            return redirect('/login')->with('thongbao','Bạn cần đăng nhập đã');
        }
        
        
    }
}
