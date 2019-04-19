<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\Unit;
use App\Department;
use App\Student;

class FrontEndController extends Controller
{
	public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function index()
    {
        return view('admin.welcome')
        ->with('students',Student::all())
        ->with('departments', Department::all())
        ->with('users', User::all())
        ->with('courses', Course::all());
    }
}
