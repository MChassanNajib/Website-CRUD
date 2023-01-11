<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login(){
        return view('loginview/login');
    }
    public function loginsuccess(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($infologin)) {
            return redirect('/bongkaran/all')->with('Successfully', 'Berhasil login');
        } else {
            return redirect('/loginview')->withErrors('Username dan password yang dimasukkan tidak valid');
        }
    }

    function signoutt(){
        Auth::signoutt();
        return redirect('loginview')-with('Successfully','Berhasil logout');
    }
   
}