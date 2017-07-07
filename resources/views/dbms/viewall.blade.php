@extends('templates/mainTemplate')

@section('pageheader','View Records')

@section('pagetitle','View Records')

@section('body')
<table class="table table-striped table-bordered">
	<thead>
	<tr>
		<th style="text-align:center;">Employee ID</th>
		<th style="text-align:center;">Last Name</th>
		<th style="text-align:center;">First Name</th>
		<th style="text-align:center;">Department</th>
		<th style="text-align:center;">Position</th>
		<th style="text-align:center;">Picture</th>
		<th style="text-align:center;">Action</th>		
	</tr>
	</thead>
	<tbody>
	@foreach($records as $record)
	<tr>
		<td>{{ $record->emp_id }}</td>
		<td>{{ $record->lastname }}</td>
		<td>{{ $record->firstname }}</td>
		<td>{{ $record->department }}</td>
		<td>{{ $record->position }}</td>
		<td><img src="http://localhost/project1/public/profile_pic/{{ $record->pic }}" width="75" height="75" /></td>
		<td>
			<a href="updatequick/{{ $record->emp_id }}" class="btn btn-success">Edit</a>
			<a href="deletequick/{{ $record->emp_id }}" onclick="return confirm('Delete?');" class="btn btn-danger">Delete</a>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>

<center>
<a href="{{ $records->url(1) }}" class="btn">First</a>
<a href="{{ $records->previousPageUrl() }}" class="btn">Previous</a>
<a href="{{ $records->nextPageUrl(1) }}" class="btn">Next</a>
<a href="{{ $records->url($records->lastPage()) }}" class="btn">Last</a>
</center>

@stop {{--End body--}}