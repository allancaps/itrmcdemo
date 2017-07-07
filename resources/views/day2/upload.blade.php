@extends('day2/template1')

@section('pagetitle','Upload')

@section('pageheader', 'Upload Files')

@section('body')

<form method="post" action="uploadprocess" enctype="multipart/form-data">
	<table cellspacing="2" border="0">
	<tr>
		<td>Upload an Image:</td>
		<td><input type="file" name="file1"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="btn_submit" value="Upload File"></td>
	</tr>
	</table>
	<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
</form>

<a href="/project1/public/public_uploads/Hydrangeas.jpg">Download Picture</a><br />
<a href="/project1/public/public_uploads/sample.txt">Download Text File</a><br />
<a href="/project1/public/public_uploads/sample.zip">Download Zip File</a><br />

@stop