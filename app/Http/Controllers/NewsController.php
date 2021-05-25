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
        $request->validate([

           'title' => 'required',
           'news'  => 'required',
           'photo1'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480'

        ]);


        $new =new News();
        $new->title = $request->title;
        $new->news = $request->news;
        $new->upcomedate = $request->upcomedate;
        $new->photo1 =time().'.'.$request->photo1->extension();
        $request->photo1->move(public_path('news/images'), $new->photo1);
        $new->photo2 =time().'.'.$request->photo2->extension();
        $request->photo2->move(public_path('news/images'), $new->photo2);
        $new->photo3 =time().'.'.$request->photo3->extension();
        $request->photo3->move(public_path('news/images'), $new->photo3);
        $new->photo4 =time().'.'.$request->photo4->extension();
        $request->photo4->move(public_path('news/images'), $new->photo4);
        $new->photo5 =time().'.'.$request->photo5->extension();
        $request->photo5->move(public_path('news/images'), $new->photo5);
        $new->save();
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
