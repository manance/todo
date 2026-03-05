<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use App\Models\User;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index(User $user){
        $diaries = $user->diaries();
        return view('diary.index', compact('diaries'));
    }
    public function show(Diary $diary, User $user){
        $diary = Diary::where('user_id', $user->id)->firstOrFail();
        return view('diary.show', compact('diary'));
    }
    public function create(Diary $diary, User $user){
        $diary = Diary::where('user_id', $user->id)->firstOrFail();
        return view("diary.create", compact('diary'));
    }
    public function store(Request $request){
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
    public function edit(Diary $diary, User $user){
        $diary = Diary::where('user_id', $user->id)->firstOrFail();
        return view("diary.edit", compact("diary"));
    }
    public function update(Request $request, Diary $diary){
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

    public function destroy(Diary $diary){
        $diary->delete();
        return redirect("/diary");
    }
}
