<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Organization,News,Gallery};
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
        $galleries = Gallery::all();
        return view('front.photo-gallery', compact('galleries'));
    }
}
