<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show(){
        // dd('Hello');
        return view('auth.login');
    }

    public function login(Request $request){
   $credentials=$request->except('_token');
    if (!Auth::validate($credentials)) {
        return redirect()->to('login');
        
    }
    if (Auth::attempt($credentials)) {
        return redirect()->intended('/');
        
    }
    }
}
