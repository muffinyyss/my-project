<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;



Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/Home', function () {
    return view('Home'); // หรือใช้ Controller ถ้ามี
})->name('Home');
