<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Course;

use App\Category;

use App\Teacher;
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
        
$teachers=Teacher::all();

$categories=Category::all();


        return view('control.courses.create',compact('teachers','categories'));
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

'name'=>'required|unique:courses,c_name',

'price'=>'required',
'disc'=>'required',
'sy'=>'required',
'certificates'=>'required',
'file'=>'required',



    ]);

$teacher=$request->get('teacher');
$teacher_id=Teacher::where('t_name',$teacher)->first();


$category=$request->get('category');

$category_id=Category::where('ca_name',$category)->first();
$tID= $teacher_id->t_id;

$caID=$category_id->ca_id;



        $file=$request->file('file');
        $path=public_path().'/extra-images/';

        $filename=time().rand(1111,9999).'.'.$file->getClientOriginalName();

        if($file->move($path,$filename)){
Course::create([
'category_id'=>$caID,

'certificates'=>$request->get('certificates'),

'c_name'=>$request->get('name'),
'disc'=>$request->get('disc'),

'image'=>'extra-images/'.$filename,
'price'=>$request->get('price'),
'syllabus'=>$request->get('sy'),
'teacher_id'=>$tID





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

      $teachers=Teacher::all();

$categories=Category::all();

      return view('control.courses.editcourse',compact('course','teachers','categories'));
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

'price'=>'required',
'disc'=>'required',
'sy'=>'required',
'certificates'=>'required',




    ]);

$course=Course::find($id);
        
$file=$request->file('file');

        if(!empty($file)){


 unlink(public_path()."/".$course->image);

            $path=public_path().'/extra-images/';

            $filename=time().rand(1111,9999).'.'.$file->getClientOriginalName();


            if($file->move($path,$filename)){


               $course->image= 'extra-images/' .$filename;


            }
        }

$teacher=$request->get('teacher');
$teacher_id=Teacher::where('t_name',$teacher)->first();


$category=$request->get('category');

$category_id=Category::where('ca_name',$category)->first();
$tID= $teacher_id->t_id;

$caID=$category_id->ca_id;

$name=$request->get('name');
$teacher=$tID;
$category=$caID;

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
 unlink(public_path()."/".$course->image);
        $course->delete();

        return redirect()->back();
    }
}
