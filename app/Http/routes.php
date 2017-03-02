<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::group(['middleware' => 'admin'], function () {

	Route::get('/admin/singer', 'SingerController@index');
	Route::post('/admin/singer', 'SingerController@store');
	Route::get('/admin/singer/{id}/edit', 'SingerController@edit');
	Route::patch('/admin/singer/{id}','SingerController@update');
	Route::get('/admin/singer/{id}/delete', 'SingerController@destroy'); 

	Route::get('admin/showman', 'ShowmanController@index');
	Route::post('/admin/showman', 'ShowmanController@store');
	Route::get('/admin/showman/{id}/edit', 'ShowmanController@edit');
	Route::patch('/admin/showman/{id}','ShowmanController@update');
	Route::get('/admin/showman/{id}/delete', 'ShowmanController@destroy'); 

	Route::get('admin/gallery', 'GalleryController@index');
	Route::post('admin/gallery', 'GalleryController@store');
	Route::get('/admin/gallery/{id}/edit', 'GalleryController@edit');
	Route::patch('/admin/gallery/{id}','GalleryController@update');
	Route::get('/admin/gallery/{id}/delete', 'GalleryController@destroy'); 

	Route::get('admin/interview', 'InterviewController@index');
	Route::post('admin/interview', 'InterviewController@store');
	Route::get('/admin/interview/{id}/edit', 'InterviewController@edit');
	Route::patch('/admin/interview/{id}','InterviewController@update');
	Route::get('/admin/interview/{id}/delete', 'InterviewController@destroy'); 

	Route::get('admin/text', 'TextController@index');
	Route::post('admin/text', 'TextController@store');
	Route::get('/admin/text/{id}/edit', 'TextController@edit');
	Route::patch('/admin/text/{id}','TextController@update');
	Route::get('/admin/text/{id}/delete', 'TextController@destroy'); 	

});

Route::get('adminka', ['middleware' => 'admin', function(){
	echo "Welcome";
}]);

Route::get('/','RouteController@home');

// Route::get('/home','RouteController@home');

Route::get('/showman', 'RouteController@showman');

Route::get('/singer', 'RouteController@singer');

Route::get('/gallery', 'RouteController@gallery');

Route::get('/interview', 'RouteController@interview');

Route::get('/about', 'RouteController@about');


Route::auth();


