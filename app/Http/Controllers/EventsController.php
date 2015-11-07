<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class EventsController extends Controller {
	public function getEvents() {
		return 'List of all life events';
	}

	public function getNew() {
		return 'Post new life event';
	}

	public function postPublish() {
		return 'Publish new life event';
	}

	public function postDelete() {
		return 'Life Event deleted';
	}

}

?>