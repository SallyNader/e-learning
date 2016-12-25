<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Course;
use DB;
use App\Article;
use Auth;
class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


// public function tryy(){



//     $all=Video::where('course_id',1)->get();

//     $first=$all[0]->episode;
//     $last=$all->max('episode');

//     return $first."   ".$last;
// }

public function __construct()
{
    $this->middleware('auth');
} 
    public function next($id,$episode){

 $video=Video::where('course_id',$id)->where('episode',$episode+1)->first();




$student=DB::table('course_user')->where('course_id',$video->course_id)->count();

$sessions=Video::where('course_id',$video->course_id)->count();






$all=Video::where('course_id',$id)->get();

    $first=$all[0]->episode;
    $last=$all->max('episode');



     
       $courseID=$video->course_id;

       $vid=$video->v_id;

  $otherVideos=Video::where('v_id',"<>",$vid)->where('course_id','=',$courseID)->orderBy('episode')->get();

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
   $articles=Article::limit(3)->get();

       return view('videos.session',compact('video','syllabus','certificates','course','otherVideos','first','last','sessions','student','articles'));

       

       


    }


     public function pervious($id,$episode){

















        $video=Video::where('course_id',$id)->where('episode',$episode-1)->first();


$sessions=Video::where('course_id',$video->course_id)->count();

        $student=DB::table('course_user')->where('course_id',$video->course_id)->count();

  $vid=$video->v_id;

$all=Video::where('course_id',$id)->get();

    $first=$all[0]->episode;
    $last=$all->max('episode');
     
       $courseID=$video->course_id;

  $otherVideos=Video::where('v_id',"<>",$vid)->where('course_id','=',$courseID)->orderBy('episode')->get();

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
 $articles=Article::limit(3)->get();
       return view('videos.session',compact('video','syllabus','certificates','course','otherVideos','first','last','sessions','student','articles'));

       


    }
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
'episode'=>'required',




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
'v_path'=>'videos/'.$filename,
'episode'=>$request->get('episode'),





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
       

$articles=Article::limit(3)->get();
       $video=Video::find($id);
       $courseID=$video->course_id;

  $otherVideos=Video::where('v_id',"<>",$id)->where('course_id','=',$courseID)->orderBy('episode')->get();


$student=DB::table('course_user')->where('course_id',$video->course_id)->count();

$sessions=Video::where('course_id',$video->course_id)->count();


$all=Video::where('course_id',$video->course_id)->get();

    $first=$all[0]->episode;
    $last=$all->max('episode');




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

       return view('videos.session',compact('video','syllabus','certificates','course','otherVideos','first','last','sessions','student','articles'));

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
        $course_id_in_video=$video->course_id;

        $course_name=Course::where('c_id',$course_id_in_video)->first()->pluck('c_name');


$courseNameRelated=$course_name[0];

         $courses=Course::all();

        return view('control.videos.editvideo',compact('video','courses','courseNameRelated'));
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
'episode'=>'required',





    ]);

        $course=$request->get('course');

$course_id=Course::where('c_name',$course)->first();

$cID=$course_id->c_id;


         $video=Video::find($id);




$file=$request->file('file');


           if( !empty($file)){

 unlink(public_path()."/". $video->v_path);



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
         $video->episode=$request->get('episode');
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
