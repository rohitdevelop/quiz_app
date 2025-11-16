<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/about', function () {
    return view('about.index', ["name" => "rohit singh"]);
});

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/admin-login', function () {
    return view('admin-login');
});
 

Route::post('admin-login',[AdminController:: class,'login']);