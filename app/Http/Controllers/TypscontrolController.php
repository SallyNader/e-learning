<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type;
use Auth;

class TypscontrolController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $types = Type::all();

        if (Auth::user()->flag == 'admin')
            return view('control.types.types', compact('types'));
        else
            return redirect('teacher');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        if (Auth::user()->flag == 'admin')
            return view('control.types.create');
        else
            return redirect('teacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required|unique:types,t_title'
        ]);

        Type::create([
            't_title' => $request->get('name')
        ]);

        return redirect('typecontrol');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        if (Auth::user()->flag == 'admin')
            $type = Type::find($id);
        if (Auth::user()->flag == 'admin')
            return view('control.types.edittype', compact('type'));
        else
            return redirect('teacher');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {

        $this->validate($request, [
            'name' => 'required'
        ]);


        $type = Type::find($id);

        $type->t_title = $request->get('name');
        $type->save();
        return redirect('typecontrol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $type = Type::find($id);

        $type->delete();


        return redirect()->back();
    }

}
