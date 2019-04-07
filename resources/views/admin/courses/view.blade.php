@extends('admin.layouts.frontend')

@section('content')
<h1>All Courses</h1>
<div class="card">
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Name</th>
                <th>Departments</th>
                <th>View Courses</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @if($courses->count()>0)
            @foreach($courses as $course)
                <tr>
                    <td class="text-center">{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->departments->name}}</td>
                    <td><a class="btn btn-info btn-simple" href="{{ route('single_course',['id' => $course->id]) }}">view course</a></td>
                    <td class="td-actions">
                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                            <i class="tim-icons icon-pencil"></i>
                        </button>
                    </td>
                    <td>
                        <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                            <i class="tim-icons icon-scissors"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
         @else
            <tr>
                <th colspan="5" class="text-center">No courses</th>
            </tr>
         @endif 
        </tbody>
    </table>
  </div>
</div> 



@endsection