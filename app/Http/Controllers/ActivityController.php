<?php

namespace App\Http\Controllers;

use App\Models\ActivityTitle;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index()
    {
        $act_titles =ActivityTitle::all();
        return view('admin.activity-titles.index', compact('act_titles'));
    }


    public function create()
    {
        $act_title = new ActivityTitle();
        return view('admin.activity-titles.create-edit',compact('act_title'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required'
        ]);
        ActivityTitle::create($request->all());
        return redirect('admin/activity_titles');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $act_title = ActivityTitle::findOrFail($id);
        return view('admin.activity-titles.create-edit',compact('act_title'));
    }

    public function update(Request $request, $id)
    {
        $act_title = ActivityTitle::findOrFail($id)->update($request->all());
        return redirect('admin/activity_titles');
    }


    public function destroy($id)
    {
        //
    }
}
