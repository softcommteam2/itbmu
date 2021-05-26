<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{

    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subjects.index', compact('subjects'));
    }


    public function create()
    {
        $subject = new Subject();
        return view('admin.subjects.crerate-edit', compact('subject'));
    }


    public function store(Request $request)
    {
       $request->validate([
           'name' => 'required'
       ]);
        Subject::create($request->all());
       return redirect('admin/subjects');

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('admin.subjects.crerate-edit', compact('subject'));
    }


    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id)->update($request->all());
        return redirect('admin/subjects');
    }

    public function destroy($id)
    {
        //
    }
}
