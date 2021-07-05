<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{News,Gallery};

class MainController extends Controller
{
    public function home()
    {
        $announcements = News::where('type', '0')->orderBy('upcomedate')->latest()->get();
        $news = News::where('type','1')->latest()->get();
        return view('front.layout.home',compact('announcements','news'));
    }
    public function gallery()
    {
        $galleries = Gallery::orderBy('created_at')->get()->groupBy(function($data) {
            return $data->titleid;
        });

        return view('front.photo-gallery', compact('galleries'));
    }
    public function faq()
    {
        return view('front.faq');
    }

}
