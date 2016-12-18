<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class AboutController extends Controller
{
	public function tahkem(){


		return view('about.tahkem');
	}
   

   public function agraya(){
$teachers=Teacher::limit(3)->get();

   	return view('about.agraya',compact('teachers'));
   }



   public function momyzat(){
$teachers=Teacher::limit(3)->get();

   	return view('about.momyzat',compact('teachers'));
   }



   public function branches(){


$teachers=Teacher::limit(3)->get();

   	 	return view('about.branches',compact('teachers'));
   }
}
