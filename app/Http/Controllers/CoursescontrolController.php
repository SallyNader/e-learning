<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Course;
class CoursescontrolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=Course::all();


        return view('control.courses.courses',compact('courses'));
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
      $course=Course::find($id);

      return view('control.courses.editcourse',compact('course'));
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
        


$name=$request->get('name');
$teacher=$request->get('teacher');
$category=$request->get('department');

$price=$request->get('price');
$disc=$request->get('disc');
$sy=$request->get('sy');
$certificates=$request->get('certificates');



$course=Course::find($id);
$course->c_name=$name;
$course->teacher_id=$teacher;
$course->category_id=$category;
$course->price=$price;
$course->disc=$disc;
$course->syllabus=$sy;
$course->certificates=$certificates;


$course->save();

return redirect('coursecontrol');





    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::find($id);

        $course->delete();

        return redirect()->back();
    }
}
