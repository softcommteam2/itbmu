<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{

    public function index()
    {
        $organizations = Organization::all();
        return view('admin.organizations.index', compact('organizations'));
    }


    public function create()
    {
        $organization = new Organization();
        return view('admin.organizations.create-edit', compact('organization'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'biography' => 'required',
            'rank' => 'required'
        ]);
        $organization= new Organization();
        $organization->name = $request->name;
        $organization->photo =time().'.'.$request->photo->extension();
        $request->photo->move(public_path('organizations/images'), $organization->photo);
        $organization->biography = $request->biography;
        $organization->status = $request->status;
        $organization->rank = $request->rank;
        $organization->save();
        return redirect('admin/organizations');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $organization = Organization::findOrFail($id);
        return view('admin.organizations.create-edit', compact('organization'));
    }


    public function update(Request $request, $id)
    {
        $organization = Organization::findOrFail($id)->update($request->all());
        return redirect('admin/organizations');
    }


    public function destroy($id)
    {
        //
    }
}
