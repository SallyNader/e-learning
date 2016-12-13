<?php
use App\Image;
use App\Course;
use App\Category;
use App\Article;
use App\Offline;


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

//category of offline courses

Route::get('category/offline/{id}','CategoriesController@showOffline');

//offline courses in certain branch
Route::get('branch/{branch}/test',"OfflinesController@inBranch");

//saerch for offline courses


Route::get('search','OfflinesController@search');
//next video



Route::get('next/{id}/{episode}',"VideosController@next");

//pervious video



Route::get('pervious/{id}/{episode}',"VideosController@pervious");
// Route::get('image/{$id}','ImagesController@index');

Route::get('o','CoursesController@o');

Route::get('/',function(){


	$offlines=Offline::distinct()->select('branch')->get();
	$offlineCourse=Offline::all();
$courses=Course::limit(4)->get();
 $images=Image::limit(4)->get();

 $category=Category::limit(2)->get();
$articles=Article::limit(3)->get();
 $cat=Category::all();
    return view('home',compact('images','courses','category','cat','articles','offlines','offlineCourse'));
});

Route::resource('offline','OfflinesController', ['except' => ['index']]);

Route::resource('album','AlbumsController');
Route::resource('course','CoursesController');
Route::resource('image','ImagesController');
Route::resource('home','HomeController');
Route::resource('article','ArticlesController');
Route::resource('category','CategoriesController');
Route::resource('teacher','TeachersController');

Route::resource('video','VideosController');


//about
Route::get('agraya','AboutController@agraya');
Route::get('momyzat','AboutController@momyzat');
Route::get('branches','AboutController@branches');


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

Route::resource('offlinecontrol','OfflinescontrolController');