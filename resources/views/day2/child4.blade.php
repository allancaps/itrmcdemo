@extends('day2/template1')

@section('pagetitle','Child 4')

@section('pageheader', 'Laravel - Child 4 Page')

@section('body')

This is now Page 4...<br />

	@php
	echo "hello world!";
	@endphp
	<br />

	@if($status>=75)
		Status: Passed! :D
	@else
		Status: Failed... :()
	@endif
@stop