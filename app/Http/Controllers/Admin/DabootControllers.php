<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DabootControllers extends Controller
{
    public function login(){
        return view('Admin.page.login');
    }
    public function post_login(Request $req ){
        if(Auth::attempt($req->only('email','password'))){

            return redirect()->route('Category');
        }else{
            return redirect()->route('login');
        }
    }
    public function log_out(){
        Auth::logout();
        return redirect()->route('home');
    }
}
