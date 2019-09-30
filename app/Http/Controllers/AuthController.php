<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate([
            'username' => 'required|string'
        ]);

        $user = User::create([
            'username'  => $request->username,
            'email'     => $request->email,
            'password'  => bcrypt($request->password),
        ]);

        dd($user);
    }

    public function login(Request $request){
        $request->validate([
            'username'  => 'required',
            'password'  => 'required',
        ]);


        // Cek login
        if(!Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            return redirect('/login')->with('status', 'Username atau Password Salah');
        }

        return redirect('/admin');
    }
}
