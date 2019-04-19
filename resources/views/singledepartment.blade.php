@extends('admin.layouts.frontend')

@section('content')

<input type="text" id="myInput" class="form-control bg-dark" onkeyup="myFilter()" placeholder="Search ...">
<div class="card">
	<div class="card-body">
  	<h1>{{ $department->name }} department</h1>
    <h4>department lecturers</h4>

  	@foreach($department->users as  $lec)
  	 @if($lec->hod==1)
       <p> <b>{{ $lec->name}} - H.O.D</b> </p>
     @else
       <p> {{ $lec->name}} </p>
     @endif
  	@endforeach

  	<h4>Department's courses</h4>
  	<table class="table" id="myTable">
	    <thead>
	        <tr>
	            <th style="width:20%;">Name</th>
	            <th style="width:60%;">Units & corresponding Lectureres</th>
	            <th>students</th>
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
			         		<p>Lec. {{ $user->name }}</p>
			         	</div>
			         	@endforeach

			         	@endforeach
		         	</div>
	           </div>
	         </td>
	         <td>
	         	{{$course->students->count()}}
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
