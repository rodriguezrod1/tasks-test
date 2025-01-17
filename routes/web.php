<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Middleware\CheckAuth;


Route::get('/', function () {
    return redirect('tasks');
});


Route::middleware(CheckAuth::class)->group(function () {
    Route::resource('tasks', TaskController::class);
});
