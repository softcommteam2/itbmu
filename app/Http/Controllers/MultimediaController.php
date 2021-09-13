<?php

namespace App\Http\Controllers;

use App\Models\Multimedia;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
class MultimediaController extends Controller
{

    public function index()
    {
        $medias= Multimedia::paginate(5);
        return view('admin.multimedia.index', compact('medias'));
    }


    public function create()
    {
        $media = new Multimedia();
        return view('admin.multimedia.create-edit', compact('media'));
    }


    public function store(Request $request)
    {
        $data=$request->validate([
            'title' => 'required',
            'presentername' => 'nullable',
            'filetype' => 'required',
            'file' =>'required|mimetypes:video/avi,video/mpeg,video/mp4'
        ]);
        $file_name =time().'.'.$request->file->getClientOriginalName();
        $request->file->storeAs('multimedia',$file_name);
        $data['file']=$file_name;
        Multimedia::create($data);
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
        $data=$request->validate([
            'title' => 'required',
            'presentername' => 'nullable',
            'filetype' => 'required',
            'file' =>'nullable|mimetypes:video/avi,video/mpeg,video/mp4,video/mkv'
        ]);
       
        $media = Multimedia::findOrFail($id);
        if($request->hasFile('file')){
            File::delete($media->file);
            $file_name =time().'.'.$request->file->getClientOriginalName();
            $request->file->storeAs('multimedia',$file_name);
            $data['file']=$file_name;
            }
            $media->update($data);
        return redirect('admin/multimedia');

    }
    public function destroy($id)
    {
        //
    }
}
