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

/**
 * --------
 * ignore register
 * --------
 */
Auth::routes();
// Route::get('/register', 'LoginController@index');

Route::get('/', 'LoginController@index');
Route::get('/home', 'HomeController@index');

/*
 * -------------------------------------------------
 * Admin
 * ------------------------------------------------
 */
Route::group(['prefix' => 'admin'], function() {
    Route::any('create', 'Admin\HomeController@actionCreate');
    Route::get('/', 'Admin\HomeController@actionList');
    Route::get('/list', 'Admin\HomeController@actionList');
    Route::match(['get', 'post', 'put', 'patch', 'delete'], 'item/{id}', 'Admin\HomeController@actionItem');
    Route::get('view/{id}', 'Admin\HomeController@actionView');
    Route::put('store', 'Admin\HomeController@actionStore');
});
/*
 * ----------------
 * Game
 * ---------------
 */
Route::group(['prefix' => 'game'], function() {
    Route::get('/home', 'Game\HomeController@actionIndex');
});
Route::group(['prefix' => 'events'], function() {
    Route::get('/home', 'Events\HomeController@actionIndex');
});
Route::group(['prefix' => 'oganizer'], function() {
    Route::get('/home', 'Oganizer\HomeController@actionIndex');
});


/*
 * -----------
 * Team
 * ----------
 */
Route::group(['prefix' => 'school'], function() {
    Route::get('/home', 'Game\HomeController@actionIndex');
});
Route::group(['prefix' => 'team'], function() {
    Route::get('/home', 'Team\HomeController@actionIndex');
});
Route::group(['prefix' => 'member'], function() {
    Route::get('/home', 'Member\HomeController@actionIndex');
});



