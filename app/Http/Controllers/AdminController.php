<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;
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
            $validation = $request->validate([
                "user" => "required",
                "password" => "required",
            ], [
                "user.require" => "user does not existed"
            ]);
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

    function categories() {
              $admin = Session::get('admin');
        if ($admin) {
            # code...
            return view('categories', ["name" => $admin->name]);
        } else {
            return  redirect('admin-login');
        };
    }
    function logout() {
        Session::forget('admin');
        return  redirect('admin-login');
    }
}
