@extends('admin.layouts.frontend')

@section('content')

<input type="text" id="myInput" class="form-control bg-dark" onkeyup="myFilter()" placeholder="Search ...">
<div class="card">
	<div class="card-body">
  	<h1>{{ $department->name }} department</h1>
    <h4>department lecturers</h4>

    <ul class="list-group">
  	@foreach($department->users as  $lec)
  	 @if($lec->hod==1)
     <li class="list-group-item bg-dark"><b>{{ $lec->staffName}} - H.O.D</b>
     @else
     <li class="list-group-item bg-dark">{{ $lec->staffName}}
     @endif
     </li>
  	@endforeach
    </ul>

  	<h4>Department's courses</h4>
  	<table class="table" id="myTable">
	    <thead>
	        <tr>
	            <th style="width:30%;">Name</th>
	            <th style="width:100%;">Units & corresponding Lectureres</th>
	        </tr>
	    </thead>
	    <tbody>
	    	@if($courses->count()>0)

	    
	    	@foreach($courses as $course)
	    	<tr>
	         <td>{{ $course->name }}</td>
	         <td>
	         	<div class="container">
	         		<div class="row"> 
			         	@foreach($course->units as $unit)
			         	<div class="col-sm-6">
			         		<p>{{ $unit->name }}</p>
			         	</div>
			         	
			         	@foreach($unit->users as $user)
			         	<div class="col-sm-6">
			         		<p>Lec. {{ $user->staffName }}</p>
			         	</div>
			         	@endforeach

			         	@endforeach
		         	</div>
	           </div>
	         </td>
	         </tr>
	         @endforeach
	     	  	
	        @else
	        	<tr>
	        		<td>no courses</td>
	        	</tr>	
            @endif
	    </tbody>
    </table>
  </div>
</div> 


@endsection
