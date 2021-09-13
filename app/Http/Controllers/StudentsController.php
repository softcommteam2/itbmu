<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Students::paginate(5);
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        $student = new Students();
        return view('admin.students.create-edit', compact('student'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'country' => 'required',
            'class' => 'required'
        ]);

        Students::create($request->all());
        return redirect('admin/students');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $student =Students::findOrFail($id);
        return view('admin.students.create-edit', compact('student'));
    }


    public function update(Request $request, $id)
    {
        $student =Students::findOrFail($id)->update($request->all());
        return redirect('admin/students');
    }


    public function destroy($id)
    {
        //
    }
}
