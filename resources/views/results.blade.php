@extends('admin.layouts.frontend')

@section('content')

	@foreach($results as $result)

		<p>{{$result->marks}}</p>

        @foreach($result->units as $unit)
        	{{$unit->name}}
        @endforeach

	@endforeach

@endsection