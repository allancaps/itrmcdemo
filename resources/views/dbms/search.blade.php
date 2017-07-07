@extends('templates/mainTemplate')

@section('pageheader','Search Records')

@section('pagetitle','Search')

@section('body')
	<form method="post" action="searchresult">
	<table class="table table-striped table-bordered">
	<tr>
		<td>Search By:</td>
		<td>
			<select name="cbo_key">
				<option value="lastname" selected>Last Name</option>
				<option value="department">Department</option>
			</select>
		</td>
		<td><input type="text" name="txt_search"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="btn_search" value="Search"></td>
	</tr>
	</table>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	</form>
@stop {{--End body--}}