@extends('day2/template1')

@section('pagetitle','Upload')

@section('pageheader', 'Upload Files')

@section('body')
<table>
	<tr>
		<td>File Name:</td>
		<td>{{ $data['filename'] }}</td>
	</tr>
	<tr>
		<td>File Extension:</td>
		<td>{{ $data['extension'] }}</td>
	</tr>
	<tr>
		<td>File Size:</td>
		<td>{{ $data['size'] }} KB</td>
	</tr>
	<tr>
		<td>File Type:</td>
		<td>{{ $data['type'] }}</td>
	</tr>
	<tr>
		<td>Valid:</td>
		<td>{{ $data['valid'] }}</td>
	</tr>
	<tr>
		<td>Path:</td>
		<td>{{ $path }}</td>
	</tr>
	<tr>
		<td colspan="2">Back to <a href="upload">Upload</a></td>
	</tr>
</table>
@stop