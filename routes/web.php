<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::group(array('prefix' => 'api'), function(){
	//Route::get('comments','CommentController',array('only' =>array('index','store','destroy') ));
	Route::resource('comments','CommentController',array('only' =>array('index','store','destroy') ));
});


