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

// Home routes...
Route::get('/', ['as' => '/', 'uses' => 'HomeController@index']);
Route::get('home', 'HomeController@index');
Route::post('/', ['as' => '/', 'uses' => 'HomeController@create']);

// call ajax 
Route::get('count-messages', ['as' => 'count-messages', 'uses' => 'HomeController@countMessages']);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);


// Password reset link request routes...
Route::get('password/email', ['as' => 'password/email', 'uses' => 'Auth\PasswordController@getEmail']);
Route::post('password/email', ['as' => 'password/postEmail', 'uses' => 'Auth\PasswordController@postEmail']);

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', ['as' => 'password/postReset', 'uses' =>  'Auth\PasswordController@postReset']);

// Rol Routes
Route::get('rol/create', ['as' => 'rol/create', 'uses' => 'RolController@index']);
Route::post('rol/create', ['as' => 'rol/create', 'uses' => 'RolController@create']);


// User-Rol routes...
Route::get('users-rol/create', ['as' => 'users-rol/create', 'uses' => 'Users_RolController@index']);
Route::post('users-rol/create', ['as' => 'users-rol/create', 'uses' => 'Users_RolController@create']);


// Messages routes...
Route::get('messages/create', ['as' => 'messages/create', 'uses' => 'MessageController@index']);
Route::post('messages/create', ['as' => 'messages/create', 'uses' => 'MessageController@create']);
Route::get('messages/gallery', ['as' => 'messages/gallery', 'uses' => 'MessageController@gallery']);
Route::get('messages/calendar', ['as' => 'messages/calendar', 'uses' => 'MessageController@calendar']);
//Route::get('messages/create{id}','MessageController@getrol');


// Message Type routes...
Route::get('message-type/index', ['as' => 'message-type/index', 'uses' => 'Message_TypeController@index']);
Route::post('message-type/create', ['as' => 'message-type/create', 'uses' => 'Message_TypeController@create']); 

Route::get('message-type/update', ['as' => 'message-type/update', 'uses' => 'Message_TypeController@update']);

// chat ajax Prueba

Route::get('/chat',['as' => '/chat', 'uses' => 'HomeController@index']);