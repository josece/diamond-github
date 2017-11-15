<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Github;

class followersController extends Controller
{
	

	/**
	 * Show followers
	 * @param  [type] $username [description]
	 * @return [type]           [description]
	 */
	public function showFollowers($username = null, $page = 1){
		$github = new Github;
		$followers = $github->followers($username, $page);
		return $followers;
	}

	public function userData($username = null)
	{
		$github = new Github;
		$user = $github->user($username);
		return $user;
	}


}	