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


Route::resource("formulario","formController");
Route::get('formulario', ['as'=>'formulario','uses'=>"formController@index"]);

