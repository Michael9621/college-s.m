<?php

Auth::routes();

Route::group([ 'middleware' => 'auth'], function(){
	//Route::get('/', 'HomeController@index')->name('home');

	Route::get('/  ', 'FrontEndController@index')->name('home');

	Route::get('/lecturer', 'UserController@lecturer')->name('profile');
	Route::get('/units/single{id}', 'UnitController@show')->name('single_unit');
	Route::get('/admin/results/unit_result{id}', 'ResultController@singleunit')->name('unit_result');
	Route::post('/results', 'ResultController@store')->name('store_result');

	Route::get('/unitpdf{id}', 'ResultController@unitpdf')->name('unitpdf');

	Route::group([ 'middleware' => 'admin'], function(){
		Route::get('/admin/departments/view', 'DepartmentController@index')->name('view_department');
		Route::get('/admin/departments/create', 'DepartmentController@create')->name('create_department');
		Route::post('/admin/departments/create', 'DepartmentController@store')->name('store_department');
		Route::get('/departments/single{id}', 'DepartmentController@show')->name('single_department');

		Route::get('/admin/students/view', 'StudentController@index')->name('view_students');
		Route::get('/admin/students/create', 'StudentController@create')->name('create_student');
		Route::post('/admin/students/store', 'StudentController@store')->name('store_student');
		Route::get('/studentprofile/{id}', 'StudentController@show')->name('studentprofile');


		Route::get('/admin/courses/view', 'CourseController@index')->name('view_courses');
		Route::get('/admin/courses/create', 'CourseController@create')->name('create_course');
		Route::post('/admin/courses/store', 'CourseController@store')->name('store_course');
		Route::get('/courses/single{id}', 'CourseController@show')->name('single_course');

		Route::get('/admin/units/view', 'UnitController@index')->name('view_units');
		Route::get('/admin/units/create', 'UnitController@create')->name('create_unit');
		Route::post('/admin/units/store', 'UnitController@store')->name('store_unit');
		
		Route::get('/results/view', 'ResultController@index')->name('view_result');
		
		Route::get('admin/results/student_result', 'ResultController@student_result')->name('student_result');
		Route::get('admin/results/single_student/{id}', 'ResultController@singlestudent')->name('single_student_result');
		Route::get('/studentpdf/{id}', 'ResultController@studentpdf')->name('studentpdf');


		Route::get('/admin/users/view', 'UserController@index')->name('view_users');
		Route::get('/admin/users/create', 'UserController@create')->name('create_user');
		Route::post('/admin/users/create', 'UserController@store')->name('store_user');
		Route::get('/lecturers/single{id}', 'UserController@show')->name('single_lecturer');
	});
	
});
