<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('authen.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'site' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // ข้อมูลที่อนุญาตให้เข้าใช้งาน (กำหนดล่วงหน้า)
        $validSite = 'esm';
        $validUsername = 'admin';
        $validPassword = '123';

        if (
            $request->site === $validSite &&
            $request->username === $validUsername &&
            $request->password === $validPassword
        ) {
            Session::put('logged_in', true);
            Session::put('site', $request->site);
            Session::put('username', $request->username);
            return redirect('/dashboard');
        }

        return back()->withErrors(['login' => 'Invalid site, username, or password']);
    }

    // public function dashboard()
    // {
    //     if (!Session::get('logged_in')) {
    //         return redirect('/login');
    //     }

    //     return view('testTem');
    // }

    // public function logout()
    // {
    //     Session::flush();
    //     return redirect('/login');
    // }
}
