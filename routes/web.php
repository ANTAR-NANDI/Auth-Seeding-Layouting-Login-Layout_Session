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
Route::group(['middleware' => 'checkloggedin'], function(){
	Route::get('/', function () {
	    return view('welcome');
	});
	Route::get('logout','AuthController@logout');

});


Route::get('login', 'AuthController@login');

Route::post('loginstore', 'AuthController@loginstore');


Route::group(['middleware'=>'checkteacher'], function(){
	Route::get('create_ct', 'AuthController@create_ct');
	Route::get('enter_ct', 'AuthController@enter_ct');
});

Route::group(['middleware'=>'checkstudent'], function(){
	Route::get('view-ct', 'AuthController@view_ct');
	Route::get('view-routine', 'AuthController@view_routine');
});

// Layout
Route::get('user', function(){
	return view('website.pages.home');
});

Route::get('about', function(){
	return view('website.pages.about');
});

Route::get('service', function(){
	return view('website.pages.service');
});
Route::get('contact', function(){
	return view('website.pages.contact');
});

Route::get('admin', function(){
	return view('admin.pages.home');
});
Route::get('chart', function(){
	return view('admin.pages.chart');
});