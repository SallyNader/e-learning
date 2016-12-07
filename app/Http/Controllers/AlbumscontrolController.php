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
    return view('control.albums.create');
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

'name'=>'required|unique:albums,b_name',
'disc'=>'required',
'file'=>'required'




    ]);


$path=public_path().'/extra-images/';
$file=$request->file('file');

$filename=time().rand(1111,9999).'.'.$file->getClientOriginalName();
if($file->move($path,$filename)){




     Album::create([

'b_name'=>$request->get('name'),

'b_disc'=>$request->get('disc'),
'b_cover'=>$filename


        ]);
}


      return redirect('albumcontrol');

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
       


$this->validate($request,[

'name'=>'required',
'disc'=>'required',



    ]);



        $album=Album::find($id);



        $file=$request->file('file');


           if( !empty($file)){

  unlink(public_path()."/extra-images/".$album->b_cover);


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
        unlink(public_path()."/extra-images/".$album->b_cover);
        $album->delete();
        return redirect()->back();
    }
}
