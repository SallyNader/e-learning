<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Album;
use App\Course;
use App\Category;
use App\Article;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $courses=Course::limit(4)->get();
       $images=Image::limit(4)->get();

        $category=Category::limit(2)->get();
        $cat=Category::all();
        $articles=Article::limit(3)->get();

        return view('home.home',compact('images','courses','category','cat','articles'));
    }
}
