<!DOCTYPE html>
<html>
<head>
	<title>{{ $student->name }}</title>
	<style type="text/css">
	   *{
			font-family:helvetica;
			font-size: 13px;
			margin: 0 10px;
		}
	   
	    .image{
	        text-align: center;
		}
	    
	    img{
	       	
	       	height:100px;  
	    }

	    .intro h2, .intro h4, .intro h5{
	    	text-align: center;
	    }

	    hr{
	    	margin:5px;
	    }

		#customers {
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
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
		#intro{
			width: 100%;
		}
	</style>
</head>
<body>
	 <div class="image">
    	<img src="{{ public_path('assets/img/jpclogo2.jpg') }}" >
    </div>
    <div class="intro">
	    <h2>JEWEL PROFESSIONAL COLLEGE</h2>
	    <h5>Jewel Complex Next to TRM Thika Road</h5>
	    <h5>P.O BOX 767-00618</h5>
	    <h5>Tel:0701 300 017 / 0777 300 201</h5>
	    
	    <hr>
	    <h4>TRANSCRIPT</h4>
	    <br>
	    <table id="intro">
	    	<tr>
	    		<td>NAME</td>
	    		<td>{{ $student->name }}</td>
	    	</tr>
	    	<tr>
	    		<td>ADMISSION NUMBER</td>
	    		<td>{{ $student->admission_number  }}</td>
	    	</tr>
	    	<tr>
	    		<td>DEPARTMENT</td>
	    		<td>{{ $student->courses->departments->name  }}</td>
	    	</tr>
	    	<tr>
	    		<td>COURSE</td>
	    		<td>{{ $student->courses->name  }}</td>
	    	</tr>
	    </table>
    </div>

    <br>

	<table id="customers">
		  <tr>
		    <th>Unit name</th>
		    <th>Marks</th>
		    <th>Class</th>
		  </tr>
		@foreach($results as $result)

			<tr style="line-height:8px; height:8px; ">
			    <td>{{$result->unit->name}}</td>
			    <td>{{ $result->marks}}</td>
			    <td>@if($result->marks >=75)

		        	{{ "DISTINCTION" }}

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

    <p><b>AVERAGE GRADE: 
     @if($av >= 75)
     	{{ "DISTINCTION" }}
     @elseif($av > 59 &&  $av < 75)
     	{{ "CREDIT" }}
     @elseif($av >39 && $av < 60)
        {{ "PASS" }}
     @else
     	{{ "FAIL" }}
     @endif</b>
    </p>
    
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
	<h5>Dean's signature:..........................................................................................</h5>
	<br>
	<h5>Principal's signature:....................................................................................</h5>
</div>

</body>
</html>
	
	

