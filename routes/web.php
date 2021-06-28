<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{ActivityController, CourseController, CourseDetailController, GalleryController, HomeController, LectureController, MultimediaController, NewsController, OrganizationController, StudentsController, SubjectController};
use App\Http\Controllers\Front\{AboutController};


Auth::routes();

Route::get('/',[AboutController::class, 'home'])->name('home');
Route::get('/home',[AboutController::class, 'home'])->name('home');

Route::get('/orgs',[AboutController::class, 'organization'])->name('organization');
Route::get('/events',[AboutController::class, 'news'])->name('new');
Route::get('/event-detail/{id}',[AboutController::class, 'new_details'])->name('new-details');
Route::get('/photo-gallereries',[AboutController::class, 'gallery'])->name('photo-gallery');
Route::get('/course-years',[AboutController::class, 'course_year'])->name('courses');
Route::get('/audios',[AboutController::class, 'mediamp3'])->name('mediamp3');
Route::get('/videos',[AboutController::class, 'mediamp4'])->name('mediamp4');
Route::get('/setups',[AboutController::class, 'setup'])->name('setup');
Route::get('/faqs',[AboutController::class, 'faq'])->name('faq');
Route::get('/entrance-exams',[AboutController::class, 'entrance_exam'])->name('entrance');
Route::get('/appforms',[AboutController::class, 'appform'])->name('appform');
Route::get('/appform2',[AboutController::class, 'appform2'])->name('appform2');
Route::get('/centralmains',[AboutController::class, 'centralmain'])->name('centralmain');
Route::get('/librarys',[AboutController::class, 'library'])->name('library');
Route::get('/books',[AboutController::class, 'booklist'])->name('booklist');
Route::get('/dormitories',[AboutController::class, 'dormitories'])->name('dormitories');
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

