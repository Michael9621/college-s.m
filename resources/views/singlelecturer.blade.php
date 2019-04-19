@extends('admin.layouts.frontend')

@section('content')

<p><b> Lecturer : </b>{{ $user->name }} - {{ $user->departments->name}}</p>

<h2> units taught  <span class="badge badge-info p-2">  {{ $user->units->count()}}</span></h2>

<div class="card p-4">
	<table class="table">
	    <thead>
	        <tr>
	            <th>Name</th>
	            <th>Check units</th>
	            <th>Check unit result</th>
	        </tr>
	    </thead>
	    <tbody>
	    	@foreach($user->units as $unit)
	        <tr>
	            <td>{{ $unit->name }}</td>
	            <td><a class="btn btn-info btn-simple" href="{{ route('single_unit',['id' => $unit->id]) }}">Enter marks</a></td>
	            <td><a class="btn btn-info btn-simple" href="{{ route('unit_result',['id' => $unit->id]) }}">check unit result</a></td>
	        </tr>
	        @endforeach
	    </tbody>
	</table>
</div>

@endsection