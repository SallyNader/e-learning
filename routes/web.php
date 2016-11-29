<?php

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





