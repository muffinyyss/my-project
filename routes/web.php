<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;





// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);


// หน้า Login
Route::get('/', [LoginController::class, 'showLoginForm'])
    ->middleware('guest')
    ->name('login');

Route::post('/', [LoginController::class, 'login']);

// หน้า test หลัง login แล้ว
Route::get('/test', function () {
    return view('testTem');
})->middleware('auth');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


