@extends('admin.layouts.frontend')

@section('content')
<h1>All Lecturers</h1>
<div class="card">
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th class="text-center">#</th>
                <th>Name</th>
                <th>Department</th>
                <th>Units</th>
                <th>View course</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @if($users->count()>0)
            @foreach($users as $user)
                <tr>
                    <td class="text-center">{{ $user->id }}</td>
                    <td>{{ $user->staffName }}</td>
                    <td>{{ $user->departments->name}}
                        @if($user->hod==1)
                          <span><b>: H.O.D </b></span>
                        @endif
                    </td>
                    <td>
                        @foreach($user->units as $unit)
                              <p>{{ $unit->name }}</p>
                        @endforeach
                        
                    </td>
                    <td><a class="btn btn-info btn-simple" href="{{ route('single_lecturer',['id' => $user->id]) }}">view users</a></td>
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
                <th colspan="5" class="text-center">No lecturers yet</th>
            </tr>
         @endif 
        </tbody>
    </table>
  </div>
</div> 



@endsection