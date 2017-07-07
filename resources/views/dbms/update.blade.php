@extends('templates/mainTemplate')

@section('pageheader','Search Records')

@section('pagetitle','Search')

@section('body')
	<form method="post" action="updatedisplay">
	<table class="table table-striped table-bordered">
	<tr>
		<td>Search By:</td>
		<td>
			<select name="cbo_editkey">
				<option value="emp_id" selected>Employee ID</option>
				<option value="lastname">Last Name</option>
				<option value="department">Department</option>				
			</select>
		</td>
		<td><input type="text" name="txt_updateby"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="btn_search" value="Search"></td>
	</tr>
	</table>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
@stop {{--End body--}}