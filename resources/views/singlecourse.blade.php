@extends('admin.layouts.frontend')

@section('content')

<p>Department : {{ $course->departments->name}}</p>
<p>Course name : {{ $course->name }}</p>

<br>

<p>course units</p>

<br>

@foreach($course->units as $unit)
	@foreach($unit->users as $user)
	<p>
	   {{$unit->name}} - {{$user->name}}
	</p>
	@endforeach
@endforeach
<br>
<h5>students</h5>
@foreach($course->students as $student)

  <p>{{ $student->name }} - {{ $student->admission_number }}</p>

@endforeach


@endsection

