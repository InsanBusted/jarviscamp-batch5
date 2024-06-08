<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/task', [TasksController::class, 'index']);
