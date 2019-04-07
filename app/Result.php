<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
	 protected $fillable=['user_id', 'student_id', 'marks'];
	 
    public function unit(){
    	return $this->belongsTo('App\Unit');
    }

    public function student(){
    	return $this->belongsTo('App\Student');

    }
}
