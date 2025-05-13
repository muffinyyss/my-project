<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    // แสดงหน้า Login Form
    public function showLoginForm()
    {
        if (Session::get('logged_in')) {
            // ถ้าผู้ใช้ล็อกอินแล้ว ไปที่หน้า /test
            return redirect('/test');
        }

        // ถ้ายังไม่ล็อกอิน แสดงหน้า login
        return view('authen.login');
    }

    // ฟังก์ชันการ Login
    public function login(Request $request)
    {
        // ตรวจสอบค่าที่กรอกในฟอร์ม
        $request->validate([
            'site' => 'required|string',
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        // ข้อมูลที่อนุญาตให้เข้าใช้งาน (กำหนดล่วงหน้า)
        $validSite = 'esm';
        $validUsername = 'admin';
        $validPassword = '123';

        // ตรวจสอบข้อมูล
        if (
            $request->site === $validSite &&
            $request->username === $validUsername &&
            $request->password === $validPassword
        ) {
            // เก็บข้อมูล session เมื่อ login สำเร็จ
            Session::put('logged_in', true);
            Session::put('site', $request->site);
            Session::put('username', $request->username);

            // Redirect ไปหน้า test
            return redirect()->route('testTem');

        }

        // ถ้าข้อมูลผิด ล้าง session เผื่อมีค้าง
        Session::forget('logged_in');
        // ถ้าข้อมูลผิด กลับมาที่หน้า login และแสดงข้อผิดพลาด
        return back()->withErrors(['login' => 'Invalid site, username, or password']);
    }

    // ฟังก์ชันการ Logout
    public function logout()
    {
        // ล้างข้อมูลใน session
        Session::flush();
        return redirect('/'); // ไปหน้า login
    }
}
