@extends('admin.layouts.frontend')

@section('content')

    <h1>{{ $unit->name }}</h1>
	@foreach($results as $result)
		<p>{{$result->student->name}} : {{ $result->student->admission_number}} - {{$result->marks}}
         
         -
         @if($result->marks > 80)

        {{ "distinction" }}


        @endif

		</p>
	@endforeach

@endsection