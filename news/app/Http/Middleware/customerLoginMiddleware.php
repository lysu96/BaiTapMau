<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class customerLoginMiddleware
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
            if (Auth::user()->role == 1) {
                return $next($request);
            }else{
                return redirect('/login')->with('thongbao','Bạn không có quyền vào trang của người quản trị');
            }
        }else{
            return redirect('/login')->with('thongbao','Bạn cần đăng nhập đã');
        }
    }
}
