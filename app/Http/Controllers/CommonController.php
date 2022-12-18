<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{

public function image_save(Request $request)
{
    if($request->hasFile('upload')) {
        $filenamewithextension= $request->file('upload')->getClientOriginalName();
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        $extension = $request->file('upload')->getClientOriginalExtension();
        $filenametostore = $filename.'_'.time().'.'.$extension;
        $request->file('upload')->storeAs('public/uploads', $filenametostore);
        $request->file('upload')->storeAs('public/uploads/thumbnail', $filenametostore);
        $thumbnailpath = public_path('storage/uploads/thumbnail/'.$filenametostore);
        $img = Image::make($thumbnailpath)->resize(500, 150, function($constraint) {
            $constraint->aspectRatio();
        });
        $img->save($thumbnailpath);

        echo json_encode([
            'default' => asset('storage/uploads/'.$filenametostore),
            '500' => asset('storage/uploads/thumbnail/'.$filenametostore)
        ]);

        exit();
    }

}

public function upload(Request $request)
{
    if($request->hasFile('upload')) {
        //get filename with extension
        $filenamewithextension = $request->file('upload')->getClientOriginalName();
        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
        //get file extension
        $extension = $request->file('upload')->getClientOriginalExtension();
        //filename to store
        $filenametostore = $filename.'_'.time().'.'.$extension;
        //Upload File
        $request->file('upload')->storeAs('public/uploads', $filenametostore);

        $CKEditorFuncNum = $request->input('CKEditorFuncNum');
        $url = asset('storage/uploads/'.$filenametostore);
        $msg = 'Image successfully uploaded';
        $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

        // Render HTML output
        @header('Content-type: text/html; charset=utf-8');
        echo $re;
    }
}

}
