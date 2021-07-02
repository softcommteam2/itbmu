<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Course, Organization,News,Gallery, Multimedia};
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function home()
    {
        $announcements = News::where('type', '0');
        $news = News::where('type','1');
        return view('front.layout.home',compact('announcements','news'));
    }
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
    public function new_details($id)
    {
       $new = News::findOrFail($id);
       
        return view('front.news-detail',compact('new'));
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

    public function setup()
    {
        return view('front.setup');
    }

    public function faq()
    {
        return view('front.faq');
    }

    public function entrance_exam()
    {
        return view('front.entrance-exam');
    }

    public function appform()
    {
        return view('front.appform');
    }
    public function appform2()
    {
        return view('front.appform2');
    }

    public function centralmain()
    {
        return view('front.centralmain');
    }

    public function library()
    {
        return view('front.library');
    }

    public function booklist()
    {
        return view('front.booklist');
    }

    public function dormitories()
    {
        return view('front.dormitories');
    }
}