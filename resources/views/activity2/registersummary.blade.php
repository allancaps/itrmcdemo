@extends('templates/mainTemplate')

@section('pagetitle','Registration Summary')

@section('pageheader', 'Registration Summary')

@section('body')

<table>
	<tr>
		<td>Full Name:</td>
		<td>{{$reginfo['fullname']}}</td>
	</tr>
	<tr>
		<td>Birth Date:</td>
		<td>{{$reginfo['bdate']}}</td>
	</tr>
	<tr>
		<td>Department:</td>
		<td>{{$reginfo['dept']}}</td>
	</tr>
	<tr>
		<td>Position:</td>
		<td>{{$reginfo['pos']}}</td>
	</tr>
	<tr>
		<td>Path:</td>
		<td>{{$reginfo['path']}}</td>
	</tr>
	<tr>
		<td>URL:</td>
		<td>{{$reginfo['url']}}</td>
	</tr>
	<tr>
		<td>Full URL:</td>
		<td>{{$reginfo['full url']}}</td>
	</tr>
	<tr>
		<td colspan="2">Back to <a href="register">Registration</a></td>
	</tr>
</table>
@stop