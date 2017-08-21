<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Auth;

class ArticlescontrolController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $articles = Article::all();

        if (Auth::user()->flag == 'admin')
            return view('control.articles.articles', compact('articles'));
        else
            return redirect('article');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        if (Auth::user()->flag == 'admin')
            return view('control.articles.create');
        else
            return redirect('article');
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
            'title' => 'required',
            'article' => 'required'
        ]);


        Article::create([
            'a_title' => $request->get('title'),
            'a_article' => $request->get('article'),
            'a_publisher' => $request->get('name')
        ]);

        return redirect('articlecontrol');
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


        $article = Article::find($id);

        if (Auth::user()->flag == 'admin')
            return view('control.articles.editarticle', compact('article'));
        else
            return redirect('article');
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
            'title' => 'required',
            'article' => 'required',
            'date' => 'required'
        ]);


        $article = Article::find($id);

        $article->a_publisher = $request->get('name');
        $article->a_title = $request->get('title');

        $article->a_article = $request->get('article');
        $article->created_at = $request->get('date');

        $article->save();


        return redirect('articlecontrol');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $article = Article::find($id);

        $article->delete();

        return redirect()->back();
    }

}
