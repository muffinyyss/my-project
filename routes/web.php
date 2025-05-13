<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Session;


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::get('/login', [LoginController::class, 'login']);


// หน้า Login
Route::get('/', [LoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');


// หน้า test หลัง login แล้ว
// Route::get('/test', function () {
//     return view('testTem');
// })->middleware('auth')
//   ->name('testTem');

// Route::get('/test', function () {
//     return view('testTem');
// })->middleware(function ($request, $next) {
//     if (!Session::get('logged_in')) {
//         return redirect('/')->withErrors(['login' => 'กรุณาเข้าสู่ระบบก่อน']);
//     }
//     return $next($request);
// })->name('testTem');


// // Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


