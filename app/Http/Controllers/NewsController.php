<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Illuminate\Pagination\Paginator;
class NewsController extends Controller
{

    public function index()
    {   
        $news = News::withTrashed()->latest()->paginate(5);
        // dd($news);
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
            'newtitle' => 'required',
            'description' => 'required',
            'upcomedate' => 'required',
            'type' => 'required',
            'deleted_at' =>'nullable'
        ]);
        $photos = [];
        if(!empty($request->file('photo'))){
            foreach($request->file('photo') as $photo)
            {
                $file_name =time().'.'.$photo->getClientOriginalName();
                array_push($photos,$file_name);
                $photo->storeAs('news',$file_name);
                // $data['photo']=serialize($file_name);
            }
       $photo_names = serialize($photos);
       $data['photo']= $photo_names;
        }

        if(!empty($request->file('cover_photo'))){
            $cover_photo =time().'.'.$request->cover_photo->getClientOriginalName();
            $request->cover_photo->storeAs('news',$cover_photo);
            $data['cover_photo']=$cover_photo;
            }
        
        if(!empty($request->file('pdf'))){
        $pdf =time().'.'.$request->pdf->getClientOriginalName();
        $request->pdf->storeAs('news',$pdf);
        $data['pdf']=$pdf;
        }
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
        $data= $request->validate([
            'newtitle' => 'required',
            'description' => 'required',
            'upcomedate' => 'required',
            'type' => 'required',
            'deleted_at' =>'nullable'
        ]);
        $photos = [];
        if(!empty($request->file('photo'))){
            foreach($request->file('photo') as $photo)
            {
                $file_name =time().'.'.$photo->getClientOriginalName();
                array_push($photos,$file_name);
                $photo->storeAs('news',$file_name);
                // $data['photo']=serialize($file_name);
            }
       $photo_names = serialize($photos);
       $data['photo']= $photo_names;
        }

        if(!empty($request->file('cover_photo'))){
            $cover_photo =time().'.'.$request->cover_photo->getClientOriginalName();
            $request->cover_photo->storeAs('news',$cover_photo);
            $data['cover_photo']=$cover_photo;
            }
        
        if(!empty($request->file('pdf'))){
        $pdf =time().'.'.$request->pdf->getClientOriginalName();
        $request->pdf->storeAs('news',$pdf);
        $data['pdf']=$pdf;
        }
         $new->update($data);
        return redirect('admin/news');
    }

    public function destroy($id)
    {
        $new = News::withTrashed()->find($id);
        if($new->deleted_at)
        {
        
            $new->restore();
        }
        else
        {
            $new->delete();
        }
        return redirect('admin/news');
    }
}
