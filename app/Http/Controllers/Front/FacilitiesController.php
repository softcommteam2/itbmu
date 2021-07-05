<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacilitiesController extends Controller
{

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
