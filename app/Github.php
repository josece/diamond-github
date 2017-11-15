<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GuzzleHttp\Client;

class Github extends Model
{


	/**
	 * Get follower
	 * @param  [type] $username [description]
	 * @return [type]           [description]
	 */
	public function followers($username = null, $page = 1)
	{
		$token = env('GITHUB_TOKEN','');

		$client = new Client(['base_uri' => 'https://api.github.com/users/']);
		$headers = [
			'Authorization' => 'Bearer ' . $token,        
			'Accept'        => 'application/json',
		];

		try{
			$response = $client->get("$username/followers?page=$page", array('headers'=> $headers));
		}catch(\Exception $e){
			return "[]";
		}
		return $response;
	}

}