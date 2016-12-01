<?php
use App\Image;
use App\Course;
use App\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('image/{$id}','ImagesController@index');

Route::get('o','CoursesController@o');

Route::get('/',function(){
$courses=Course::limit(4)->get();
 $images=Image::limit(4)->get();

 $category=Category::limit(2)->get();
    return view('home',compact('images','courses','category'));
});

Route::resource('album','AlbumsController');
Route::resource('course','CoursesController');
Route::resource('image','ImagesController');
Route::resource('home','HomeController');
Route::resource('article','ArticlesController');
Route::resource('category','CategoriesController');
Route::resource('teacher','TeachersController');

Route::resource('video','VideosController');



Route::get('agraya','AboutController@agraya');
Route::get('momyzat','AboutController@momyzat');


Route::get('signup',function(){

	return view('signup');
});



Auth::routes();
// Route::get('logout', 'AuthController@getLogout');
// Route::get('logout', 'LoginController@getLogout');
//Route::get('/home', 'HomeController@index');


Route::get('profile',function(){


	return view('profile.profile');
});



//add course to account



Route::get('addcourse/{userid}/{courseid}','ProfileController@addCourseToAccount');




Route::get('profile','ProfileController@myCourses');




//admin pannel routes



Route::resource('user','UsersController');

Route::resource('teachercontrol','TeacherscontrolController');
Route::resource('coursecontrol','CoursescontrolController');

Route::resource('articlecontrol','ArticlescontrolController');

Route::resource('typecontrol','TypscontrolController');

Route::resource('albumcontrol','AlbumscontrolController');