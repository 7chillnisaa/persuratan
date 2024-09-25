<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Has;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    public function index(){
        return view('sesi.index');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::attempt($credentials)) {
           
            return redirect()->intended('dashboard')->with('success', 'Login Telah berhasil');
        }
    
        
        return redirect('/sesi')->withErrors('Email atau password salah.');
    }

    
    public function logout(){
        Auth::logout();
        return redirect('sesi')->with('success','Anda Sudah Logout');
    }
}
