<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{

    public function index()
    {
        $news = News::all();
        // dd($news);
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create-edit');
    }

    public function store(Request $request)
    {
        $request->validate([

           'title' => 'required'

        ]);
        News::create($request->all());
        return redirect('/news');
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
