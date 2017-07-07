@extends('day2/template1')

@section('pagetitle','Child 5')

@section('pageheader', 'Laravel - Child 5 Page')

@section('body')
@parent
Using Stop<br />
@stop

@section('body')
@parent
Using End Section-Stop...<br />
@stop

@section('body')
@parent
Now Using Show-Stop...<br />
@stop