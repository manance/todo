<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index(){
        $diaries = Diary::all();
        return view('diary.index', compact('diaries'));
    }
    public function show(Diary $diary){
        return view('diary.show', compact('diary'));
    }
    public function create(Diary $diary){
        return view("diary.create", compact('diary'));
    }
    public function store(Request $request){
        $validated = $request->validate([
            "title" => "required|max:100",
            "body" => "required",
            "date" => "required|date"
        ]);
        Diary::create([
            "title" => $validated["title"],
            "body" => $validated["body"],
            "date" => $validated["date"]
        ]);
        return redirect("/diary");
    }
    public function edit(Diary $diary){
        return view("diary.edit", compact("diary"));
    }
    public function update(Request $request, Diary $diary){
        $validated = $request->validate([
            "title" => ["required", "max:100"],
            "body" => ["required"],
            "date" => ["required", "date"]
        ]);
        $diary->title = $request["title"];
        $diary->body = $request["body"];
        $diary->date = $request["date"];
        $diary->save();
        return redirect("/diary/$diary->id");
    }
}
