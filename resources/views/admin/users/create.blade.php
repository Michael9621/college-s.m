@extends('admin.layouts.frontend')  

@section('content')
<h1>create a user</h1>
<div class="card">
  <div class="card-body">
    <form method="POST" action="{{route('store_user')}}">
      <div class="form-group">
        <label for="exampleFormControlInput1">Staff name</label>
        <input type="text" name="staffName" class="form-control bg-dark" id="exampleFormControlInput1" placeholder="e.g joel">
        <label for="exampleFormControlInput1">Department name</label>
        <div class="form-group">
          <select class="form-control bg-dark" id="exampleFormControlSelect1" name="department_id">
              @if($departments->count()>0)
                @foreach($departments as $department)
                  <option value="{{ $department->id }}">{{ $department->name }}</option>
                 @endforeach
              @endif
          </select>
        </div>
        <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="hidden" value="0" name="hod">
            <input class="form-check-input" type="checkbox" value="1" name="hod">
            Check if they are a H.O.D
            <span class="form-check-sign">
                <span class="check"></span>
            </span>
        </label>
    </div>
      </div>
      
      <button class="btn btn-primary animation-on-hover" type="submit">Submit</button>
      {{ csrf_field() }}
    </form>
  </div>
</div>



@endsection
