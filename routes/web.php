<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{ActivityController, CourseController, CourseDetailController, GalleryController, HomeController, LectureController, MultimediaController, NewsController, OrganizationController, StudentsController, SubjectController};
use App\Http\Controllers\Front\{AboutController};


Auth::routes();
Route::resource('course-details', CourseDetailController::class);
Route::get('/', function(){
    return view('welcome');
})->name('landing');
Route::get('/orgs',[AboutController::class, 'organization'])->name('organization');



//-----------------------Admin--------------------------------------------//
Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/home', [HomeController::class, 'index']);
    Route::resource('/news', NewsController::class);
    Route::resource('/lectures', LectureController::class);
    Route::resource('/subjects', SubjectController::class);
    Route::resource('/students', StudentsController::class);
    Route::resource('/organizations', OrganizationController::class);
    Route::resource('/multimedia', MultimediaController::class);
    Route::resource('/galleries',GalleryController::class);
    Route::resource('courses', CourseController::class);
    Route::resource('course-details', CourseDetailController::class);
    Route::resource('activity_titles', ActivityController::class);
});

