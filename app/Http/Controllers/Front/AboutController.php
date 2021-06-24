<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Course, Organization,News,Gallery, Multimedia};
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function organization()
    {
       $organizations = Organization::class;
       
        return view('front.organization',compact('organizations'));
    }

    public function news()
    {
       $news = News::all();
       
        return view('front.news',compact('news'));
    }

    public function gallery()
    {
        $galleries = Gallery::orderBy('created_at')->get()->groupBy(function($data) {
            return $data->titleid;
        });
    
        return view('front.photo-gallery', compact('galleries'));
    }

    public function course_year()
    {
        $courses = Course::all();
        return view('front.course_year', compact('courses'));
    }

    public function mediamp3()
    {
        $medias = Multimedia::class;
        return view('front.mediamp3', compact('medias'));
    }
    public function mediamp4()
    {
        $medias = Multimedia::class;
        return view('front.mediamp4', compact('medias'));
    }
}