<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects
use Carbon\Carbon;

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
		$bdFormatted = Carbon::createFromFormat('m/d/Y', $bd);

		$user->name = $request->name;
		$user->birthday = $bdFormatted;
		$user->gender = $request->gender;
		$user->pronouns = $request->pronouns;

		$user->save();

		\Session::flash('flash_message','Profile successfully edited!');
		return redirect('/profile');
	}
}