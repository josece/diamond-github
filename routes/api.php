<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('followers/{username?}/{page?}', array(
	'as' => 'followers.usernamePage', 
	'uses' => 'followersController@showFollowers'));

Route::get('user/{username?}', array(
	'as' => 'followers.user', 
	'uses' => 'followersController@userData'));