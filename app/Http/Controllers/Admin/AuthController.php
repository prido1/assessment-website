<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('admin.pages.login');
    }

    public function signIn(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);
        $loginData = array_merge($loginData);
        if (!auth()->attempt($loginData)) {
            return redirect()->back()->with(['error'=> 'invalid credentials']);
        }
        return redirect()->intended('/admin/settings');
    }

    public function logout(){
        Auth::logout();
        return redirect('login');
    }
}
