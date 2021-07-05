<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{News,Multimedia};

class MediaController extends Controller
{
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
    public function magazine()
    {
        return view('front.magazine');
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
