@extends('admin.layouts.frontend')

@section('content')
	
	<h2>Results</h2>

    <h3>{{ $student->name }} - {{ $student->admission_number }}</h3>

	@foreach($results as $result)

		<p>{{$result->unit->name}} - {{ $result->marks}}</p>

	@endforeach

@endsection