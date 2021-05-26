<?php

namespace App\Http\Controllers;

use App\Models\Multimedia;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{

    public function index()
    {
        $medias= Multimedia::all();
        return view('admin.multimedia.index', compact('medias'));
    }


    public function create()
    {
        $media = new Multimedia();
        return view('admin.multimedia.create-edit', compact('media'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);
        $media= new Multimedia();
        $media->title = $request->title;
        $media->presentername = $request->presentername;
        $media->filetype = $request->filetype;
        $media->file =time().'.'.$request->file->extension();
        $request->file->move(public_path('multimedia/images'), $media->file);
        $media->save();
        return redirect('admin/multimedia');
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
