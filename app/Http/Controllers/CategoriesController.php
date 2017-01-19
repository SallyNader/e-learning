<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Auth;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

       public function __construct()
{
    $this->middleware('auth');
} 


    public function index()
    {
       

       $cats=Category::all();
if(Auth::user()->flag == 'admin')
       return view('control.categories.categories',compact('cats'));
   else
    return redirect('course');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if(Auth::user()->flag == 'admin')

       return view('control.categories.create');
   else
    return redirect('course');
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
'file'=>'required'

            ]);

        Category::create([

'ca_name'=>$request->get('name')


            ]);
        return redirect('category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
      $category=Category::find($id);
      
      $categories=Category::all();
      return view('courses.listcategory',compact('category','categories'));
    }
public function showOffline($id)
    {
      
      $category=Category::find($id);
      $categories=Category::all();
      return view('courses.listcategoryoffline',compact('category','categories'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $cat=Category::find($id);
        if(Auth::user()->flag == 'admin')

        return view('control.categories.editcategory',compact('cat'));
    else
    return redirect('course');
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


'name'=>'required|unique:categories,ca_name'

            ]);
        $category=Category::find($id);

        $category->ca_name=$request->get('name');
        $category->save();

        return redirect('category');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat=Category::find($id);
               

  $cat->delete();
        return redirect()->back();
    }
}
