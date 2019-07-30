@extends('admin.layouts.frontend')

@section('content')
<h1>All Students</h1>
<div class="card">
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>Admission number</th>
                <th>Name</th>
                <th>profile</th>
                <th>View results</th>
                <th>print results</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @if($students->count()>0)
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->admission_number }}</td>
                    <td>{{ $student->name }}</td>
                     <td><a class="btn btn-info btn-simple btn-sm" href="{{ route('studentprofile',['id' => $student->id]) }}">profile</a></td>
                    <td><a class="btn btn-info btn-simple btn-sm" href="{{ route('single_student_result',['id' => $student->id]) }}">view results</a></td>
                    <td><a class="btn btn-info btn-simple btn-sm" href="{{ route('studentpdf',['id' => $student->id]) }}" target="_blank">print results</a></td>

                    <td class="td-actions">
                        <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                            <i class="tim-icons icon-single-02"></i>
                        </button>
                    </td>
                    <td>
                        <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                            <i class="tim-icons icon-settings"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
         @else
            <tr>
                <th colspan="5" class="text-center">No students yet</th>
            </tr>
         @endif 
        </tbody>
    </table>
  </div>
</div> 



@endsection