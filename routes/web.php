<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{CourseController, CourseDetailController,HomeController, LectureController, MultimediaController, NewsController, OrganizationController, StudentsController, SubjectController};
use App\Models\Multimedia;

Auth::routes();
Route::resource('course-details', CourseDetailController::class);

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);
    Route::resource('/news', NewsController::class);
    Route::resource('/lectures', LectureController::class);
    Route::resource('/subjects', SubjectController::class);
    Route::resource('/students', StudentsController::class);
    Route::resource('/organizations', OrganizationController::class);
    Route::resource('/multimedia', MultimediaController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('course-details', CourseDetailController::class);
});

