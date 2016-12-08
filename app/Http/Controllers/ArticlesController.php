<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Article;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();

        return view('articles.allarticles',compact('articles'));
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
       $name=$request->get('name');
       $address=$request->get('address');
       $mobile=$request->get('mobile');
       $email=$request->get('email');

       $article=$request->get('article');








Mail::send('template.email', ['name' => $name,'address'=>$address,'mobile'=>$mobile,'email'=>$email,'article'=>$article], function($message) use($name,$address,$mobile,$email,$article)
{
    $message->from('articles@info.com','Publisher');
    $message->to('SALLY.NADER.AHMED@hotmail.com', 'sally')->subject('مقال جديد');
});




return redirect()->back();


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {




        $article=Article::where('a_id',$id)->get();



        return view('articles.detail',compact('article'));
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
