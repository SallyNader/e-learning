<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Album;
class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    

$images=Image::all();


return view('control.images.images',compact('images'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
$albums=Album::all();
        return view('control.images.create',compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



$this->validate($request,[



'name'=>'required|unique:images,i_name',
'disc'=>'required',

'file'=>'required',


    ]);


$album=$request->get('album');

$album_id=Album::where('b_name',$album)->first();
$aID=$album_id->b_id;

       $path=public_path().'/extra-images/';
$file=$request->file('file');

$filename=time().rand(1111,9999).'.'.$file->getClientOriginalName();
if($file->move($path,$filename)){

Image::create([

'i_name'=>$request->get('name'),
'i_disc'=>$request->get('disc'),
'album_id'=>$aID,
'path'=>$filename






    ]);

}

return redirect('image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $images=Album::find($id)->images;



// $images=Album::find($id)->images()->where('b_id',$id)->first();

    $albumName=Image::find($id)->album->b_name;
      return view('gallery.specificgallery',compact('images','albumName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $image=Image::find($id);
         $albums=Album::all();

         return view('control.images.editimage',compact('image','albums'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {






$this->validate($request,[



'name'=>'required',
'disc'=>'required',

    ]);










        $image=Image::find($id);




$album=$request->get('album');

$album_id=Album::where('b_name',$album)->first();
$aID=$album_id->b_id;







        $file=$request->file('file');


           if( !empty($file)){


 unlink(public_path()."/extra-images/".$image->path);

        $path=public_path().'/extra-images';


      $filename=rand(1111,9999).time().'.'.$file->getClientOriginalName();


        if($file->move($path,$filename)){

         $image->path=$filename;



}





        }





        $image->i_name=$request->get('name');

        $image->i_disc=$request->get('disc');
        $image->album_id=$aID;
        $image->save();

        return redirect('image');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $image=Image::find($id);
        unlink(public_path()."/extra-images/".$image->path);
        $image->delete();

        return redirect()->back();
    }
}
