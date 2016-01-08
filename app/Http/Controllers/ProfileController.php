<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class ProfileController extends Controller {
	
	public function getProfile() {
		$user = \Auth::user();

		return view('profile.view-profile')->with('user', $user);
	}

	public function getEdit() {
		$user = \Auth::user();

		return view('profile.edit-profile')->with('user', $user);
	}

	public function postEdit(Request $request) {
		$user = \Auth::user();

		$bd = $request->birthday;

		$user->name = $request->name;
		$user->birthday = $request-> Carbon\Carbon::createFromFormat('n/d/Y', $bd);
		$user->gender = $request->gender;
		$user->pronouns = $request->pronouns;

		$user->save();

		\Session::flash('flash_message','Profile successfully edited!');
		return redirect('/profile');
	}
}