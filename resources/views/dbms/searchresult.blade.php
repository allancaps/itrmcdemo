@extends('templates/mainTemplate')

@section('pageheader','Search Result')

@section('pagetitle','Result')

@section('body')
<table align="center" width="80%">
	<tr>
		<th>Employee ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Department</th>
		<th>Position</th>
		<th>Picture</th>
	</tr>
	@foreach($records as $record)
	<tr>
		<td>{{ $record->emp_id }}</td>
		<td>{{ $record->firstname }}</td>
		<td>{{ $record->lastname }}</td>
		<td>{{ $record->department }}</td>
		<td>{{ $record->position }}</td>
		<td>{{ $record->pic }}</td>
	</tr>
	@endforeach
</table>
@stop {{--End body--}}