@extends('admin.layouts.frontend')

@section('content')

<div class="card">
	<div class="card-body">
		<h1>UNIT NAME: {{ $unit->name }}</h1>

        <h2>students</h2>
        <form method="POST" action="{{ route('store_result') }}">
        	
	        <label>semester</label>
	        <select>
	        	<option>1</option>
	        </select>
	        <label>test type</label>
	        <select>
	        	<option>1</option>
	        </select>
			<table class="table">
			    <thead>
			        <tr>
			            <th class="text-center">#</th>
			            <th>Name</th>
			            <th>Admission Number</th>
			            <th>Marks</th>
			        </tr>
			    </thead>
			    <tbody>
			    	@foreach($unit->courses as $course)
						@foreach( $course->students as $student)
					        <tr>
					            <td class="text-center">1</td>
					            <td>{{ $student->name }}</td>
					            <td>{{ $student->admission_number }} </td>
					            <td><input type="text" name="marks[]" class="form-control bg-dark" id="exampleFormControlInput1" placeholder="enter marks"></td>
					            <input type="hidden" name="student_id[]" value="{{$student->id}}">
					            <input type="hidden" name="unit_id[]" value="{{$unit->id}}">
						    </tr>
			            @endforeach
					@endforeach
			    </tbody>
			</table>

			<button class="btn btn-primary animation-on-hover" type="submit">Submit</button>

       {{ csrf_field() }}
		</form>
	</div>
</div>
@endsection