<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offline;
use App\Teacher;
use Auth;
use App\Category;

class OfflinescontrolController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $offlines = Offline::all();

        if (Auth::user()->flag == 'admin')
            return view('control.offlines.all', compact('offlines'));
        else
            return redirect('offline');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $teachers = Teacher::all();

        $categories = Category::all();
        if (Auth::user()->flag == 'admin')
            return view('control.offlines.create', compact('teachers', 'categories'));
        else
            return redirect('offline');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {


        $this->validate($request, [
            'name' => 'required|unique:courses,c_name',
            'price' => 'required',
            'disc' => 'required',
            'sy' => 'required',
            'certificates' => 'required',
            'file' => 'required',
            'branch' => 'required',
            'startClock' => 'required',
            'endClock' => 'required',
            'startDate' => 'required|date',
            'telephone' => 'required',
        ]);

        $teacherName = $request->get('teacher');
        $teacher = Teacher::where('t_name', $teacherName)->first();



        $categoryName = $request->get('category');
        $category = Category::where('ca_name', $categoryName)->first();
        $tID = $teacher->t_id;
        $cID = $category->ca_id;


        $file = $request->file('file');
        $path = public_path() . '/extra-images/';

        $filename = time() . rand(1111, 9999) . '.' . $file->getClientOriginalName();

        if ($file->move($path, $filename)) {
            Offline::create([
                'category_id' => $cID,
                'certificates' => $request->get('certificates'),
                'c_name' => $request->get('name'),
                'disc' => $request->get('disc'),
                'image' => 'extra-images/' . $filename,
                'price' => $request->get('price'),
                'syllabus' => $request->get('sy'),
                'teacher_id' => $tID,
                'branch' => $request->get('branch'),
                'startClock' => $request->get('startClock'),
                'endClock' => $request->get('endClock'),
                'startDate' => $request->get('startDate'),
                'branchTelephone' => $request->get('telephone'),
            ]);


            return redirect('offlinecontrol');
        }
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
        $offline = Offline::find($id);

        $teachers = Teacher::all();

        $categories = Category::all();
        if (Auth::user()->flag == 'admin')
            return view('control.offlines.edit', compact('offline', 'teachers', 'categories'));
        else
            return redirect('offline');
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
            'price' => 'required',
            'disc' => 'required',
            'sy' => 'required',
            'certificates' => 'required',
            'branch' => 'required',
            'startClock' => 'required',
            'endClock' => 'required',
            'startDate' => 'required|date',
            'telephone' => 'required',
        ]);


        $offline = Offline::find($id);









        $file = $request->file('file');

        if (!empty($file)) {


            unlink(public_path() . "/" . $offline->image);

            $path = public_path() . '/extra-images/';

            $filename = time() . rand(1111, 9999) . '.' . $file->getClientOriginalName();


            if ($file->move($path, $filename)) {


                $offline->image = 'extra-images/' . $filename;
            }
        }

        $teacher = $request->get('teacher');
        $teacher_id = Teacher::where('t_name', $teacher)->first();


        $category = $request->get('category');

        $category_id = Category::where('ca_name', $category)->first();
        $tID = $teacher_id->t_id;

        $caID = $category_id->ca_id;

        $name = $request->get('name');
        $teacher = $tID;
        $category = $caID;

        $price = $request->get('price');
        $disc = $request->get('disc');
        $sy = $request->get('sy');
        $certificates = $request->get('certificates');



        $offline->c_name = $name;
        $offline->teacher_id = $teacher;
        $offline->category_id = $category;
        $offline->price = $price;
        $offline->disc = $disc;
        $offline->syllabus = $sy;
        $offline->certificates = $certificates;

        $offline->branch = $request->get('branch');
        $offline->branchTelephone = $request->get('telephone');
        $offline->startDate = $request->get('startDate');
        $offline->endClock = $request->get('endClock');
        $offline->startClock = $request->get('startClock');


        $offline->save();

        return redirect('offlinecontrol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {

        $offline = Offline::find($id);
        unlink(public_path() . "/" . $offline->image);
        $offline->delete();
        return redirect('offlinecontrol');
    }

}
