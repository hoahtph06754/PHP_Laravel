<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Auth;

class CheckLogin
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
        if (Auth::check()===false) {
            return redirect()->route('auth.login_form')->withErrors('bạn phải đăng nhập');
        }
        return $next($request);
    }
}
