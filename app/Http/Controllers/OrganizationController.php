<?php

namespace App\Http\Controllers;

use App\Models\Organization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OrganizationController extends Controller
{

    public function index()
    {
        $organizations = Organization::paginate(5);
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
            'photo' =>  'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'biography' => 'required',
            'rank' => 'required'
        ]);
        $organization= new Organization();
        $organization->name = $request->name;
        $organization->photo = $this->safeFileName($request->photo);
        $request->photo->storeAs('organizations/images', $organization->photo);
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
        $organization = Organization::findOrFail($id);
        $data = $request->validate([
            'name' => 'required',
            'photo' =>  'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'biography' => 'required',
            'rank' => 'required'
        ]);
        unset($data['photo']);
        if ($request->has('status')) {
            $data['status'] = $request->status;
        }
        if ($request->hasFile('photo')) {
            // Old photos uploaded before the move to storage stay in public/ untouched.
            if ($organization->photo) {
                Storage::delete('organizations/images/'.$organization->photo);
            }
            $data['photo'] = $this->safeFileName($request->photo);
            $request->photo->storeAs('organizations/images', $data['photo']);
        }
        $organization->update($data);
        return redirect('admin/organizations');
    }


    public function destroy($id)
    {
        //
    }
}
