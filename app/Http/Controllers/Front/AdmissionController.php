<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function entrance_form()
    {
        return view('front.entrance-form');
    }

    public function appform()
    {
        return view('front.appform');
    }
    public function appform2()
    {
        return view('front.appform2');
    }

    public function cy_timetables()
    {
        return view('front.cy-timetables');
    }
}
