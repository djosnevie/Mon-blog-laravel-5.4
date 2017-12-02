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

/*Route::group(["as"=>"posts."], function(){
	
	Route::get('/', ["as"=>"index", 'uses'=>"PostController@index"] );	
	Route::get('show', ["as"=>"show", 'uses'=>"PostController@show"] );

});*/



Route::resource('posts', 'PostController');
Route::get('search', 'PostController@search');
Route::post('search', 'PostController@searchpost')->name('search');


Route::get('/product','ProductsController@uploadForm');
Route::post('/product',['as'=>'upload','uses'=>'ProductsController@uploadSubmit']);


Route::get('/', ['as'=>'home','uses'=>'PostController@index']);

Route::get('category/{slug}', ['as'=>'posts.category', 'uses'=>'PostController@category']);


Route::get('/home', 'HomeController@index');
