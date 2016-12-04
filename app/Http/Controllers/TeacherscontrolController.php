<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class TeacherscontrolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$teachers=Teacher::all();



return view('control.teachers.teachers',compact('teachers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

       return view('control.teachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        


$cover=$request->file('cover');
$profile=$request->file('profile');

 $path=public_path().'/extra-images/';








      $image_cover=rand(1111,9999).time().'.'.$cover->getClientOriginalName();
      $image_profile=rand(1111,9999).time().'.'.$profile->getClientOriginalName();


      if($cover->move($path,$image_cover) and $profile->move($path,$image_profile)){




Teacher::create([

'experience_years'=>$request->get('years')


,'path'=>$image_cover



,'profile_image'=>$image_profile


,'type_id'=>$request->get('title')


,'t_branch'=>$request->get('branch')


,'t_email'=>$request->get('email')

,'t_experience'=>$request->get('experience')


,'t_name'=>$request->get('name')

,'t_phone'=>$request->get('phone')






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
        




$teacher=Teacher::find($id);


return view('control.teachers.editteacher',compact('teacher'));

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
        


$teacher=Teacher::find($id);

$name=$request->get('name');

$email=$request->get('email');
$experience=$request->get('experience');
$phone=$request->get('phone');
$branch=$request->get('branch');
$title=$request->get('title');
$years=$request->get('years');

$teacher->t_name=$name;
$teacher->t_email=$email;
$teacher->t_experience=$experience;
$teacher->t_phone=$phone;
$teacher->t_branch=$branch;
$teacher->type_id=$title;
$teacher->experience_years=$years;

$teacher->save();


return redirect('teachercontrol');











    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       

       $teacher=Teacher::find($id);
       $teacher->delete();

       return redirect()->back();
    }
}
