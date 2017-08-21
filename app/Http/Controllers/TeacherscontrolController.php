<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Type;
use Auth;

class TeacherscontrolController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $teachers = Teacher::all();

        if (Auth::user()->flag == 'admin')
            return view('control.teachers.teachers', compact('teachers'));
        else
            return redirect('teacher');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $types = Type::all();
        if (Auth::user()->flag == 'admin')
            return view('control.teachers.create', compact('types'));
        else
            return redirect('teacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'experience' => 'required',
            'phone' => 'required',
            'branch' => 'required',
            'years' => 'required',
            'cover' => 'required',
            'profile' => 'required',
        ]);


        $type = $request->get('type');
        $type_id = Type::where('t_title', $type)->first();

        $tID = $type_id->t_id;

        $cover = $request->file('cover');
        $profile = $request->file('profile');

        $path = public_path() . '/extra-images/';








        $image_cover = rand(1111, 9999) . time() . '.' . $cover->getClientOriginalName();
        $image_profile = rand(1111, 9999) . time() . '.' . $profile->getClientOriginalName();


        if ($cover->move($path, $image_cover) and $profile->move($path, $image_profile)) {




            Teacher::create([
                'experience_years' => $request->get('years')
                , 'path' => $image_cover
                , 'profile_image' => $image_profile
                , 'type_id' => $tID
                , 't_branch' => $request->get('branch')
                , 't_email' => $request->get('email')
                , 't_experience' => $request->get('experience')
                , 't_name' => $request->get('name')
                , 't_phone' => $request->get('phone')
            ]);
        }





        return redirect('teachercontrol');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {


        $types = Type::all();


        $teacher = Teacher::find($id);
        if (Auth::user()->flag == 'admin')
            return view('control.teachers.editteacher', compact('teacher', 'types'));
        else
            return redirect('teacher');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {



        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'experience' => 'required',
            'phone' => 'required',
            'branch' => 'required',
            'years' => 'required',
        ]);

        $type = $request->get('type');
        $type_id = Type::where('t_title', $type)->first();

        $tID = $type_id->t_id;




        $teacher = Teacher::find($id);
        $cover = $request->file('cover');
        $profile = $request->file('profile');

        if (!empty($cover)) {

            unlink(public_path() . "/extra-images/" . $teacher->path);
            $path = public_path() . '/extra-images';
            $covername = time() . rand(1111, 9999) . '.' . $cover->getClientOriginalName();

            if ($cover->move($path, $covername)) {

                $teacher->path = $covername;
            }
        }



        if (!empty($profile)) {

            unlink(public_path() . "/extra-images/" . $teacher->profile_image);
            $path = public_path() . '/extra-images';
            $profilename = time() . rand(1111, 9999) . '.' . $profile->getClientOriginalName();

            if ($profile->move($path, $profilename)) {



                $teacher->profile_image = $profilename;
            }
        }



        $name = $request->get('name');

        $email = $request->get('email');
        $experience = $request->get('experience');
        $phone = $request->get('phone');
        $branch = $request->get('branch');
        $title = $tID;
        $years = $request->get('years');

        $teacher->t_name = $name;
        $teacher->t_email = $email;
        $teacher->t_experience = $experience;
        $teacher->t_phone = $phone;
        $teacher->t_branch = $branch;
        $teacher->type_id = $title;
        $teacher->experience_years = $years;

        $teacher->save();


        return redirect('teachercontrol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {


        $teacher = Teacher::find($id);

        unlink(public_path() . "/extra-images/" . $teacher->path);

        unlink(public_path() . "/extra-images/" . $teacher->profile_image);

        $teacher->delete();

        return redirect()->back();
    }

}
