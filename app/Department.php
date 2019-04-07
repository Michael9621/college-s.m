<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    public function courses(){
    	return $this->hasMany('App\Course');
    }
    public function users(){
    	return $this->hasMany('App\User');
    }
    public function students(){
    	return $this->hasMany('App\Student');
    }
}
