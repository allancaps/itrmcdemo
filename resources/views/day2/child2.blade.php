@extends('day2/template1')

@section('pageheader')
Laravel - Child 2 Page
@stop {{--End pageheader--}}

@section('pagetitle')
Child 2
@stop {{--End pagetitle--}}

@section('body')
This is Child 2 Page...<br />

<form method="post" action="child3">
	First Name: <input type="text" name="fname"><br />
	Middle Name: <input type="text" name="mname"><br />
	Last Name: <input type="text" name="lname"><br />
	<input type="submit" name="btn_submit" value="Submit"><br />

	<input type="hidden" name="_token" value="<?php echo csrf_token();?>">
</form>
@stop {{--End body--}}