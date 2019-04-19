@extends('admin.layouts.frontend')

@section('content')
<h1> Dashboard</h1>
  <div class="row">
    <div class="col-lg-3">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">Total Students</h5>
          <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> {{ $students->count()}}</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">Total Departments</h5>
          <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> {{ $departments->count()}}</h3>
        </div>
      </div>
    </div>
    <div class="col-lg-3">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">Total Lecturers</h5>
          <h3 class="card-title"><i class="tim-icons icon-send text-success"></i> {{ $users->count()}}</h3>
        </div>
      </div>
    </div>
     <div class="col-lg-3">
      <div class="card">
        <div class="card-header">
          <h5 class="card-category">Total Courses</h5>
          <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i> {{ $courses->count()}}</h3>
        </div>
      </div>
    </div>
  </div>

  
@endsection

