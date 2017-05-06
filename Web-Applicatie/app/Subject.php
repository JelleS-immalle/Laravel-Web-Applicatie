<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
	public function teacher()
	{
		return $this->belongsTo('\App\Teacher');
	}

	public function students()
	{
		return $this->belongsToMany('\App\Student');
	}
}
