@extends('admin.layouts.frontend')

@section('content')

<p><b> Lecturer's department : </b> {{ $lecturer->departments->name}}</p>

<p><u>units taught</u></p>
@foreach($lecturer->units as $unit)
	<p>{{ $unit->name }}</p>
	<a class="btn btn-info btn-simple" href="{{ route('single_unit',['id' => $unit->id]) }}">check units</a>
	<a class="btn btn-info btn-simple" href="{{ route('unit_result',['id' => $unit->id]) }}">check unit result</a>
	<a class="btn btn-info btn-simple"  href="{{ route('unitpdf',['id' => $unit->id]) }}" target="_blank">view pdf</a>
@endforeach

@endsection