<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            'title'=>'Login'
        ]);
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();



         if(auth()->user()->is_admin){
                 return redirect()->intended('/dashboard/pembeli');
         }
        return redirect()->intended('/belanja');

        }
        return back()->with('loginError','Login Failed');
    }

    public function logout(Request $request){
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/home');

       }
}
