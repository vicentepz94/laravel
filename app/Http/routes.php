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
Route::resource('user','UsersController');
Route::resource('login','loginController');
Route::resource('registration','UsersController');
Route::resource('user','UsersController');
Route::resource('list','UsersController');
Route::get('list', ['as' => 'list', 'uses' => 'UsersController@index']);


Route::get('login', ['as'=>'login','uses'=>'loginController@getLogin']);
Route::post('login', ['uses'=>'loginController@postLogin']);

Route::get('registration', ['as' => 'registration', 'uses' => 'UsersController@create']);

Route::post('registration', ['uses'=>'UsersController@store']);



// Route::post('login', function () {
// 	return 'Usuario';
// });

// Route::resource("login","formController");


Route::get('/', function () {
    return view('welcome');
});
