<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photos;

class PhotosController extends Controller
{
    //
    //
    public function create()
    {
        return view('photos.create');
    }

    public function store(Request $request)
    {
        $file = $request->file('url');
        $validExtensions = ['jpg','png','jpeg'];

        if(!is_null($file) and $file->isValid()){

            if (in_array($file->extension(), $validExtensions)) {

                $name = $file->getClientOriginalName();
                $data = $request->all();
                $file->storeAs('img', $name);
                $data['url'] = $name;
                Photos::create($data);

            }
        }
    }
}
