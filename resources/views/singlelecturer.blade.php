@extends('admin.layouts.frontend')

@section('content')

<p><b> Lecturer : </b>{{ $user-> staffName }} - {{ $user->departments->name}}</p>

<p><u>units taught</u></p>
@foreach($user->units as $unit)
<p>{{ $unit->name }}</p><a class="btn btn-info btn-simple" href="{{ route('single_unit',['id' => $unit->id]) }}">check units</a>
<p>{{ $unit->name }}</p><a class="btn btn-info btn-simple" href="{{ route('unit_result',['id' => $unit->id]) }}">check unit result</a>
@endforeach

@endsection