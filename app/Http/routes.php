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

Route::get('/home',function(){
	return redirect()->intended('/');
}
		);

Route::get('/', 'HomeController@index');

Route::get('/doc','DataController@doctor');
//Route::get('/doctor','DataController@postData');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
