<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
	protected $fillable = ['name'];

    public function courses(){
		return $this->belongsToMany('App\Course');
	}
	public function users(){
		return $this->belongsToMany('App\User');
	}

	public function results(){
		return $this->hasMany('App\Result');
	}
	
	public function students(){
		return $this->belongsToMany('App\Student', 'results');
	}
}
