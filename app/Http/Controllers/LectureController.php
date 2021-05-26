<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Lecture,Subject};
class LectureController extends Controller
{

    public function index()
    {
        $subjects = Subject::all();
        $lectures = Lecture::all();
        return view('admin.lectures.index', compact('lectures'));
    }


    public function create()
    {
        $lecture = new Lecture();
        $subjects = Subject::all();
        return view('admin.lectures.create-edit',compact('lecture','subjects'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        Lecture::create($request->all());
        return redirect('admin/lectures');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $subjects = Subject::all();
        $lecture = Lecture::findOrFail($id);
        return view('admin.lectures.create-edit', compact('lecture','subjects'));
    }


    public function update(Request $request, $id)
    {
        $subjects = Subject::all();
        Lecture::findOrFail($id)->update($request->all());
        return redirect('admin/lectures');
    }


    public function destroy($id)
    {
        //
    }
}
