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
}
