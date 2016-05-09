<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
       public function questions()
	{
    	return $this->belongsTo('App\Questions','questions_id','id');
	}
}
