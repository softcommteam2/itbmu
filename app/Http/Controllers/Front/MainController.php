<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{News,Gallery};
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
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
        $galleries = Gallery::paginate(5);       
        return view('front.photo-gallery', compact('galleries'));
    }
    public function faq()
    {
        return view('front.faq');
    }

    public function contact_us()
    {
        return view('front.contact-us');
    }

    public function feedback()
    {
        return view('front.feedback');
    }

}
