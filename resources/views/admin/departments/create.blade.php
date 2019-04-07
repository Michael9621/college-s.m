@extends('admin.layouts.frontend')

@section('content')
<h1>create a department</h1>
<div class="card">
  <div class="card-body">
    <form method="POST" action="{{ route('store_department') }}">
      <div class="form-group">
        <label for="exampleFormControlInput1">Department name</label>
        <input type="text"  name="name" class="form-control bg-dark" id="exampleFormControlInput1" placeholder="e.g ict department">
      </div>
      <button class="btn btn-primary animation-on-hover" type="submit">Submit</button>

      {{ csrf_field() }}
    </form>
  </div>
</div>



@endsection
