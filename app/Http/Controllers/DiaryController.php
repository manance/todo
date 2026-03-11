<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Diary;
use App\Models\User;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index(User $user)
    {
        $diaries = $user->diaries();
        return view('diary.index', compact('diaries'));
    }
    public function show(Diary $diary)
    {
        if($diary->user_id !== Auth::id()){
            abort(404, "Page not found.");
        }
        return view('diary.show', compact('diary'));
    }
    public function create()
    {
        return view("diary.create");
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "title" => "required|max:100",
            "body" => "required",
            "date" => "required|date",
            "id" => ["required"]
        ]);
        Diary::create([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated["date"],
            "user_id" => $validated["id"]
        ]);
        $request->session()->regenerate();
        return redirect("/diary");
    }
    public function edit(Diary $diary, User $user)
    {
        if ($diary->user_id !== Auth::id()) {
            abort(404, "Page not found.");
        }
        return view("diary.edit", compact("diary"));
    }
    public function update(Request $request, Diary $diary)
    {
        $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required"],
            "date" => ["required", "date"]
        ]);
        $diary->update([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated["date"]
        ]);
        $diary->save();
        $request->session()->regenerate();
        return redirect("/diary/$diary->id");
    }

    public function destroy(Diary $diary)
    {
        $diary->delete();
        return redirect("/diary");
    }
}
