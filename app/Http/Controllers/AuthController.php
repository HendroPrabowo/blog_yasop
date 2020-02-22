<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Hash;

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

    public function showChangePasswordForm(Request $request){
        return view('auth.changepassword');
    }

    public function changePassword(Request $request) {
        
        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Password lama tidak sesuai");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            //Current password and new password are same
            return redirect()->back()->with("error","Password lama tidak boleh sama dengan password baru");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required',
        ]);

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        return redirect()->back()->with("success","Password berhasil diganti!");

    } 
}
