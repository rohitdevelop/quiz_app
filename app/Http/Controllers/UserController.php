<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Quiz;

class UserController extends Controller
{
  function Welcome(){
    $categories = Category::withCount('quizzes')->get();
        //  return view('welcome');
    //    $quizData=Quiz::withCount('Records')->orderBy('records_count','desc')->take(5)->get();
        return view('welcome',['categories'=>$categories]);
    }
  function userQuizeList($id,$category){
     
        $quizData=Quiz::where('category_id',$id)->get();
           return view('user-quiz-list',["quizData"=>$quizData,'category'=>$category]);
      
    }

}
