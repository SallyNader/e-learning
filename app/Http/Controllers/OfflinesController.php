<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offline;
use App\Category;

class OfflinesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "tfo";
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






public function search(Request $request){

$branch=$request->get('branch');
$course=$request->get('course');



$getCourse=Offline::where('branch',$branch)->where('c_name',$course)->get();




if(count($getCourse)>0)

{
    $related=Offline::where('c_id',"!=",$getCourse[0]->c_id)->Where(function($query) use($branch,$course)
            {
                $query->where('branch',$branch)
                      ->orWhere('c_name',$course);
            })
            ->get();
        }

















return view('courses.searchResult',compact('getCourse','related'));


}



    public function show($id)
    {

        
        $offlines=Offline::find($id);


        $sy=$offlines->syllabus;
$syllabus=explode(",", $sy);

$ce=$offlines->certificates;

$certificates=explode(',', $ce);

        return view('courses.offlinesDetails',compact('offlines','certificates','syllabus'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
