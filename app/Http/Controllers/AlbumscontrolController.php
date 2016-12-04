<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
class AlbumscontrolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $albums=Album::all();


       return view('control.albums.albums',compact('albums'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $album=Album::find($id);


       return view('control.albums.editalbum',compact('album'));


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
       
        $album=Album::find($id);



        $file=$request->file('file');


           if( !empty($file)){




$path=public_path().'/extra-images';
$filename=rand(1111,9999).time().'.'.$file->getClientOriginalName();


if($file->move($path,$filename)){

 $album->b_cover=$filename;



}





        }

$album->b_name=$request->get('name');

$album->b_disc=$request->get('disc');






$album->save();


return redirect('albumcontrol');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  

        $album=Album::find($id);
        $album->delete();
        return redirect()->back();
    }
}
