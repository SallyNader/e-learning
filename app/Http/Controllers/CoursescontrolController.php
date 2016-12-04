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
        


        return view('control.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $file=$request->file('file');
        $path=public_path().'/extra-images/';

        $filename=time().rand(1111,9999).'.'.$file->getClientOriginalName();

        if($file->move($path,$filename)){
Course::create([
'category_id'=>$request->get('department'),

'certificates'=>$request->get('certificates'),

'c_name'=>$request->get('name'),
'disc'=>$request->get('disc'),

'image'=>'extra-images/'.$filename,
'price'=>$request->get('price'),
'syllabus'=>$request->get('sy'),
'teacher_id'=>$request->get('teacher')





            ]);


        }

        return redirect('coursecontrol');
        
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


$course=Course::find($id);
        
$file=$request->file('file');

        if(!empty($file)){




            $path=public_path().'/extra-images/';

            $filename=time().rand(1111,9999).'.'.$file->getClientOriginalName();


            if($file->move($path,$filename)){


               $course->image= 'extra-images/' .$filename;


            }
        }


$name=$request->get('name');
$teacher=$request->get('teacher');
$category=$request->get('department');

$price=$request->get('price');
$disc=$request->get('disc');
$sy=$request->get('sy');
$certificates=$request->get('certificates');



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
