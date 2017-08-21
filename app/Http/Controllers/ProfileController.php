<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Course;

class ProfileController extends Controller {

    public function addCourseToAccount($userid, $courseid) {




        DB::table('course_user')->insert([
            'course_id' => $courseid,
            'user_id' => $userid
        ]);

        return redirect('profile');
    }

    public function myCourses() {




        $userID = Auth::user()->id;




        $result = DB::table('course_user')->where('user_id', $userID)->pluck('course_id');


        foreach ($result as $key => $value) {


            $courses[] = Course::where('c_id', $value)->get();


            # code...
        }


        return view('profile.profile', compact('courses'));
    }

}
