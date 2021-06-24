<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CourseDetail, Course};

class CourseDetailController extends Controller
{

    public function index()
    {
        $course_details = CourseDetail::paginate(10);
        return view('course-detail.index',  compact('course_details'));
    }


    public function create()
    {
        $courses = Course::all();
        $course_detail = new CourseDetail();
        return view('course-detail.create-edit', compact('courses','course_detail'));
    }


    public function store(Request $request)
    {
        $data = $request->validate([

           'year' => 'required',
           'course_id' => 'required',
           'semester' => 'required',
           'day' => 'required',
           'course_no' => 'required',
           'time' => 'required',
           'lecture_hall' => 'required',
        ]);
        CourseDetail::create($data);
        return redirect()->route('course-details.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
