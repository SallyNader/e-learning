<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Article;
use Auth;
use DB;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function  vote(Request $request){

        $id=$request->get('id');
        $article=Article::find($id);

if(!empty($request->get('star1'))){

    DB::table('article_user')->insert([

'article_id'=>$article->a_id,
'user_id'=>Auth::user()->id

        ]);

$article->vote++;
$rate=$article->vote;


$article->save();



}

if(!empty($request->get('star2'))){
    DB::table('article_user')->insert([

'article_id'=>$article->a_id,
'user_id'=>Auth::user()->id

        ]);

$rate=$article->vote;
$rate=$rate+2;

$article->vote=$rate;


$article->save();



}

if(!empty($request->get('star3'))){
    DB::table('article_user')->insert([

'article_id'=>$article->a_id,
'user_id'=>Auth::user()->id

        ]);

$rate=$article->vote;
$rate=$rate+3;

$article->vote=$rate;


$article->save();



}
if(!empty($request->get('star4'))){
    DB::table('article_user')->insert([

'article_id'=>$article->a_id,
'user_id'=>Auth::user()->id

        ]);

$rate=$article->vote;
$rate=$rate+4;

$article->vote=$rate;


$article->save();



}
if(!empty($request->get('star5'))){
    DB::table('article_user')->insert([

'article_id'=>$article->a_id,
'user_id'=>Auth::user()->id

        ]);

$rate=$article->vote;
$rate=$rate+5;

$article->vote=$rate;


$article->save();



}
return redirect()->back();
        

        
    }
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




return redirect()->back()->withMessage('لقد تم أرسال المقال و سيتم مراجعتة لنشره');


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

        if(Auth::check()){
        $exist=DB::table('article_user')->where('article_id',$id)->where('user_id',Auth::user()->id)->get();
        if(count($exist) > 0)
            $boolean='true';
        else
            $boolean='false';

    }



        return view('articles.detail',compact('article','boolean'));
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
