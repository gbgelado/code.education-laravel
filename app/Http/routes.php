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

Route::get('/', function () {
    // return view('welcome');
	echo "gabge.com.br";
});

Route::get('client', 'CLientController@index');
Route::post('client', 'CLientController@store');
Route::get('client/{id}', 'CLientController@show');
Route::delete('client/{id}', 'CLientController@destroy');