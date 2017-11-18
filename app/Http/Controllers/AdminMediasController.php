<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

class AdminMediasController extends Controller
{
    //


    public function index()
    {
        $photos= Photo::all();
        return view('admin.media.index',compact('photos'));
    }




    public function create()
    {

        return view('admin.media.create');
    }

public function store(Request $request)
{
//$files = $request->file('file');
//    $name=$file->file;
//    $file->move('images','$request->file');
//    $poto=Photo::create(['file'=>$name]);
//    echo $poto;

    $photo =new Photo();
    $photo->file = $request->file;
    $photo->save();
    return redirect(route('media.index'));

}



public function destroy($id)
{
    $photo =Photo::findOrFail($id)->delete();
//    unlink(public_path().$photo->file);
//    $photo->delete();
//
    return redirect(route('media.index'));

}




}
