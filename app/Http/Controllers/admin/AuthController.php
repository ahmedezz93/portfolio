<?php

namespace App\Http\Controllers\admin;

use App\Helpers\MessageHelper;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            return redirect()->intended('admin/accountSetting');
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

    public function accountSetting()
    {
        $user = Auth::user();
        return view('admin.auth.accountSetting', compact('user'));
    }
    /**
     * Update the authenticated user's account settings.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateAccountSetting(Request $request)
    {
    $user = Auth::user();

    $request->validate([
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $data = [
        'email' => $request->email,
    ];

    if ($request->filled('password')) {
        $data['password'] = bcrypt($request->password);
    }

    DB::table('users')->where('id', $user->id)->update($data);

        MessageHelper::getUpdateMessage();
        return back();
    }
}
