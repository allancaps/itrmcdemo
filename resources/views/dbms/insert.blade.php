@extends('templates/mainTemplate')

@section('pageheader','Search Records')

@section('pagetitle','Search')

@section('body')
	<form method="post" action="insertprocess" enctype="multipart/form-data">
	<table class="table table-striped table-bordered">
	<tr>
		<td>First Name</td>
		<td><input type="text" name="txt_fname"></td>
	</tr>
	<tr>
		<td>Last Name</td>
		<td><input type="text" name="txt_lname"></td>
	</tr>
	<tr>
		<td>Department</td>
		<td>
			<select name="cbo_dept">
				<option value="Budget" selected>Budget</option>
				<option value="Opthalmology">Opthalmology</option>
			</select>			
		</td>
	</tr>
	<tr>
		<td>Position</td>
		<td>
			<select name="cbo_pos">
				<option value="Executive" selected>Executive</option>
				<option value="Associate">Associate</option>
			</select>			
		</td>
	</tr>
	<tr>
		<td>Picture</td>
		<td>
			<input type="file" name="file_pic">		
		</td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="btn_add" value="Add Record"></td>
	</tr>
	</table>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
@stop {{--End body--}}