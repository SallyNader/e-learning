<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Category;
use DB;
use Auth;
use App\User;
use App\Video;
use App\Article;

class CoursesController extends Controller {

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
    public function index() {



        $categories = Category::all();


        $courses = Course::paginate(4);

        return view('courses.courseslist', compact('courses', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function o() {


        $videos = Course::find(3)->videos->sortBy('episode');


        foreach ($videos as $key => $value) {


            echo $value->v_name . "<br/>";
            # code...
        }
    }

    public function show($id) {
        // $Boolean=true;


        if (Auth::check()) {

            $course = Course::find($id);

            $userID = Auth::user()->id;

            $checkedCourseID = $course->c_id;


            $result = DB::table('course_user')->where('user_id', $userID)->where('course_id', $checkedCourseID)->get();

            $student = DB::table('course_user')->where('course_id', $checkedCourseID)->count();

            $sessions = Video::where('course_id', $checkedCourseID)->count();


            $videos = Course::find($id)->videos->sortBy('episode');



            $user = User::find($userID);

            $accepted = $user->accepted;




            if ($result->count() > 0) {

                $Boolean = 'false';
            } else {


                $Boolean = 'true';
            }


            // echo $Boolean;

            $ID = Course::select('c_id')->pluck('c_id');


            $lastIndex = count($ID) - 1; //7

            $lastID = $ID[$lastIndex];

            $firstID = $ID[0];

            // if (!($id ==0 and $id >= $ID[$lastIndex])){

            $course = Course::find($id);


            $sy = $course->syllabus;
            $syllabus = explode(",", $sy);

            $ce = $course->certificates;

            $certificates = explode(',', $ce);
            $articles = Article::limit(3)->get();


            $relatedCourses = Course::where('c_id', '<>', $id)->where('category_id', $course->category_id)->get();
            return view('courses.coursedetail', compact('course', 'syllabus', 'certificates', 'lastID', 'firstID', 'Boolean', 'accepted', 'videos', 'student', 'sessions', 'articles', 'relatedCourses'));
        } else {

            $course = Course::find($id);

            // $userID=Auth::user()->id;
            // $checkedCourseID=$course->c_id;
            // $result=DB::table('course_user')->where('user_id',$userID)->where('course_id',$checkedCourseID)->get();
// $student=DB::table('course_user')->where('course_id',$checkedCourseID)->count();
// $sessions=Video::where('course_id',$checkedCourseID)->count();

            $articles = Article::limit(3)->get();
            $student = DB::table('course_user')->where('course_id', $id)->count();


            $videos = Course::find($id)->videos->sortBy('episode');



// $user=User::find($userID);
// $accepted=$user->accepted;
//         if($result->count() > 0 ){
//        $Boolean='false';
//         }else{
//             $Boolean='true';
//         }
            // echo $Boolean;

            $ID = Course::select('c_id')->pluck('c_id');


            $lastIndex = count($ID) - 1; //7

            $lastID = $ID[$lastIndex];

            $firstID = $ID[0];

            // if (!($id ==0 and $id >= $ID[$lastIndex])){






            $course = Course::find($id);
            $relatedCourses = Course::where('c_id', '<>', $id)->where('category_id', $course->category_id)->get();

            $sy = $course->syllabus;
            $syllabus = explode(",", $sy);

            $ce = $course->certificates;

            $certificates = explode(',', $ce);
            return view('courses.coursedetail', compact('course', 'syllabus', 'certificates', 'lastID', 'firstID', 'Boolean', 'videos', 'student', 'sessions', 'articles', 'relatedCourses'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
