<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', array(
	'as' => 'followers.list', 
	'uses' => 'followersController@showFollowers'));
 
Route::post('/{username}', array(
	'as' => 'followers.show', 
	'uses' => 'followersController@showFollowers'));

Route::get('/{username}', array(
	'as' => 'followers.show2', 
	'uses' => 'followersController@showFollowers'));