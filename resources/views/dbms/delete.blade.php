@extends('templates/mainTemplate')

@section('pageheader','Search Records')

@section('pagetitle','Search')

@section('body')
	<form method="post" action="deleteprocess" onsubmit="return confirm('Are you sure you want to delete this record?');">
	<table class="table table-striped table-bordered">
	<tr>
		<td>Enter Employee ID To Delete:</td>
		<td><input type="text" name="txt_delete"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="btn_delete" value="Delete"></td>
	</tr>
	</table>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
@stop {{--End body--}}