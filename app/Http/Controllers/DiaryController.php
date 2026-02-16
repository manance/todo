<?php

namespace App\Http\Controllers;
use App\Models\Diary;
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    public function index(){
        $last_todos = Diary::all();
        return view('diary.index', compact('last_todos'));
    }
    public function show($last_todos){
        $last_todo = Diary::findOrFail($last_todos);
        return view('diary.show', compact('last_todo'));
    }
}
