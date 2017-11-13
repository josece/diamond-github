<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class followersController extends Controller
{
	public function showFollowers($username = null){
		$followers  = '';
		 return view('index')->withUsername($username)->withFollowers($followers);
	}
}	