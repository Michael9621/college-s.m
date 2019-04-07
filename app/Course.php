<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
	protected $fillable = ['name','departments_id'];
	
	public function departments() {
    	return $this->belongsTo('App\Department','departments_id');
    }
    //public function units() {
     	//return $this->hasMany('App\Units');
 	//  }
    public function students(){
        return $this->hasMany('App\Student', 'courses_id');
    }

    public function units(){
        return $this->belongsToMany('App\Unit');
    }

}
