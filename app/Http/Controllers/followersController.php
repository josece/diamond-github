<?php

namespace App\Http\Controllers;

use GrahamCampbell\GitHub\Facades\GitHub;
use App\Http\Controllers\Controller;

class followersController extends Controller
{


	/**
	 * Show followers
	 * @param  [type] $username [description]
	 * @return [type]           [description]
	 */
	public function showFollowers($username = null){
		$followers = '';
		if(!empty($username)){
			$followers = GitHub::user()->followers($username);
		}
		// return $followers;
		return view('index')->withUsername($username)->withFollowers($followers);
	}
}	