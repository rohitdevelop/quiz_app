<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $admin = Admin::where('name', $request->name)
              ->where('password', $request->password)
              ->first();

if ($admin) {
    return view('admin', ["name" => $admin->name]);
} else {
    return redirect()->back()->with('error', 'Invalid credentials');
}

    }
}
