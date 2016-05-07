<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
	protected $fillable=[
	'question_name',
	'category_id',
	'about_question',
	'question_img',
	'question_score'
	];
  public function categories()
  {
    return $this->belongsTo('App\Categories','category_id','id');
  }

  public function answers()
  {
    return $this->hasMany('App\Answers');
  }
}
