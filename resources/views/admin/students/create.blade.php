@extends('admin.layouts.frontend')

@section('content')
<h1>create a student</h1>
<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('store_student') }}">
      <div class="form-group">
        <label for="exampleFormControlInput1">Student name</label>
        <input type="text" class="form-control bg-dark" id="exampleFormControlInput1" placeholder="e.g joel" name="name">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Course name</label>
        <select class="form-control bg-dark" id="exampleFormControlSelect1" name="course_id">
          @if($courses->count()>0)
            @foreach($courses as $course)
              <option value="{{ $course->id }}">{{$course->name}}</option>
            @endforeach
          @endif
        </select>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleFormControlInput1">#</label> 
              <p>JPC</p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Admission number</label> 
              <input type="text" class="form-control bg-dark" id="exampleFormControlInput1" placeholder="e.g/HD/XXX" name="number">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="exampleFormControlSelect1">year</label>
              <select class="form-control bg-dark" id="exampleFormControlSelect1" name="year">
                <option>2018</option>
                <option>2019</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <button class="btn btn-primary animation-on-hover" type="submit">Submit</button>
       {{ csrf_field() }}
    </form>
  </div>
</div>



@endsection
