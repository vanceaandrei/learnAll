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

    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/stream', function(){
    	return view('streaming.profile');
    });
    Route::get('edit/editProfile', function(){
    	return view('edit/editProfile');
    });
    Route::get('edit/editPicture', function(){
        return view('edit/editPicture');
    });
    Route::get('/profile', 'UsersController@profile');

    Route::post('edit/editPicture', 'ProfessorController@update');
    
    Route::post('edit/editProfile', 'UsersController@change');

    Route::get('/ceva', function(){
        return view('ceva');
    });
    Route::post('/home','ProfessorController@add');
    
    Route::post('/delete','ProfessorController@delete');
});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
