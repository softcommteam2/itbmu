<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{ActivityController, CourseController, CourseDetailController, GalleryController, HomeController, LectureController, MultimediaController, NewsController, OrganizationController, StudentsController, SubjectController};
use App\Http\Controllers\Front\{AboutController};


Auth::routes();
// Route::resource('course-details', CourseDetailController::class);
Route::get('/home', function(){
    return view('front.layout.home');
});
Route::get('/', function(){
    return view('front.layout.home');
});
Route::get('/orgs',[AboutController::class, 'organization'])->name('organization');
Route::get('/events',[AboutController::class, 'news'])->name('new');
Route::get('/event-detail',function(){
    return view('front.news-detail');})->name('new-details');
Route::get('/photo-gallery',[AboutController::class, 'gallery'])->name('photo-gallery');
Route::get('/course-year',[AboutController::class, 'course_year'])->name('courses');
Route::get('/audios',[AboutController::class, 'mediamp3'])->name('mediamp3');
Route::get('/videos',[AboutController::class, 'mediamp4'])->name('mediamp4');



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

