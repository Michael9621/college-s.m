@extends('admin.layouts.frontend')

@section('content')



<p>{{ $student->name}}</p>
<p>Department: {{ $student->courses->departments->name}}</p>

<p>Course: {{ $student->courses->name}}</p>

<p><u>units taking</u></p>

@foreach($student->courses->units as $unit)


	<p>{{ $unit->name }}</p>

@endforeach

@endsection
