<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function upload(Request $request){
    $request->validate([
        'file'=>'required|file|mimes:jpg,png,pdf|max:2048',
    ]);
    $file=$request->file('file');
    $filepath=$file->store('uploads');
    return response('Done');
}
}
