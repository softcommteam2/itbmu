<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\{ActivityController, CourseController, CourseDetailController, GalleryController, HomeController, LectureController, MultimediaController, NewsController, OrganizationController, StudentsController, SubjectController};
use App\Http\Controllers\Front\{AboutController, AdmissionController, ExamResultController, FacilitiesController, MainController, MediaController};
use PhpParser\Node\Stmt\Echo_;

Auth::routes();

//-------------------------About Tab---------------------------------------------//
Route::get('/setups',[AboutController::class, 'setup'])->name('setup');
Route::get('/faculities',[AboutController::class, 'faculities'])->name('faculities');
Route::get('/course-years',[AboutController::class, 'course_year'])->name('courses');
Route::get('/syllabus', [AboutController::class, 'syllabus'])->name('syllabus');
Route::get('/mottos',[AboutController::class, 'mottos'])->name('mottos');
Route::get('/orgs',[AboutController::class, 'organization'])->name('organizations');
//-------------------------End About Tab----------------------------------------//

//-------------------------Admissions Tab--------------------------------------//
Route::get('/entrance-form', [AdmissionController::class, 'entrance_form'])->name('entrance_form');
Route::get('/appforms',[AdmissionController::class, 'appform'])->name('appform');
Route::get('/appform2',[AdmissionController::class, 'appform2'])->name('appform2');
Route::get('/cy-timetables', [AdmissionController::class, 'cy_timetables'])->name('cy-timetables');      //course_year_timetable
//-------------------------End Admissions Tab----------------------------------//

//-------------------------Media Tab-------------------------------------------//
Route::get('/events',[MediaController::class, 'news'])->name('new');
Route::get('/event-detail/{id}',[MediaController::class, 'new_details'])->name('new-details');
Route::get('/magazine', [MediaController::class, 'magazine'])->name('magazine');
Route::get('/audios',[MediaController::class, 'mediamp3'])->name('mediamp3');       //Multimedia->audios
Route::get('/videos',[MediaController::class, 'mediamp4'])->name('mediamp4');       //Multimedia->videos
//-------------------------End Media Tab--------------------------------------//

//-------------------------Facilities Tab-------------------------------------//
Route::get('/centralmains',[FacilitiesController::class, 'centralmain'])->name('centralmain');
Route::get('/librarys',[FacilitiesController::class, 'library'])->name('library');       //About Library
Route::get('/books',[FacilitiesController::class, 'booklist'])->name('booklist');
Route::get('/dormitories',[FacilitiesController::class, 'dormitories'])->name('dormitories');
Route::get('/medical-facilities', [FacilitiesController::class, 'medical_facilities'])->name('medical-facilities');
Route::get('/meditation-hall', [FacilitiesController::class, 'meditation_hall'])->name('meditation-hall');
Route::get('/sima', [FacilitiesController::class, 'sima'])->name('sima');
Route::get('/tooth-pagoda', [FacilitiesController::class, 'tooth_pagoda'])->name('tooth-pagoda');       //sacred tooth relic pagoda
//-------------------------End Facilities Tab---------------------------------//

//-------------------------Exam Result----------------------------------------//
Route::get('/entrance-exams',[ExamResultController::class, 'entrance_exam'])->name('entrance');
Route::get('/diploma', [ExamResultController::class, 'diploma'])->name('diploma');
Route::get('graduate', [ExamResultController::class, 'graduate'])->name('graduate');
Route::get('/ma-graduate', [ExamResultController::class, 'ma_graduate'])->name('ma-graduate');
Route::get('/pa-graduate', [ExamResultController::class, 'pa_graduate'])->name('pa-graduate');
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

