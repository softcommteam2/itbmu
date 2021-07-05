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
}
