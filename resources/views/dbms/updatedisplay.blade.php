@extends('templates/mainTemplate')

@section('pageheader','Search Records')

@section('pagetitle','Search')

@section('body')
	@foreach($record as $record)
	<form method="post" action="../updateprocess">
	<table class="table table-striped table-bordered">
	<tr>
		<td>Employee ID</td>
		<td><input type="text" name="txt_empid" value="{{ $record->emp_id }}" readonly></td>
	</tr>
	<tr>
		<td>First Name</td>
		<td><input type="text" name="txt_fname" value="{{ $record->firstname }}"></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="txt_lname" value="{{ $record->lastname }}"></td>
	</tr>
	<tr>
		<td>Department</td>
		<td><input type="text" name="txt_dept" value="{{ $record->department }}"></td>
	</tr>
	<tr>
		<td>Position</td>
		<td><input type="text" name="txt_pos" value="{{ $record->position }}"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="btn_edit" value="Edit Record"></td>
	</tr>
	</table>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
	@endforeach
@stop {{--End body--}}