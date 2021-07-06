<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamResultController extends Controller
{

    public function entrance_exam()
    {
        return view('front.entrance-exam');
    }

    public function diploma()
    {
        return view('front.diploma');
    }

    public function graduate()
    {
        return view('front.graduate');
    }

    public function ma_graduate()
    {
        return view('front.ma-graduate');
    }

    public function pa_graduate()
    {
        return view('front.pa-graduate');
    }
}
