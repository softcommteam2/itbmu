<?php

namespace App\Http\Controllers;

use App\Models\Multimedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $request->file->move(public_path('/multimedia/images'), $media->file);
        $media->save();
        return redirect('admin/multimedia');
    }


    public function show($id)
    {
        $media = Multimedia::findOrFail($id);
        return view('admin.multimedia.detail', compact('media'));
    }
    public function edit($id)
    {
        $media = Multimedia::findOrFail($id);
        return view('admin.multimedia.create-edit', compact('media'));
    }

    public function update(Request $request, $id)
    {
        $media = Multimedia::findOrFail($id);
        if($request->file != ''){
            $path = public_path().'/multimedia/images/';

            //code for remove old file
            if($media->file != ''  && $media->file != null){
                 $file_old = $path.$media->file;
                 unlink($file_old);
            }

            //upload new file
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            //for update in table
            $media->update(['file' => $filename]);
        return redirect('admin/multimedia');
    }

    }
    public function destroy($id)
    {
        //
    }
}
