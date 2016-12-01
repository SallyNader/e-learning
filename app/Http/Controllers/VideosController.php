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

        return view('control.videos.editvideo',compact('video'));
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
         $video=Video::find($id);

         $video->v_name=$request->get('name');

         $video->course_id=$request->get('course');
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

        $video->delete();

              return redirect()->back();

            }
}
