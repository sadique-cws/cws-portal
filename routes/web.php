<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;

Route::get('/', function () {
    return view('home');
});

Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"index"])->name("admin.dashboard");
    Route::resource('course', CourseController::class);
});