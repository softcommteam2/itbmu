<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{CourseController, CourseDetailController,HomeController, LectureController, NewsController};

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

// Route::get('/home', [HomeController::class, 'index']);
// Route::resource('/news', NewsController::class);
// Route::resource('courses', CourseController::class);
// Route::resource('course-details', CourseDetailController::class);

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);
    Route::resource('/news', NewsController::class);
    Route::resource('/news', LectureController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('course-details', CourseDetailController::class);
});

