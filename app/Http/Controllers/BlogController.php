<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class BlogController extends Controller {
	
	public function getBlog() {

		//Retrieve posts in database

		return view('blog.view-blog');
	}

	public function getNew() {
		return view('blog.new-post');
	}

	public function postPublish(Request $request) {

		//Add post to database

		$title = $request->input('title');
		return view('blog.publish')->with('title', $title);
	}

	public function postDelete() {
		return 'Delete blog post';
	}

	public function getPost() {
		//
	}

	public function getEdit() {
		//
	}
}

?>