<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;





// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/test', function () {
    return view('testTem');
});


Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);


