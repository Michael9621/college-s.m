<!DOCTYPE html>
<html>
<head>
	<title>{{ $unit->name}} results</title>
	<style type="text/css">
	*{
		font-family:helvetica;
		font-size: 13px;
	}
	.image{
         text-align: center;
	}
    
    img{
       	
       	height:100px;  
    }

    h5{
    	padding: 10px;
    }

    h1{
    	text-align: center;
    	font-size: 14px
    }

    #intro{
    	width:100%;
    }

	#customers {
	  font-family: Helvetica, sans-serif;
	  border-collapse: collapse;
	  border:1px solid;
	  width: 100%;
	}

	#customers td, #customers th {
	  border: none;
	  padding: 8px;
	}

	#customers tr:nth-child(odd){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	}

	</style>
</head>
<body>
     
     <div class="image">
    	<img src="{{ public_path('assets/img/jpclogo2.jpg') }}" >
    </div>
    <h1>JEWEL PROFESSIONAL COLLEGE</h1>
	<h1>{{ $unit->name }}</h1>

	<table id="customers">
	<tr>
		<th>NAME</th>
		<th>ADMISSION NUMBER</th>
		<th>MARKS</th>
		<th>CLASS</th>
	</tr>
	@foreach($results as $result)
		
	    	<tr>
	    		<td>{{$result->student->name}}</td>
	    		<td>{{ $result->student->admission_number}}</td>
	    		<td>{{$result->marks}}</td>
	    		<td>@if($result->marks >=75)

		        	{{ "DISTINCTON" }}

		        @elseif($result->marks > 59 && $result->marks < 75)
		    
		    		{{ "CREDIT" }}

		    	@elseif($result->marks > 39 && $result->marks < 60)
		        
		        	{{ "PASS" }}

		        @else

		        	{{ "FAIL" }}

		        @endif
				</td>
	    	</tr>
	    
	@endforeach
	</table>

<br>


<h5><b>Key to grading system</b></h5>
    <table id="intro">
    	<tr>
    		<td>75 and above</td>
    		<td>DISTINCTION</td>
    	</tr>
    	<tr>
    		<td>60 - 74</td>
    		<td>CREDIT</td>
    	</tr>
    	<tr>
    		<td>40 - 59</td>
    		<td>PASS</td>
    	</tr>
    	<tr>
    		<td>39 and below</td>
    		<td>FAIL</td>
    	</tr>
    </table>

<br>

</body>
</html>

    
