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

Route::get('about','PagesController@about');


Route::get('contact/{name}','PagesController@contact');

Route::get('contact/{id}',function($id){
	return 'User'.$id;
});

Route::get('/', function()
{
    return 'Hello World';
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
