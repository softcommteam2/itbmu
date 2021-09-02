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
        $data= $request->validate([
            'titleid' => 'required',
            // 'photo' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'label' => 'required'
        ]);
        $photos = [];
       
        if(!empty($request->file('photo'))){
            foreach($request->file('photo') as $photo)
            {
                $file_name =time().'.'.$photo->getClientOriginalName();
                array_push($photos,$file_name);
                $photo->storeAs('gallery/images',$file_name);
                // $data['photo']=serialize($file_name);
            }
       $photo_names = serialize($photos);
       $data['photo']= $photo_names;
        }
        
        Gallery::create($data);
        return redirect('admin/galleries');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        $act_titles = ActivityTitle::all();
        return view('admin.photo-gallery.create-edit', compact('gallery','act_titles'));
    }

    public function update(Request $request, $id)
    {
        $galleries = Gallery::findOrFail($id);
        // $act_titles = ActivityTitle::all();
        $data= $request->validate([
            'titleid' => 'required',
            // 'photo' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'label' => 'required'
        ]);
        $photos = [];
       
        if(!empty($request->file('photo'))){
            foreach($request->file('photo') as $photo)
            {
                $file_name =time().'.'.$photo->getClientOriginalName();
                array_push($photos,$file_name);
                $photo->storeAs('gallery/images',$file_name);
                // $data['photo']=serialize($file_name);
            }
       $photo_names = serialize($photos);
       $data['photo']= $photo_names;
        }
        
       $galleries->update($data);
        return redirect('admin/galleries');
    }


    public function destroy($id)
    {
        //
    }
}
