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
				'text'=>'required|min:5',
				'date'=>'required|date_format:n/j/Y'
			]);

		$user = \Auth::user();
		$userId = $user->id;

		$post = new \App\Post();
		$post->title = $request->title;
		$post->date = $request->date;
		$post->text = $request->text;
		$post->user_id = $userId;

		$post->save();

		\Session::flash('flash_message','Your post was published!');
		return redirect('/blog');
	}

	public function getDelete($id = null) {
		$post = \App\Post::find($id);
		$user = \Auth::user();

		if(is_null($post)) {
			\Session::flash('flash_error','Post not found!');
			return redirect('/blog');
		}

		if($post->user_id != $user->id) {
			\Session::flash('flash_error','Access denied');
			return redirect('/blog');
		}

		
		return view('blog.delete')->with('post', $post);
	}

	public function postDelete(Request $request) {
		$post = \App\Post::find($request->id);
		$post->delete();

		\Session::flash('flash_message', 'Post deleted.');
		return redirect('/blog');
	}

	public function getPost($id = null) {
		$post = \App\Post::find($id);
		$user = \Auth::user();

		if(is_null($post)) {
			\Session::flash('flash_error','Post not found!');
			return redirect('/blog');
		}

		if($post->user_id != $user->id) {
			\Session::flash('flash_error','Access denied');
			return redirect('/blog');
		}

		return view('blog.view-post')->with('post',$post);
	}

	public function getEdit($id = null) {
		$post = \App\Post::find($id);
		$user = \Auth::user();

		if(is_null($post)) {
			\Session::flash('flash_error','Post not found!');
			return redirect('/blog');
		}

		if($post->user_id != $user->id) {
			\Session::flash('flash_error','Access denied');
			return redirect('/blog');
		}

		return view('blog.edit')->with('post',$post);
	}

	public function postEdit(Request $request) {
		$post = \App\Post::find($request->id);

		$this->validate(
			$request,
			[
				'title'=>'required|min:2',
				'text'=>'required|min:5'
			]);

		$post->title = $request->title;
		$post->text = $request->text;

		$post->save();

		\Session::flash('flash_message','Post successfully edited!');
		return redirect('/blog');
	}
}

?>