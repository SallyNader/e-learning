<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
   

   public function agraya(){


   	return view('about.agraya');
   }



   public function momyzat(){

   	return view('about.momyzat');
   }
}
