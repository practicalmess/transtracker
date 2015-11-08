<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Required to allow 'Request' type objects

class EventsController extends Controller {
	public function getMilestones() {
		return view('events.timeline');
	}

	public function getNew() {
		return view('events.new-event');
	}

	public function postPublish(Request $request) {

		$this->validate(
			$request,
			['date' => 'date_format:m/d/Y']
			);
		$type = $request->input('type');
		if($type=='coming-out') {
			$glyph='star-empty';
			$title='Coming Out';
		} elseif($type=='presentation') {
			$glyph='user';
			$title='Presentation';
		} elseif($type=='legal') {
			$glyph='book';
			$title='Legal';
		} elseif($type=='physical') {
			$glyph='heart-empty';
			$title='Physical/Medical';
		} else {
			$glyph='sunglasses';
			$title='Other';
		}
		$date = $request->input('date');
		$desc = $request->input('description');

		//Add to database

		return view('events.publish')->with('title', $title)->with('glyph', $glyph)->with('date', $date)->with('desc', $desc);
	}

	public function postDelete() {
		return 'Life Event deleted';
	}

}

?>