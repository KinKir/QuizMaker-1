<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	protected $fillable=[
	'category_name',
	'category_time',
	'category_img',
	'about_category'
	];
    public function questions()
    {
      return $this->hasMany('App\Questions');
    }
}
