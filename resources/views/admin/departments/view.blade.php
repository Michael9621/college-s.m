@extends('admin.layouts.frontend')

@section('content')
<h1>All Departments</h1>
 <div class="card">
  <div class="card-body">
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>H.O.D</th>
                <th>view department</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @if($departments->count()>0)
                @foreach($departments as $department)
                    <tr>
                        <td>{{ $department->name }} department</td>
                        @foreach($users as $user)
                            @if($user->hod==1 && $user->department_id == $department->id)
                                <td>{{$user->staffName}}</td>
                            @elseif($user->hod==0 && $user->department_id == $department->id)
                                <td>no H.O.D</td>
                            @endif
                        @endforeach
                        <?php 
                           /* @foreach($users as $user)
                                @if($user->hod==0 && $user->department_id == $department->id)
                                    <td>{{$user->staffName}}</td>
                                @//elseif(count($user->hod==1 && $user->department_id == $department->id))
                                    <td >none</td>
                                @endif
                            @endforeach*/ 
                        ?>   
                    <td><a class="btn btn-info btn-simple" href="{{ route('single_department',['id' => $department->id]) }}">view departments</a></td>
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
                    <th colspan="5" class="text-center">No departments</th>
                </tr>
            @endif 
        </tbody>
    </table>
  </div>
</div> 


@endsection