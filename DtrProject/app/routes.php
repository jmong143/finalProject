<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/login/index', array('as' => 'login', 'uses'=>'LoginController@index'));
Route::post('/login/login-process', array('as' => 'login.process', 'uses'=>'LoginController@loginProcess'));
Route::get('/login/admin', array('as' => 'admin', 'uses'=>'LoginController@adminIndex'));
Route::get('/login/admin-users-list', array('as' => 'admin.list', 'uses'=>'LoginController@adminList'));
Route::get('/login/view{id}', array('as'=>'view', 'uses'=>'LoginController@view'));
Route::any('/login/delete', array('as' => 'destroy', 'uses' => 'LoginController@delete'));
Route::get('/login/user', array('as' => 'user', 'uses' => 'LoginController@user'));
Route::post('/login/logout', array('as' => 'logout', 'uses'=>'LoginController@getLogout'));
Route::post('/login/date-time-in', array('as' => 'dtin', 'uses'=>'LoginController@dtInProcess'));
Route::post('/login/date-time-out', array('as' => 'dtout', 'uses'=>'LoginController@dtOutProcess'));

