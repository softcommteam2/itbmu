<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExamResult;
class ResultController extends Controller
{

    public function index()
    {
        $results = ExamResult::withTrashed()->latest()->paginate(5);
        return view('admin.exam-results.index',compact('results'));
    }

   
    public function create()
    {
        $result = new ExamResult();
        return view('admin.exam-results.create_edit',compact('result'));
    }

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'year' => 'required',
            'date' => 'required',
            'pdf'  => 'required',
            'deleted_at' => 'nullable'
        ]);
       if(!empty($request->file('pdf')))
       {
           $pdf = time().'.'.$request->pdf->getClientOriginalName();
           $request->pdf->storeAs('exam_results',$pdf);
           $data['pdf'] = $pdf;
       }
       ExamResult::create($data);
       return redirect('admin/exam_results');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $result = ExamResult::findOrFail($id);
        return view('admin/exam-results.create_edit',compact('result'));
    }

    public function update(Request $request, $id)
    {
        $result =ExamResult::findOrFail($id);
        $data = $request->validate([
            'year' => 'required',
            'date' => 'required',
            'pdf'  => 'nullable',
            'deleted_at' => 'nullable'
        ]);
       if(!empty($request->file('pdf')))
       {
           $pdf = time().'.'.$request->pdf->getClientOriginalName();
           $request->pdf->storeAs('exam_results',$pdf);
           $data['pdf'] = $pdf;
       }
       $result->update($data);
       return redirect('admin/exam_results');
    }

    public function destroy($id)
    {
        $result = ExamResult::withTrashed()->find($id);
        if($result->deleted_at)
        {
        
            $result->restore();
        }
        else
        {
            $result->delete();
        }
        return redirect('admin/exam_results');
    }
}
