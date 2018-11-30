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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('homie', 'BookController@index'); // testing purposes only

/*Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/

// authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// books controller
// insert
Route::get('book/add/{id}', 'BookController@addfrm');
Route::post('insert', 'BookController@insert');
Route::post('/book', 'BookController@store');

// show
//Route::get('/books', 'BookController@index');

// delete
Route::get('/book/del/{book}', 'BookController@destroy');

// edit
Route::get('book/edit/{id}', 'BookController@editfrm');
Route::post('edit/{id}', 'BookController@edit');

// search
Route::post('home/src', 'HomeController@search');
