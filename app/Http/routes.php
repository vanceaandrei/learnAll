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

Route::group(['middleware' => ['web']], function () {
	//routes for everyone
	Route::get('/', function(){
		return view('welcome');
	});

    Route::get('/profile', 'UsersController@profile');
    Route::get('/editPicture' , 'UsersController@editPicture');

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
	
    Route::get('/home', 'HomeController@index');

});
