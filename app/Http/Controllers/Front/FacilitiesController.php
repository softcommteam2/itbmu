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

    public function medical_facilities()
    {
        return view('front.medical-facilities');
    }

    public function meditation_hall()
    {
        return view('front.meditation_hall');
    }

    public function sima()
    {
        return view('front.sima');
    }

    public function tooth_pagoda()
    {
        return view('front.tooth_pagoda');
    }
}
