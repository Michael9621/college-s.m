@extends('admin.layouts.frontend')

@section('content')
<h1>create a unit</h1>
<div class="card">
  <div class="card-body">
    <form method="POST" action="{{route('store_unit')}}">
      <div class="form-group">
        <label for="exampleFormControlInput1">Unit name</label>
        <input type="text" class="form-control bg-dark" id="exampleFormControlInput1" placeholder="e.g introduction to ict" name="name">
      </div>
      
      <div class="form-group">
        <label for="exampleFormControlSelect1">course</label>
        <select class="form-control bg-dark" id="exampleFormControlSelect1" name="course">
           @if($courses->count()>0)
            @foreach($courses as $course)
              <option value="{{ $course->id }}">{{ $course->name }}</option>
            @endforeach
          @endif
        </select>
      </div>

      <div class="form-group">
        <label for="exampleFormControlSelect1">lecturer</label>
        <select class="form-control bg-dark" id="exampleFormControlSelect1" name="user">
          @if($users->count()>0)
            @foreach($users as $user)
              <option value="{{ $user->id }}">{{ $user->staffName }}</option>
            @endforeach
          @endif
        </select>
      </div>

      <button class="btn btn-primary animation-on-hover" type="submit">Submit</button>

      {{ csrf_field() }}
    </form>
  </div>
</div>
@endsection
