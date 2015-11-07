<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class BlogController extends Controller {
	
	public function getBlog() {
		return 'List view of blog posts';
	}

	public function getNew() {
		return 'Create new blog post';
	}

	public function postPublish() {
		return 'Publish new blog post';
	}

	public function postDelete() {
		return 'Delete blog post';
	}

	public function getPost() {
		//
	}
}

?>