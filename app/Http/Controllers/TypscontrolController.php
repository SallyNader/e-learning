<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
class TypscontrolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=Type::all();


        return view('control.types.types',compact('types'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

       return view('control.types.create');
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


'name'=>'required|unique:types,t_title'
        ]);

       Type::create([

't_title'=>$request->get('name')

        ]);

       return redirect('typecontrol');
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
       

       $type=Type::find($id);
       return view('control.types.edittype',compact('type'));
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


'name'=>'required|unique:types,t_title'
        ]);
       

       $type=Type::find($id);

       $type->t_title=$request->get('name');
 $type->save();
       return redirect('typecontrol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
       $type=Type::find($id);

       $type->delete();


       return redirect()->back();
    }
}
