<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class UsersController extends Controller {
	public function getSignUp() {
		return 'Create new account';
	}

	public function getLogin() {
		return 'Login to existing account';
	}

}

?>