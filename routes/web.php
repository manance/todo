<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ToDoController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

Route::get('/todos', [ToDoController::class, 'index']);

