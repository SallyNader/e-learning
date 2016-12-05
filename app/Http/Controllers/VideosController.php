<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Course;
class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $videos=Video::all();

      return view('control.videos.videos',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $courses=Course::all();
        return view('control.videos.create',compact('courses'));
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

'name'=>'required',

'duration'=>'required',
'date'=>'required|date',
'disc'=>'required',
'file'=>'required',




    ]);

$course=$request->get('course');

$course_id=Course::where('c_name',$course)->first();

$cID=$course_id->c_id;


       $path=public_path().'/videos/';
      $file=$request->file('file');

    $filename=time().rand(1111,9999).'.'.$file->getClientOriginalName();
if($file->move($path,$filename)){

Video::create([

'course_id'=>$cID,

'duration'=>$request->get('duration'),
'startDate'=>$request->get('date'),
'v_disc'=>$request->get('disc'),
'v_name'=>$request->get('name'),
'v_path'=>'videos/'.$filename





    ]);


return redirect('video');

}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       


       $video=Video::find($id);
       $courseID=$video->course_id;

  $otherVideos=Video::where('v_id',"<>",$id)->where('course_id','=',$courseID)->get();

$courseName=$video->course->c_name;

$course=Course::where('c_name',$courseName)->get();

foreach ($course as $key => $value) {
    # code...
   $sy=  $value->syllabus;
   $ce=$value->certificates;

}


      // $sy=$course->syllabus;


  $syllabus=explode(",", $sy);

  // $ce=$course->certificates;

   $certificates=explode(',', $ce);

       return view('videos.session',compact('video','syllabus','certificates','course','otherVideos'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video=Video::find($id);

         $courses=Course::all();

        return view('control.videos.editvideo',compact('video','courses'));
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

'duration'=>'required',
'date'=>'required|date',
'disc'=>'required',





    ]);

        $course=$request->get('course');

$course_id=Course::where('c_name',$course)->first();

$cID=$course_id->c_id;


         $video=Video::find($id);




$file=$request->file('file');


           if( !empty($file)){




         $path=public_path().'/videos';
          $filename=rand(1111,9999).time().'.'.$file->getClientOriginalName();


          if($file->move($path,$filename)){

          $video->v_path="videos/".$filename;



}





        }


         $video->v_name=$request->get('name');

         $video->course_id=$cID;
         $video->v_disc=$request->get('disc');
         $video->startDate=$request->get('date');
         $video->duration=$request->get('duration');
         $video->save();

         return redirect('video');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video=Video::find($id);

                unlink(public_path()."/". $video->v_path);


        $video->delete();

              return redirect()->back();

            }
}
