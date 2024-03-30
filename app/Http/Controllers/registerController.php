<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class registerController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerPost(Request $request)
    {   
        $validated = $request->validate([
            'name' => 'required',
            'email'=> 'required|unique:users',
            'password' => 'required|min:3',
        ]);

        
        $user = new User;
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->save();

        return redirect('/login')->with('success', 'Register Successfully');
    }
}
