<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Support\Facades\Redirect;

use function Pest\Laravel\session;

class AdminController extends Controller
{

    public function login(Request $request)
    {


        $validation = $request->validate([
            "name" => "required",
            "password" => "required",
        ]);
        $admin = Admin::where('name', $request->name)
            ->where('password', $request->password)
            ->first();
        if (!$admin) {
            $validation = $request->validate(["user" => "required", "password" => "required",], ["user.require" => "user does not existed"]);
        }

        if ($admin) {
            Session::put('admin', $admin);
            return  redirect('dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid credentials');
        }
    }

    function dashboard()
    {
        $admin = Session::get('admin');
        if ($admin) {
            # code...
            return view('admin', ["name" => $admin->name]);
        } else {
            return  redirect('admin-login');
        };
    }

    function categories()
    {
        $admin = Session::get('admin');

        if ($admin) {
            $categories = Category::all();
            return view('categories', [
                "name" => $admin->name,
                "categories" => $categories
            ]);
        } else {
            return redirect('admin-login');
        }


        $admin = Session::get('admin');
        if ($admin) {
            # code...
            return view('categories', ["name" => $admin->name]);
        } else {
            return  redirect('admin-login');
        };
    }
    function logout()
    {
        Session::forget('admin');
        return  redirect('admin-login');
    }
    function addCategory(Request $request)
    {
        $request->validate([
            "category" => "required|min:3|unique:categories,name"
        ]);

        $admin = Session::get('admin');

        $category = new Category();
        $category->name = $request->category;
        $category->creator = $admin->name;

        if ($category->save()) {
            Session::flash('success', "Category '{$request->category}' added successfully!");
        }

        return redirect('admin-categories');
    }
    function deleteCategory($id)
    {
        Category::destroy($id);
        return redirect('admin-categories')->with('success', 'Category deleted!');
    }

    function addQuiz()
    {
        $categories = Category::get();
        $admin = Session::get('admin');
        if ($admin) {
            $quizname = request('quiz');
            $category_id = request('category_id');
            if ($quizname && $category_id && !Session::has('quizeDetails')) {
                $quiz = new Quiz();
                $quiz->name = $quizname;
                $quiz->category_id = $category_id;

                if ($quiz->save()) {
                    Session::put('quizeDetails', $quiz);
                }
            }


            return view('add-quiz', ["name" => $admin->name, "categories" => $categories]);
        } else {
            return redirect('admin-login');
        };
    }
}
