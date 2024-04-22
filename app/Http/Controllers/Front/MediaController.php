<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{News, Multimedia};
use Illuminate\Pagination\Paginator;

class MediaController extends Controller
{
    public function news()
    {
        $news = News::latest()->paginate(5);
        //    $currentPage = LengthAwarePaginator::resolveCurrentPage();
        return view('front.news', compact('news'));
    }
    public function new_details($id)
    {
        $new = News::findOrFail($id);
        return view('front.news-detail', compact('new'));
    }
    public function magazine()
    {
        return view('front.magazine');
    }
    public function mediamp3()
    {
        $medias = Multimedia::mp3()->paginate(10);
        return view('front.mediamp3', compact('medias'));
    }
    public function mediamp4()
    {
        $medias = Multimedia::mp4()->paginate(10);
        return view('front.mediamp4', compact('medias'));
    }
}
