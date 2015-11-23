<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Milestone extends Model
{
	use SoftDeleteingTrait;
	protected $dates = ['deleted_at'];

	public function user() {
		return $this->belongsTo('\App\User');
	}
}
