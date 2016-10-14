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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get("/login", "LoginController@index");
//Route::post("/login", "LoginController@login");

Auth::routes();

Route::get('/', 'LoginController@index');
Route::get('/home', 'HomeController@index');

// Route::get('/team/home', 'Team\HomeController@actionIndex');
Route::group(['prefix' => 'team'], function() {
    Route::get('/home', 'Team\HomeController@actionIndex');
});
