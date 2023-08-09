<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;


class RegisterController extends Controller
{
    public function register(){
        return view('Fale.register');
    }
    public function post_register(Request $req){
        
        User::create([
            'name'=> $req->name,
            'email'=> $req->email,
            'password'=>Hash::make( $req->password)
        ]);

        return redirect()->route('login');
    }

    public function login(){
        return view('Fale.login');
    }
    public function post_login(Request $req){
        // dd(Auth);
        if(Auth::attempt($req->only('email','password'))){

            
            if ($req->page == 'checkout') {
                return redirect()->route('checkout');
            }else{
                return redirect()->route('home');
            }

        }else{
            return redirect()->route('login_kh');
        }
    }
}
