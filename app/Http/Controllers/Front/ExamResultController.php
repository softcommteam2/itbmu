<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamResult;
class ExamResultController extends Controller
{

    public function entrance_exam()
    {
        $entrances = ExamResult::where('exam_type','E')->latest()->get();
        
        return view('front.entrance-exam',compact('entrances'));
    }

    public function diploma()
    {
        $diplomas = ExamResult::where('exam_type','DC')->latest()->get();
        return view('front.diploma', compact('diplomas'));
    }

    public function graduate()
    {
        $a_graduates = ExamResult::where('exam_type','GDA')->latest()->get();
        $b_graduates = ExamResult::where('exam_type','GDB')->latest()->get();
        return view('front.graduate',compact('a_graduates','b_graduates'));
    }

    public function ma_graduate()
    {
        $ma_graduatesI = ExamResult::where('exam_type','MAI')->latest()->get();
        $ma_graduatesII = ExamResult::where('exam_type','MAII')->latest()->get();
        return view('front.ma-graduate',compact('ma_graduatesI','ma_graduatesII'));
    }

    public function pa_graduate()
    {
        $pa_graduates = ExamResult::where('exam_type','PA')->latest()->get();
        return view('front.pa-graduate',compact('pa_graduates'));
    }
}
