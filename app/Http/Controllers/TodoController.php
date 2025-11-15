<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index() {
        $todos = Todo::orderBy('created_at','desc')->get();
        return view('todo', compact('todos'));
    }

    public function store(Request $request) {
        $request->validate(['title'=>'required']);
        Todo::create(['title'=>$request->title]);
        return redirect('/');
    }

    public function toggle($id) {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();
        return redirect('/');
    }

    public function destroy($id) {
        Todo::find($id)->delete();
        return redirect('/');
    }
}
