<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Album;
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
        $images=Image::limit(4)->get();
        return view('home.home',compact('images'));
    }
}
