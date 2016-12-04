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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

         return view('control.images.editimage',compact('image'));
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
        $image=Image::find($id);












        $file=$request->file('file');


           if( !empty($file)){




        $path=public_path().'/extra-images';


      $filename=rand(1111,9999).time().'.'.$file->getClientOriginalName();


        if($file->move($path,$filename)){

         $image->path=$filename;



}





        }





        $image->i_name=$request->get('name');

        $image->i_disc=$request->get('disc');
        $image->album_id=$request->get('album');
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
        $image->delete();

        return redirect()->back();
    }
}
