<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class BlogController extends Controller {
	
	public function getBlog() {
		$user = \Auth::user();
		$userId = $user->id;
		$userName = $user->name;
		$posts = \App\Post::where('user_id', '=', $userId)->orderBy('date', 'DESC')->get();

		return view('blog.view-blog')->with('posts', $posts)->with('userName', $userName);
	}

	public function getNew() {
		return view('blog.new-post');
	}

	public function postPublish(Request $request) {

		$this->validate(
			$request,
			[
				'title'=>'required|min:2',
				'text'=>'required|min:5'
			]);

		$user = \Auth::user();
		$userId = $user->id;

		$post = new \App\Post();
		$post->title = $request->title;
		$post->date = date('Y-m-d');
		$post->text = $request->text;
		$post->user_id = $userId;

		$post->save();

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