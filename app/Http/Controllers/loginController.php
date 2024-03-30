<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class loginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            $accountType = $user->account_type;
            
            return redirect()->intended('/admin')->with('success', 'Login Successfully');
        } else {
            return back()->with('loginError', 'Login Failed');
        }
    }
}
