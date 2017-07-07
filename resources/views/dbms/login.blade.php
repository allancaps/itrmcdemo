@extends('templates/mainTemplate')

@section('pageheader','Login Page')

@section('pagetitle','Login')

@section('body')
<form method="post" action="loginprocess">
	<table class="table table-striped table-bordered">
	<tr>
		<td>Username</td>
		<td><input type="text" name="txt_uname"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="txt_pword"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="btn_login" value="Login"></td>
	</tr>
	</table>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
@stop {{--End body--}}