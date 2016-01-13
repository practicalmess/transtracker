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

	//Save profile edits
	public function postEdit(Request $request) {
		$user = \Auth::user();

		$this->validate (
			$request,
			[
				'birthday'=>'date_format:n/j/Y'
			]);

		$bdFormatted = "";
		if ($request->birthday != "") {
			$bd = $request->birthday;
			$bdFormatted = Carbon::createFromFormat('n/j/Y', $bd);
		}
			
		$user->birthday = $bdFormatted;

		$user->name = $request->name;
		$user->gender = $request->gender;
		$user->pronouns = $request->pronouns;

		$user->save();

		\Session::flash('flash_message','Profile successfully edited!');
		return redirect('/profile');
	}
}