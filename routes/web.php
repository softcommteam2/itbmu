<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{ActivityController, CourseController, CourseDetailController, GalleryController, HomeController, LectureController, MultimediaController, NewsController, OrganizationController, StudentsController, SubjectController};
use App\Http\Controllers\Front\{AboutController, AdmissionController, ExamResultController, FacilitiesController, MainController, MediaController};


Auth::routes();

//-------------------------About Tab---------------------------------------------//
Route::get('/setups',[AboutController::class, 'setup'])->name('setup');
Route::get('/faculities',[AboutController::class, 'faculities'])->name('faculities');
Route::get('/course-years',[AboutController::class, 'course_year'])->name('courses');
Route::get('/mottos',[AboutController::class, 'mottos'])->name('mottos');
Route::get('/orgs',[AboutController::class, 'organization'])->name('organizations');
//-------------------------End About Tab----------------------------------------//

//-------------------------Admissions Tab--------------------------------------//
Route::get('/appforms',[AdmissionController::class, 'appform'])->name('appform');
Route::get('/appform2',[AdmissionController::class, 'appform2'])->name('appform2');
//-------------------------End Admissions Tab----------------------------------//

//-------------------------Media Tab-------------------------------------------//
Route::get('/events',[MediaController::class, 'news'])->name('new');
Route::get('/event-detail/{id}',[MediaController::class, 'new_details'])->name('new-details');
Route::get('/audios',[MediaController::class, 'mediamp3'])->name('mediamp3');       //Multimedia->audios
Route::get('/videos',[MediaController::class, 'mediamp4'])->name('mediamp4');       //Multimedia->videos
//-------------------------End Media Tab--------------------------------------//

//-------------------------Facilities Tab-------------------------------------//
Route::get('/centralmains',[FacilitiesController::class, 'centralmain'])->name('centralmain');
Route::get('/librarys',[FacilitiesController::class, 'library'])->name('library');       //About Library
Route::get('/books',[FacilitiesController::class, 'booklist'])->name('booklist');
Route::get('/dormitories',[FacilitiesController::class, 'dormitories'])->name('dormitories');
//-------------------------End Facilities Tab---------------------------------//

//-------------------------Exam Result----------------------------------------//
Route::get('/entrance-exams',[ExamResultController::class, 'entrance_exam'])->name('entrance');
//-------------------------End Exam Result------------------------------------//

//-------------------------Other Menu Tab-------------------------------------//
Route::get('/',[MainController::class, 'home'])->name('home');
Route::get('/home',[MainController::class, 'home'])->name('home');
Route::get('/photo-gallereries',[MainController::class, 'gallery'])->name('photo-gallery');        //University Activities
Route::get('/faqs',[MainController::class, 'faq'])->name('faq');
//-------------------------End Other Menu Tab---------------------------------//








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

