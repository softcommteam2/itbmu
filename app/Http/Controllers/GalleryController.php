<?php

namespace App\Http\Controllers;

use App\Models\ActivityTitle;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.photo-gallery.index', compact('galleries'));
    }


    public function create()
    {
        $gallery = new Gallery();
        $act_titles = ActivityTitle::all();
        return view('admin.photo-gallery.create-edit', compact('gallery','act_titles'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'photo' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
        ]);
        $gallery = new Gallery();
        $gallery->titleid = $request->titleid;
        $gallery->photo =time().'.'.$request->photo->extension();
        $request->photo->move(public_path('gallery/images'), $gallery->photo);
        $gallery->label = $request->label;
        $gallery->save();
        return redirect('admin/galleries');
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
