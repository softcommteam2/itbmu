<?php

namespace App\Http\Controllers;

use App\Models\Multimedia;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class MultimediaController extends Controller
{

    public function index()
    {
        $medias = Multimedia::paginate(10);
        return view('admin.multimedia.index', compact('medias'));
    }


    public function create()
    {
        $media = new Multimedia();
        return view('admin.multimedia.create-edit', compact('media'));
    }


    // public function store(Request $request)
    // {
    //     $data = $request->validate([
    //         'title' => 'required',
    //         'presentername' => 'nullable',
    //         'filetype' => 'required',
    //         'file' => 'nullable|mimetypes:video/avi,video/mpeg,video/mp4,audio/mpeg,mpga,mp3,wav',
    //         'link' => 'nullable',
    //     ]);
    //     $file_name = time() . '.' . $request->file->getClientOriginalName();
    //     $request->file->storeAs('multimedia', $file_name);
    //     $data['file'] = $file_name;
    //     Multimedia::create($data);
    //     return redirect('admin/multimedia');
    // }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'presentername' => 'nullable',
            'filetype' => 'required',
            'file' => 'nullable|mimetypes:video/avi,video/mpeg,video/mp4,audio/mpeg,mpga,mp3,wav',
            'link' => 'nullable',
        ]);

        if ($request->hasFile('file')) {
            $file_name = $this->safeFileName($request->file);
            $request->file->storeAs('multimedia', $file_name);
            $data['file'] = $file_name;
        } else {
            $data['file'] = null;
        }

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
        $data = $request->validate([
            'title' => 'required',
            'presentername' => 'nullable',
            'filetype' => 'required',
            'file' => 'nullable|mimetypes:video/avi,video/mpeg,video/mp4,video/mkv',
            'link' => 'nullable',
        ]);

        $media = Multimedia::findOrFail($id);

        if ($request->hasFile('file')) {
            // Delete old file if it exists
            if ($media->file) {
                // Assuming files are stored in a folder named 'multimedia' in the public directory
                $oldFilePath = public_path('multimedia/' . $media->file);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath);
                }
            }

            $file_name = $this->safeFileName($request->file);
            $request->file->move(public_path('multimedia'), $file_name);
            $data['file'] = $file_name;
        } elseif (!$request->file && !$media->file) {
            // If 'file' is not present in request and not already present in media object
            $data['file'] = null;
        }

        $media->update($data);
        return redirect('admin/multimedia');
    }

    public function destroy($id)
    {
        //
    }
}
