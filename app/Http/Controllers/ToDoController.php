<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\ToDo;
use Illuminate\Http\Request;

class ToDoController extends Controller{
    public function index(User $user){
        $todos = $user->todos();
        return view('todos.index', compact('todos'));
    }

    public function show(ToDo $todo, User $user){
        $todo = ToDo::where('user_id', $user->id)->firstOrFail();
        return view('todos.show', compact('user_todo'));
    }

    public function create(ToDO $todo, User $user){
        $todo = ToDo::where('user_id', $user->id)->firstOrFail();
        return view('todos.create', compact('todo'));
    }

    public function store(Request $request){
        $validated = $request->validate([
            "content" => "required|max:255",
            "priority" => ["required"],
            "id" => ["required"]
        ]);
        ToDo::create([
            "content" => $validated["content"],
            "priority" => $validated["priority"],
            "completed" => false,
            "user_id" => $validated["id"]
        ]);
        $request->session()->regenerate();
        return redirect("/todos");
    }

    public function edit(ToDo $todo, User $user){
        $todo = ToDo::where('user_id', $user->id)->firstOrFail();
        return view('todos.edit', compact('todo'));
    }

    public function update(Request $request, ToDo $todo){
        $validated = $request->validate([
            "content" => ["required", "max:255"],
            "completed" => ["boolean"]
        ]);
        $todo->update([
            "content" => $validated["content"],
            "completed" => $validated["completed"]
        ]);
        $todo->save();
        $request->session()->regenerate();
        return redirect("/todos/$todo->id");
    }

    public function destroy(ToDo $todo){
        $todo->delete();
        return redirect("/todos");
    }
}
