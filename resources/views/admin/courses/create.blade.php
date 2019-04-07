@extends('admin.layouts.frontend')

@section('content')
<h1>create a course</h1>
<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('store_course') }}">
      <div class="form-group">
        <label for="exampleFormControlInput1">Course name</label>
        <input type="text" name="name" class="form-control bg-dark" id="exampleFormControlInput1" placeholder="e.g diploma ICT module 1">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">department</label>
        <select class="form-control bg-dark" id="exampleFormControlSelect1" name="departments_id">
          @if($departments->count()>0)
            @foreach($departments as $department)
              <option value="{{$department->id}}">{{ $department->name }}</option>
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
