<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Complain;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class complainController extends Controller
{
    public function index(){
        return view('complain');
    }

    public function registerPost(Request $request)
    {   
        $validated = $request->validate([
            'name' => 'required',
            'email'=> 'required|unique:complain_user',
            'password' => 'required|min:3',
        ]);

        $complain = new Complain;
        $complain->name = $validated['name'];
        $complain->email = $validated['email'];
        $complain->password = Hash::make($validated['password']);

        if ($complain->save()) {
            Alert::success('Success', 'Register Successful')->persistent(true);
            return redirect('/complain');
        } else {
            Alert::error('Error', 'Register Failed')->persistent(true);
            return redirect()->back();
        }
    }

    public function loginPost(Request $request){
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return redirect()->intended('/uploadComplain')->with('success', 'Login Successfully');
        } else {
            return back()->with('loginError', 'Login Failed');
        }
    }


}
