<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{CourseController, CourseDetailController};

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/test', function () {
    return view('dropdown');
});
Route::resource('/news', \App\Http\Controllers\NewsController::class);

Route::resource('courses', CourseController::class);
Route::resource('course-details', CourseDetailController::class);


