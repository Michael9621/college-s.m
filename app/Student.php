<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $fillable=['marks'];

    public function courses(){
    	return $this->belongsTo('App\Course');
	}

	 public function results(){
    	return $this->hasMany('App\Result');
	}


	public function units(){
		return $this->belongsToMany('App\Unit', 'results');
	}

}
