<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $settings = Setting::first();
        return view('admin.auth.login', compact('settings'));
    }


    public function storeLogin(Request $request)
    {

        $credentials = $request->only('email', 'password');
        // Attempt to authenticate the admin
        if (Auth::guard('web')->attempt($credentials)) {
            // Authentication passed, redirect the authenticated user
            return redirect()->intended('admin/settings/create');
        }
        return back()->withErrors(['email' => 'Email Or Password Incorrect .'])->withInput($request->only('email'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();  //محو كل البيانات الخاصه بالجلسه من خلال هذه الداله

        $request->session()->regenerateToken(); //تستخدم لتغيير رمز التوكن الخاص بالجلسه

        return redirect('login');
    }
}
