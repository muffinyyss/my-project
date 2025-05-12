<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', function () {
    return view('testTem');
});

Route::get('/login', function () {
    return view('authen.login');
});
