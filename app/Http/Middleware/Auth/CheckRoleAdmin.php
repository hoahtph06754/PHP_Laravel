<?php

namespace App\Http\Middleware\Auth;

use Closure;
use Auth;

class CheckRoleAdmin
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
        if(Auth::check() !== true){
            return redirect()->route('auth.login_form');
        }
        if (Auth::user()->role != 'admin') {
            // abort(403);
            return redirect()->route('page');
        }
        return $next($request);
    }
}
