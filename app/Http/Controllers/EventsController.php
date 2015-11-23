<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class EventsController extends Controller {
	public function getMilestones() {
		$user = \Auth::user();
		$userId = $user->id;

		$events = \App\Milestone::where('user_id', '=', $userId)->orderBy('date', 'DESC')->get();

		return view('events.timeline')->with('events', $events);
	}

	public function getNew() {
		return view('events.new-event');
	}

	public function postPublish(Request $request) {

		$this->validate(
			$request,
			['date' => 'date_format:m/d/Y']
			);
		$type = $request->type;
		if($type=='Coming Out') {
			$glyph='star-empty';
		} elseif($type=='Presentation') {
			$glyph='user';
		} elseif($type=='Legal') {
			$glyph='book';
		} elseif($type=='Physical/Medical') {
			$glyph='heart-empty';
		} else {
			$glyph='sunglasses';
		}
		$date = $request->input('date');
		$desc = $request->input('description');

		$user = \Auth::user();
		$userId = $user->id;

		$event = new \App\Milestone();
		$event->type = $type;
		$event->glyph = $glyph;
		$event->date = $request->date;
		$event->description = $request->description;
		$event->user_id = $userId;

		$event->save();

		\Session::flash('flash_message','Your milestone was added!');
		return redirect('/milestones');
	}

	public function postDelete() {
		return 'Milestone deleted.';
	}

	public function getEdit($id = null) {
		$event = \App\Milestone::find($id);
		$user = \Auth::user();

		if(is_null($event)) {
			\Session::flash('flash_error','Milestone not found!');
			return redirect('/milestones');
		}

		if($event->user_id != $user->id) {
			\Session::flash('flash_error','Access denied');
			return redirect('/milestones');
		}

		return view('events.edit')->with('event',$event);
	}

	public function postEdit(Request $request) {
		$event = \App\Milestone::find($request->id);

		$event->type = $request->type;
		$event->date = $request->date;
		$event->description = $request->description;

		$event->save();

		\Session::flash('flash_message','Milestone successfully edited!');
		return redirect('/milestones');
	}

}

?>