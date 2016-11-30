<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Category;
use DB;
use Auth;
use App\User;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 //    public function s(){

 // $ID=Course::select('c_id')->pluck('c_id');
 // $lastIndex=count($ID)-1;
 // echo $ID[$lastIndex];

 //    }
    public function index()
    {
      $categories=Category::all();


      $courses=Course::all();

      return view('courses.courseslist',compact('courses','categories'));
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

    public function o(){
         $userID=Auth::user()->id;
$user=User::find($userID);

$accepted=$user->accepted;
echo $accepted;

    }
    public function show($id)
    {
        // $Boolean=true;



          
          $course=Course::find($id);

        $userID=Auth::user()->id;

        $checkedCourseID=$course->c_id;


        $result=DB::table('course_user')->where('user_id',$userID)->where('course_id',$checkedCourseID)->get();



       





$user=User::find($userID);

$accepted=$user->accepted;




        if($result->count() > 0 ){

       $Boolean='false';

        }else{


            $Boolean='true';
        }


        // echo $Boolean;

      $ID=Course::select('c_id')->pluck('c_id');


         $lastIndex=count($ID)-1;//7

         $lastID=$ID[$lastIndex];

         $firstID=$ID[0];

 // if (!($id ==0 and $id >= $ID[$lastIndex])){

    $course=Course::find($id);


$sy=$course->syllabus;
$syllabus=explode(",", $sy);

$ce=$course->certificates;

$certificates=explode(',', $ce);
    return view('courses.coursedetail',compact('course','syllabus','certificates','lastID','firstID','Boolean','accepted'));

// }else{

//     echo "ops";
// }

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
