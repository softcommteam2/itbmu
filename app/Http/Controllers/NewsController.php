<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    public function create()
    {
        $new = new News();
        return view('admin.news.create-edit', compact('new'));
    }

    public function store(Request $request)
    {
        $data= $request->validate([
            'newstitlemyan' => 'required',
            'newstitleeng' => 'required',
            'newsmyan' => 'required',
            'newseng' => 'required',
            'upcomedate' => 'required',
            'type' => 'required',
            'photo'=> 'required'
        ]);
        $photos = [];
            foreach($request->file('photo') as $photo)
            {
                $file_name =time().'.'.$photo->getClientOriginalName();
                array_push($photos,$file_name);
                $photo->storeAs('news',$file_name);
                // $data['photo']=serialize($file_name);
            }
       $photo_names = serialize($photos);
       $data['photo']= $photo_names;
        News::create($data);

        return redirect('admin/news');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $new =News::findOrFail($id);
        return view('admin.news.create-edit', compact('new'));
    }


    public function update(Request $request, $id)
    {
        $new = News::findOrFail($id);
        $new->update($request->all());
        return redirect('admin/news');
    }

    public function destroy($id)
    {
        //
    }
}
