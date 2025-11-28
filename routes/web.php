<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
   
 Route::get('/',[UserController:: class,'Welcome']);
//  Route::get('user-quize-list/{id}/category',[UserController:: class,'userQuizeList']);






Route::post('admin-login',[AdminController:: class,'login']);
Route::get('dashboard',[AdminController:: class,'dashboard']);
Route::get('admin-categories',[AdminController:: class,'categories']);
Route::get('admin-logout',[AdminController:: class,'logout']);
Route::post('add-category',[AdminController:: class,'addCategory']);
Route::delete('/delete-category/{id}', [AdminController::class, 'deleteCategory']);
Route::get('add-quiz',[AdminController:: class,'addQuiz']);
Route::post('add-mcq',[AdminController:: class,'addMCQs']);
Route::get('end-quiz',[AdminController:: class,'endQuiz']);
Route::get('show-quiz/{id}/{quizName}',[AdminController:: class,'showQuiz']);
Route::get('quiz-list/{id}/{category}',[AdminController:: class,'quizList']);