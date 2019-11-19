<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class AuthController extends Controller
{
	use AuthenticatesUsers;
    function login_form()
    {
    	return view('auth.login');
    }
    function login(Request $request)
    {

    	if ($this->attemptLogin($request)===true) {
    		return redirect()->route('users.index');
    	}else{
    		return redirect()->route('auth.login_form')->withErrors('sai thông tin tài khoản và mật khẩu')->withInput();
    	}
    }
    function logout()
    {
    	Auth::guard()->logout();
    	return redirect()->route('auth.login_form');
    }
}
