<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/todos', [ToDoController::class, 'index']);
Route::get("/todo/{todo}", [ToDoController::class, 'show']);

Route::get('/diary', [DiaryController::class, 'index']);
Route::get('/diary/{diary}', [DiaryController::class, 'show']);