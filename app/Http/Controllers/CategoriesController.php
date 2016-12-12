<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

       $cats=Category::all();

       return view('control.categories.categories',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

       return view('control.categories.create');
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


'name'=>'required'

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

        return view('control.categories.editcategory',compact('cat'));
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
