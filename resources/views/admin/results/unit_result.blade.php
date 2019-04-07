@extends('admin.layouts.frontend')

@section('content')


	@foreach($results as $result)
		<p>{{$result->student->name}} : {{ $result->student->admission_number}} - {{$result->marks}}
         
         -
         @if($result->marks > 80)

        {{ "distinction" }}


        @endif

		</p>
	@endforeach

@endsection