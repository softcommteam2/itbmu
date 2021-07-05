<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\{Course, Organization,News,Gallery, Multimedia};
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function setup()
    {
        return view('front.setup');
    }

    public function faculities()
    {
        return view('front.faculities');
    }
    public function course_year()
    {
        $courses = Course::all();
        return view('front.course_year', compact('courses'));
    }

    public function mottos()
    {
        return view('front.mottos');
    }

    public function organization()
    {
       $organizations = Organization::class;

        return view('front.organization',compact('organizations'));
    }





}
