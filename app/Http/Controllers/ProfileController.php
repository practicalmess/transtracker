<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class ProfileController extends Controller {
	
	public function getProfile() {
		$user = \Auth::user();
		/*$userId = $user->id;
		$userName = $user->name;
		$birthday = $user->birthday;
		$gender = $user->gender;
		$pronouns = $user->pronouns;*/

		return view('profile.view-profile')->with('user', $user);
	}
}