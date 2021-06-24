<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::paginate(10);
        return view('course.index',  compact('courses'));
    }

    public function create()
    {
        $course = new Course();
        return view('course.create-edit', compact('course'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([

           'name' => 'required',
           'open_date' => 'required',
           'open_time' => 'required',
           'class' => 'required'
        ]);
        Course::create($data);
        return redirect()->route('courses.index');
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
