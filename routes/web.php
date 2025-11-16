<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about.index', ["name" => "rohit singh"]);
});

Route::get('/', function () {
    return view('welcome');
});


 

// Teas example route
Route::get('/teas', function () {
    $teas = [
        ["name" => "done its working one", "time" => 100, "id" => 1],
        ["name" => "done its working two", "time" => 200, "id" => 2],
        ["name" => "done its working three", "time" => 500, "id" => 3], // fixed duplicate ID
    ];
    return view('teas.index', ['teas' => $teas]);
});
