@extends('admin.layouts.frontend')

@section('content')

<h1>All Units</h1>
<div class="card">
  <div class="card-body">
         
    <input type="text" id="myInput" class="form-control bg-dark" onkeyup="myFilter()" placeholder="Search ...">
    <table class="table" id="myTable">
        <thead>
            <tr class="text-center">
                <th>Name</th>
                <th>Courses</th>
                <th>Departments</th>
                <th>lecs</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @if($units->count()>0)
            @foreach($units as $unit)
                <tr class="text-center">
                    <td>{{ $unit->name }}</td>
                    @foreach($unit->courses as $course)
                        <td><p>{{ $course->name }}</p></td>
                        <td><p>{{ $course->departments->name }}</p></td>
                    @endforeach
                    @foreach($unit->users as $user)
                        <td>{{ $user->staffName }}</td>
                    @endforeach



                    <td class="td-actions">
                        <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                            <i class="tim-icons icon-pencil"></i>
                        </button>
                    </td>
                    <td>
                        <button type="button" rel="tooltip" class="btn btn-danger-sm btn-icon">
                            <i class="tim-icons icon-scissors"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
         @else
            <tr>
                <th colspan="5" class="text-center">No units</th>
            </tr>
         @endif 
        </tbody>
    </table>
  </div>
</div> 



@endsection